<?php

namespace Chargebee\Resources\Coupon\Enums;

enum PlanConstraint : string { 
    case NONE = "none";
    case ALL = "all";
    case SPECIFIC = "specific";
    case NOT_APPLICABLE = "not_applicable";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>