<?php

namespace App\Enums;

enum BimestresEnum : int
{
    case PRIMEIRO = 1;
    case SEGUNDO = 2;
    case TERCEIRO = 3;
    case QUARTO = 4;
    case ANUAL = 5;

    public static function getString() {
        return [
            ['id' => self::PRIMEIRO->value,
            'descricao' => '1º Bimestre'],
            ['id' => self::SEGUNDO->value,
            'descricao' => '2º Bimestre'],
            ['id' => self::TERCEIRO->value,
            'descricao' => '3º Bimestre'],
            ['id' => self::QUARTO->value,
            'descricao' => '4º Bimestre'],
            ['id' => self::ANUAL->value,
            'descricao' => 'Anual'],
        ];
    }
}
