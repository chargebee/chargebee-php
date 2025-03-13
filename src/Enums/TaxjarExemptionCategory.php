<?php

namespace Chargebee\Enums;

enum TaxjarExemptionCategory : string { 
    case WHOLESALE = "wholesale";
    case GOVERNMENT = "government";
    case OTHER = "other";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>