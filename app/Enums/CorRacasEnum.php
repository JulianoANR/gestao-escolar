<?php

namespace App\Enums;

enum CorRacasEnum : int
{
    case BRANCA = 1;
    case PRETA = 2;
    case PARDA = 3;
    case AMARELA = 4;
    case INDIGENA = 5;
    case NAO_DECLARADA = 6;

    public static function values(): array
    {
        return [
            self::BRANCA->value,
            self::PRETA->value,
            self::PARDA->value,
            self::AMARELA->value,
            self::INDIGENA->value,
            self::NAO_DECLARADA->value,
        ];
    }
}
