<?php

namespace Chargebee\Resources\Coupon\Enums;

enum Status : string { 
    case ACTIVE = "active";
    case EXPIRED = "expired";
    case ARCHIVED = "archived";
    case DELETED = "deleted";
    case FUTURE = "future";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>