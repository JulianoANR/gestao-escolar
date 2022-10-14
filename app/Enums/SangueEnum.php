<?php

namespace App\Enums;

enum SanguesEnum : string
{
    case AB_POSITIVO = "AB+";
    case AB_NEGATIVO = "AB-";
    case A_POSITIVO = "A+";
    case A_NEGATIVO = "A-";
    case B_POSITIVO = "B+";
    case B_NEGATIVO = "B-";
    case O_POSITIVO = "O+";
    case O_NEGATIVO = "O-";

    public static function values(): array
    {
        return [
            self::AB_POSITIVO->value,
            self::AB_NEGATIVO->value,
            self::A_POSITIVO->value,
            self::A_NEGATIVO->value,
            self::B_POSITIVO->value,
            self::B_NEGATIVO->value,
            self::O_POSITIVO->value,
            self::O_NEGATIVO->value,
        ];
    }
}
