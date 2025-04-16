<?php

namespace Chargebee\Enums;

enum CreditOptionForCurrentTermCharges : string { 
    case NONE = "none";
    case PRORATE = "prorate";
    case FULL = "full";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>