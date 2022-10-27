<?php

namespace App\Services\Sed\Escolas;

use App\Models\Escola;
use App\Services\Sed\Escolas\GetEscolasService;

class SyncEscolasService
{
    public function __construct(
        // 
    ){}

    /**
     * Sincroniza as escolas do SED com o banco de dados
     *
     */
    public function sync()
    {
        $escolasSedCod = collect(getEscolasService::handle()['outEscolas'])->pluck('outCodEscola');
        $escolasCod    = Escola::all(['sed_cod_escola'])->pluck('sed_cod_escola');

        // $escolasCod->each(function ($escola) use ($escolasSedCod) {
        //     if (!$escolasSedCod->contains($escola->sed_cod_escola)) {
                
        //     }
        // });

        $escolasSync = $escolasSedCod->diff($escolasCod);
            dd($escolasSync);

    }

    /**
     * Função statica para ser chamada pelo controller
     *
     */
    public static function handle()
    {
        $class = new SyncEscolasService;

        return $class->sync();
    }
}
