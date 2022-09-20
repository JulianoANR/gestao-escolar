<?php

namespace App\Services\Sed\Escolas;

use App\Enums\SedRouters;
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
     */
    public function __invoke()
    {
        $response = parent::get(
            SedRouters::GET_ESCOLAS->value,
            [
                'inCodDiretoria'  => config('sed.diretoriaId'),
                'inCodMunicipio'  => config('sed.municipioId'),
                'inCodRedeEnsino' => config('sed.redeEnsinoCod'),
            ]
        );

        return $response;
    }
}
