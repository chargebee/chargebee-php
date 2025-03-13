<?php

namespace Chargebee\Enums;

enum FriendOfferType : string { 
    case NONE = "none";
    case COUPON = "coupon";
    case COUPON_CODE = "coupon_code";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>