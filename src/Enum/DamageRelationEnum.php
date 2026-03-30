<?php

namespace App\Enum;

enum DamageRelationEnum
{
    case WEAK;
    case NORMAL;
    case RESISTANT;
    case IMMUNE;

    public static function getMultiplier(self $case): int|float {
        return match ($case) {
            self::WEAK => 2,
            self::RESISTANT => 0.5,
            self::IMMUNE => 0,
            default => 1,
        };
    }
}


