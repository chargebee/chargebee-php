<?php

namespace Chargebee\Enums;

enum PricingType : string { 
    case PER_UNIT = "per_unit";
    case FLAT_FEE = "flat_fee";
    case PACKAGE = "package";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>