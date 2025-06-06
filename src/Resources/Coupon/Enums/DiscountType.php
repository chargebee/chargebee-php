<?php

namespace Chargebee\Resources\Coupon\Enums;

enum DiscountType : string { 
    case FIXED_AMOUNT = "fixed_amount";
    case PERCENTAGE = "percentage";
    case OFFER_QUANTITY = "offer_quantity";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>