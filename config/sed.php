<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Credenciais SED
    |--------------------------------------------------------------------------
    |
    | Credenciais de acesso as APIs da secretaria estadual
    |
    */

    'user' => env('SED_USER'),
    'password' => env('SED_PASSWORD'),

    /*
    |--------------------------------------------------------------------------
    | URL das APIs do SED
    |--------------------------------------------------------------------------
    */

    'url' => env('SED_PROD') ? env('SED_URL_PROD') : env('SED_URL_HOMOLOG'),

    /*
    |--------------------------------------------------------------------------
    | Situação teste ou produção
    |--------------------------------------------------------------------------
    |
    | Defini se a comunição com o sed sera feita em modo de testes ou produção.
    | TRUE => acessa a url de produção do sed
    | FALSE => acessa a url de homologação do sed para debug
    |
    */

    'prod' => env('SED_ENV', false),

    /*
    |--------------------------------------------------------------------------
    | ID da Diretoria
    |--------------------------------------------------------------------------
    |
    | Para realizar as consultas as APIs
    */

    'diretoriaId' => 20208,

    /*
    |--------------------------------------------------------------------------
    | Codigo do Municipio
    |--------------------------------------------------------------------------
    |
    | Para realizar as consultas as APIs
    | Equivalente no SED : inCodMunicipio
    |
    */

    'municipioId' => 9043,

    /*
    |--------------------------------------------------------------------------
    | Codigo da Rede de Ensino
    |--------------------------------------------------------------------------
    |
    | Para realizar as consultas as APIs
    | Equivalente no SED : inCodRedeEnsino
    |
    |   1 – Estadual
    |   2 – Municipal
    |   3 – Privada
    |   4 – Federal
    |   5 – Estadual Outros (Centro Paula Souza)
    */

    'redeEnsinoCod' => 2,
];
