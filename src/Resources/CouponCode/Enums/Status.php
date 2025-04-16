<?php

namespace Chargebee\Resources\CouponCode\Enums;

enum Status : string { 
    case NOT_REDEEMED = "not_redeemed";
    case REDEEMED = "redeemed";
    case ARCHIVED = "archived";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>