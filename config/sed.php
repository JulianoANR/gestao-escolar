<?php

return [

    /*
    |--------------------------------------------------------------------------
    | ID da diretoria
    |--------------------------------------------------------------------------
    |
    | Para realizar as consultas as APIs
    |
    */

    'diretoriaId' => '2',

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
    | Session Database Connection
    |--------------------------------------------------------------------------
    |
    | When using the "database" or "redis" session drivers, you may specify a
    | connection that should be used to manage these sessions. This should
    | correspond to a connection in your database configuration options.
    |
    */

    // 'connection' => env('SESSION_CONNECTION'),
];
