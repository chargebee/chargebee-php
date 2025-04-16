<?php

namespace Chargebee\Enums;

enum ChargeModel : string { 
    case FULL_CHARGE = "full_charge";
    case PRORATE = "prorate";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>