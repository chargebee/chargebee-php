<?php

namespace Chargebee\Enums;

enum PricingModel : string { 
    case FLAT_FEE = "flat_fee";
    case PER_UNIT = "per_unit";
    case TIERED = "tiered";
    case VOLUME = "volume";
    case STAIRSTEP = "stairstep";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>