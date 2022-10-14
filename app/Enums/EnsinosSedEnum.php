<?php

namespace App\Enums;

enum EnsinosEnum : int
{
    case EJA_FUNDAMENTAL_ANOS_INICIAIS = 1;
    case EJA_FUNDAMENTAL_ANOS_FINAIS = 2;
    case EDUCACAO_INFANTIL = 3;
    case ENSINO_FUNDAMENTAL_9_ANOS = 4;


    public static function values(): array
    {
        return [
            self::EJA_FUNDAMENTAL_ANOS_INICIAIS->value,
            self::EJA_FUNDAMENTAL_ANOS_FINAIS->value,
            self::EDUCACAO_INFANTIL->value,
            self::ENSINO_FUNDAMENTAL_9_ANOS->value,
        ];
    }
}
