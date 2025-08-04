<?php

namespace Chargebee\ClassBasedEnums;

final class ReferrerRewardType { 
    const NONE = "none";
    const REFERRAL_DIRECT_REWARD = "referral_direct_reward";
    const CUSTOM_PROMOTIONAL_CREDIT = "custom_promotional_credit";
    const CUSTOM_REVENUE_PERCENT_BASED = "custom_revenue_percent_based";
    const UNKNOWN = "unknown";

    private static array $choices = [ "none","referral_direct_reward","custom_promotional_credit","custom_revenue_percent_based", ];
    public final string $value;

    public static function tryFromValue(string $key): self
    {
        $instance = new self();
        $instance->value = self::isValidChoice($key) ? $key : self::UNKNOWN;

        return $instance;
    }
    public function __toString(): string
    {
        return $this->value;
    }
    private static function isValidChoice(string $key): bool
    {
        return in_array($key, self::$choices);
    }
}
?>
