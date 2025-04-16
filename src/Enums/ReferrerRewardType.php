<?php

namespace Chargebee\Enums;

enum ReferrerRewardType : string { 
    case NONE = "none";
    case REFERRAL_DIRECT_REWARD = "referral_direct_reward";
    case CUSTOM_PROMOTIONAL_CREDIT = "custom_promotional_credit";
    case CUSTOM_REVENUE_PERCENT_BASED = "custom_revenue_percent_based";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>