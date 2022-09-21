<?php

namespace App\Enums;

enum SedRouters : string
{
    // Autenticação
    case VALIDA_USUARIO = "/Usuario/ValidarUsuario";

    // Obtem as escolas
    case GET_ESCOLAS    = '/DadosBasicos/EscolasPorMunicipio';

}

