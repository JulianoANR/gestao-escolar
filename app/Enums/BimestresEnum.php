<?php

namespace App\Enums;

enum CorRacasEnum : int
{
    case PRIMEIRO = 1;
    case SEGUNDO = 2;
    case TERCEIRO = 3;
    case QUARTO = 4;
    case ANUAL = 5;

    public static function values(): array
    {
        return [
            self::PRIMEIRO->value,
            self::SEGUNDO->value,
            self::TERCEIRO->value,
            self::QUARTO->value,
            self::ANUAL->value,
        ];
    }
}
