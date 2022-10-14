<?php

namespace App\Enums;

enum EstadoCivilEnum : int
{
    case SOLTEIRO = 1;
    case CASADO = 2;
    case VIUVO = 3;
    case DIVORCIADO = 4;
    case SEPARADO = 5;
    case UNIAO_ESTAVEL = 6;
    
    public static function values(): array
    {
        return [
            self::SOLTEIRO->value,
            self::CASADO->value,
            self::VIUVO->value,
            self::DIVORCIADO->value,
            self::SEPARADO->value,
            self::UNIAO_ESTAVEL->value,
        ];
    }
}
