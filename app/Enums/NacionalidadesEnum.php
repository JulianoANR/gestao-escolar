<?php

namespace App\Enums;

enum NacionalidadesEnum : int
{
    case BRASILEIRA = 1;
    case ESTRANGEIRA = 2;
    case BRASILEIRA_NASCIDO_NO_EXTERIOR = 3;

    public static function values(): array
    {
        return [
            self::BRASILEIRA->value,
            self::ESTRANGEIRA->value,
            self::BRASILEIRA_NASCIDO_NO_EXTERIOR->value,
        ];
    }
}


