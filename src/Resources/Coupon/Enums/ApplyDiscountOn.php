<?php

namespace Chargebee\Resources\Coupon\Enums;

enum ApplyDiscountOn : string { 
    case PLANS = "plans";
    case PLANS_AND_ADDONS = "plans_and_addons";
    case PLANS_WITH_QUANTITY = "plans_with_quantity";
    case NOT_APPLICABLE = "not_applicable";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>