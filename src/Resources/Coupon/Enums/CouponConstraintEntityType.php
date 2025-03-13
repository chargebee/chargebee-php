<?php

namespace Chargebee\Resources\Coupon\Enums;

enum CouponConstraintEntityType : string { 
    case CUSTOMER = "customer";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>