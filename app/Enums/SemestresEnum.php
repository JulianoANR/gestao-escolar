<?php

namespace App\Enums;

enum CorRacasEnum : int
{
    case PRIMEIRO = 1;
    case SEGUNDO = 2;
    case ANUAL = 3;

    public static function values(): array
    {
        return [
            self::PRIMEIRO->value,
            self::SEGUNDO->value,
            self::ANUAL->value,
        ];
    }
}
