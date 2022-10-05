<?php

namespace App\Services\Sed\Escolas;

use App\Enums\SedRoutersEnum;
use App\Services\Sed\AuthService as SedAuthService;
use Illuminate\Support\Facades\{DB, Http};

class GetEscolasService extends SedAuthService
{
    /**
     * Identificação da diretoria
     *
     * @var int
     */
    protected $diretoria;

    /**
     * Retorna todas as escolas cadastradas no SED na diretoria informada
     *
     * @return array
     */
    protected function getEscolas()
    {
        $response = parent::get(
            route: SedRoutersEnum::GET_ESCOLAS->value,
            body: [
                'inCodDiretoria'  => config('sed.diretoriaId'),
                'inCodMunicipio'  => config('sed.municipioId'),
                'inCodRedeEnsino' => config('sed.redeEnsinoCod'),
            ]
        );

        return $response;
    }

    /**
     * Retorna todas as escolas cadastradas no SED na diretoria informada
     *
     */
    public static function handle()
    {
        $class = new GetEscolasService;

        return $class->getEscolas();
    }
}
