<?php

namespace Chargebee\Resources\Coupon\Enums;

enum CouponConstraintType : string { 
    case MAX_REDEMPTIONS = "max_redemptions";
    case UNIQUE_BY = "unique_by";
    case EXISTING_CUSTOMER = "existing_customer";
    case NEW_CUSTOMER = "new_customer";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>