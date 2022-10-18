<?php

namespace App\Services\Sed\Escolas;

use App\Enums\SedRouters;
use App\Models\Escola;
use Illuminate\Support\Facades\{DB};
use App\Services\Sed\Escolas\GetEscolasService;

class SyncEscolasService
{
    public function __construct(
        protected Escola $escola,
        protected GetEscolasService $getEscolasService
    ){}

    /**
     * Retorna todas as escolas cadastradas no SED na diretoria informada
     *
     */
    public function __invoke()
    {
        $escolas =  ($this->getEscolasService)();
    }
}
