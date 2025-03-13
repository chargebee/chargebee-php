<?php

namespace Chargebee\Enums;

enum CreditType : string { 
    case LOYALTY_CREDITS = "loyalty_credits";
    case REFERRAL_REWARDS = "referral_rewards";
    case GENERAL = "general";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>