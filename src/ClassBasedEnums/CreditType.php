<?php

namespace Chargebee\ClassBasedEnums;

final class CreditType { 
    const LOYALTY_CREDITS = "loyalty_credits";
    const REFERRAL_REWARDS = "referral_rewards";
    const GENERAL = "general";
    const UNKNOWN = "unknown";

    private static array $choices = [ "loyalty_credits","referral_rewards","general", ];
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
