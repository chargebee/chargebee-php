<?php

namespace Chargebee\Resources\Coupon\Enums;

enum ItemConstraintConstraint : string { 
    case NONE = "none";
    case ALL = "all";
    case SPECIFIC = "specific";
    case CRITERIA = "criteria";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>