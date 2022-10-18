<?php

namespace App\Enums;

enum RegioesEnum : int
{
    case EXTREMO_NORTE = 1;
    case NORTE         = 2;
    case CENTRO_NORTE  = 3;
    case CENTRO        = 4;
    case CENTRO_SUL    = 5;
    case SUL           = 6;
    case EXTREMO_SUL   = 7;

    public static function values(): array
    {
        return [
            self::EXTREMO_NORTE->value,
            self::NORTE->value,
            self::CENTRO_NORTE->value,
            self::CENTRO->value,
            self::CENTRO_SUL->value,
            self::SUL->value,
            self::EXTREMO_SUL->value,
        ];
    }
}


