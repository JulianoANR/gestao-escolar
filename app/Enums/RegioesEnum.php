<?php

namespace App\Enums;

enum SegmentosEnum : string
{
    case CENTRO = 'EMEI';
    case EMEF = 'EMEF';
    case CEI  = 'CEI';
    case EMEI_EMEF = 'EMEI/EMEF';
    case CEI_EMEI_EMEF = 'CEI/EMEI/EMEF';
}
