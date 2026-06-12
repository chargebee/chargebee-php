<?php

namespace Chargebee\Resources\GrantBlock\Enums;

enum UnitType : string { 
    case CREDIT_UNIT = "credit_unit";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>