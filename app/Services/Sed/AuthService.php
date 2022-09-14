<?php

namespace App\Service\Sed;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

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
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getAccessToken()
    {
        $token = DB::table('sed_access_token')->where('sistema', $this->sistema)->first();

        // Lançar exceção caso não exista token

        return $token;
    }

    /**
     * Função responsavel por gerar novos tokens
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function generateAccessToken() : void
    {
        $response = Http::withBasicAuth( config('sed.user'), config('sed.password'))->post( config('sed.url'));

        dd($response);
        // return ;
    }

    // $response = Http::withToken($this->getToken())->retry(2, 0, function ($exception, $request) {
    //     if (! $exception instanceof RequestException || $exception->response->status() !== 401) {
    //         return false;
    //     }

    //     $request->withToken($this->getNewToken());

    //     return true;
    // })->post(/* ... */);
}
