<?php

namespace App\Enums;

enum SegmentosEnum : string
{
    case EMEI = 'EMEI';
    case EMEF = 'EMEF';
    case CEI  = 'CEI';
    case CEI_EMEI  = 'CEI/EMEI';
    case EMEI_EMEF = 'EMEI/EMEF';
    case CEI_EMEI_EMEF = 'CEI/EMEI/EMEF';

    public static function values(): array
    {
        return [
            self::EMEI->value,
            self::EMEF->value,
            self::CEI->value,
            self::CEI_EMEI->value,
            self::EMEI_EMEF->value,
            self::CEI_EMEI_EMEF->value,
        ];
    }
}
