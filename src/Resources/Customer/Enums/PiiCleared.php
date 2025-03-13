<?php

namespace Chargebee\Resources\Customer\Enums;

enum PiiCleared : string { 
    case ACTIVE = "active";
    case SCHEDULED_FOR_CLEAR = "scheduled_for_clear";
    case CLEARED = "cleared";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>