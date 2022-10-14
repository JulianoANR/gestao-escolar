<?php

namespace App\Enums;

enum TelefonesEnum : int
{
    case RESIDENCIAL = 1;
    case COMERCIAL = 2;
    case CELULAR = 3;
    case RECADOS = 4;

    public static function values(): array
    {
        return [
            self::RESIDENCIAL->value,
            self::COMERCIAL->value,
            self::CELULAR->value,
            self::RECADOS->value,
        ];
    }
}
