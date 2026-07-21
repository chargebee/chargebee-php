<?php

namespace Chargebee\Resources\Meter\Enums;

enum FeatureType : string { 
    case SWITCH = "switch";
    case CUSTOM = "custom";
    case QUANTITY = "quantity";
    case RANGE = "range";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>