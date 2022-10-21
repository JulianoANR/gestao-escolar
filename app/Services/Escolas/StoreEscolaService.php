<?php

namespace App\Services\Escolas;

use App\Models\{Escola};
use Illuminate\Http\Client\Request;

class StoreEscolasService
{
    /**
     * Id do municipio
     *
     * @var string
     */
    protected $municipio_id;

    public function __construct()
    {

    }

    /**
     * Retorna todas as escolas cadastradas no SED na diretoria informada
     *
     * @return Illuminate\Support\Collection|null
     */
    protected function storeEscola(Request $request)
    {
        $response = Escola::create([
            'sed_cod_escola' => $request->sed_cod_escola,
            'nome'           => $request->nome,
            'endereco'       => $request->endereco,
            'bairro'         => $request->bairro,
            'cep'            => $request->cep,
            'telefone'       => $request->telefone,
            'email'          => $request->email,
            'diretoria_id'   => $request->diretoria_id,
            'rede_ensino_id' => $request->rede_ensino_id,
            'municipio_id'   => $request->municipio_id,
        ]);

        return $response ? true : false;
    }

    /**
     * Função statica para ser chamada pelo controller
     *
     */
    public static function handle(Request $request)
    {
        $class = new StoreEscolasService;

        return $class->storeEscola($request);
    }
}
