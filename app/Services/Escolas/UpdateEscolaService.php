<?php

namespace App\Services\Escolas;

use App\Models\{Escola};
use Illuminate\Http\Client\Request;

class UpdateEscolasService
{
    /**
     * Retorna 
     *
     * @return bool
     */
    protected function updateEscola(Request $request, Escola $escola)
    {
        return $escola->update([
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
    }

    /**
     * Função statica para ser chamada pelo controller
     *
     */
    public static function handle(Request $request)
    {
        $class = new UpdateEscolasService;

        return $class->updateEscola($request);
    }
}
