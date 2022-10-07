<?php

namespace App\Services\Sed\Escolas;

use App\Enums\SedRoutersEnum;
use App\Services\Sed\AuthService as SedAuthService;
use Illuminate\Support\Facades\{DB, Http};

class GetEscolasService extends SedAuthService
{
    /**
     * Id do municipio
     *
     * @var string
     */
    protected $municipio_id;

    /**
     * Id da rede de ensino
     *
     * @var string
     */
    protected $rede_ensino_id;

    /**
     * Id da diretoria
     *
     * @var string
     */
    protected $diretoria_id;

    public function __construct()
    {
        $this->diretoria_id   = config('sed.diretoriaId');
        $this->rede_ensino_id = config('sed.redeEnsinoId');
        $this->municipio_id   = config('sed.municipioId');
    }

    /**
     * Retorna todas as escolas cadastradas no SED na diretoria informada
     *
     * @return Illuminate\Support\Collection|null
     */
    protected function getEscolas()
    {
        $response = parent::get(
            route: SedRoutersEnum::GET_ESCOLAS->value,
            body: [
                'inCodDiretoria'  => $this->diretoria_id,
                'inCodMunicipio'  => $this->municipio_id,
                'inCodRedeEnsino' => $this->rede_ensino_id,
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
