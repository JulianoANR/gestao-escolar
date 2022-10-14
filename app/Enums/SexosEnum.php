<?php

namespace App\Enums;

enum CorRacasEnum : int
{
    case MASCULINO = 1;
    case FEMININO = 2;

    public static function values(): array
    {
        return [
            self::MASCULINO->value,
            self::FEMININO->value,
        ];
    }
}
