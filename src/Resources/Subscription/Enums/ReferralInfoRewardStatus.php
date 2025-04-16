<?php

namespace Chargebee\Resources\Subscription\Enums;

enum ReferralInfoRewardStatus : string { 
    case PENDING = "pending";
    case PAID = "paid";
    case INVALID = "invalid";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>