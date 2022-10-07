<?php

namespace App\Services\Sed;

use App\Enums\{SedRoutersEnum};
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\{DB, Http};

class AuthService
{
    /**
     * Token de autentificação gerado pelo sed
     *
     * @var string
     */
    protected $sistema = 'gestaoEscolar';

    /**
     * Pega o token de autentificação do sed no banco de dados
     *
     * @return string
     */
    public function getAccessToken()
    {
        $accessToken = DB::table('sed_access_token')->where('sistema', $this->sistema)->first();

        // Caso token não esteja cadastrado no banco de dados
        if (!$accessToken) {
            Self::generateAccessToken();
            $accessToken = DB::table('sed_access_token')->where('sistema', $this->sistema)->first();
        }

        return $accessToken->token;
    }

    /**
     * Função responsavel por gerar novos tokens
     *
     * @return void
     */
    public function generateAccessToken(): void
    {
        $response = Http::withBasicAuth(
                    config('sed.user'),
                    config('sed.password'))
                ->get(
                    config('sed.url') . SedRoutersEnum::VALIDA_USUARIO->value
                );
        dd($response);

        Self::storeAccessToken($response->object()->outAutenticacao);
    }

    /**
     * Salva o token de autentificação no banco de dados
     *
     * @param  string  $token
     * @return void
     */
    public function storeAccessToken($token) : void
    {
        // TO DO: Implementar fila
        $row = DB::table('sed_access_token')->where('sistema', $this->sistema)->first();

        if ($row) {
            DB::table('sed_access_token')->where('sistema', $this->sistema)->update([
                'token' => $token,
                'updated_at' => now(),
            ]);
        } else {
            DB::table('sed_access_token')->insert([
                'token' => $token,
                'sistema' => $this->sistema,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }

    /**
     * Abstrai a lógica de de consumo de api do sed em rotas GET
     *
     * @param  string  $route
     * @param  array|null?  $body
     * @param  array|null?  $headers
     * @return void
     */
    public function get($route, $body = null, $headers = null)
    {
        $response = Http::withToken($this->getAccessToken())->retry(3, 10, function ($exception, $request) {

            // Caso o token esteja expirado, gera um novo token e tenta novamente
            if ($exception->response->status() !== 401) {
                return false;
            }
            $request->withToken($this->generateAccessToken());
            return true;

        })->get(config('sed.url') . $route, $body);

        return $response;
    }
}