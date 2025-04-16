<?php

namespace Chargebee\Resources\Addon\Enums;

enum ChargeType : string { 
    case RECURRING = "recurring";
    case NON_RECURRING = "non_recurring";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>