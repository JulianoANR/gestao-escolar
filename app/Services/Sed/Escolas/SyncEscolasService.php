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
        $escolasSedCod = getEscolasService::handle()->pluck('codEscola')->toArray();
        dd($escolasSedCod);
        $escolasCod   = Escola::all(['sed_cod_escola']);

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
