<?php

namespace App\Enums;

enum TurnosEnum : int
{
    case MANHA = 1;
    case INTERMEDIARIO = 2;
    case TARDE = 3;
    case VESPERTINO = 4;
    case NOITE = 5;
    case INTEGRAL = 6;

    public static function values(): array
    {
        return [
            self::MANHA->value,
            self::INTERMEDIARIO->value,
            self::TARDE->value,
            self::VESPERTINO->value,
            self::NOITE->value,
            self::INTEGRAL->value,
        ];
    }
}
