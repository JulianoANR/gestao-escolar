<?php

namespace App\Enums;

enum NivelEnsinosEnum : int
{
    case ESTADUAL_SE = 1;
    case MUNICIPAL = 2;
    case PRIVADA = 3;
    case FEDERAL = 4;
    case ESTADUAL_OUTROS = 5;

    public static function values(): array
    {
        return [
            self::ESTADUAL_SE->value,
            self::MUNICIPAL->value,
            self::PRIVADA->value,
            self::FEDERAL->value,
            self::ESTADUAL_OUTROS->value,
        ];
    }
}
