<?php

namespace Chargebee\ClassBasedEnums;

final class ReferralSystem { 
    const REFERRAL_CANDY = "referral_candy";
    const REFERRAL_SAASQUATCH = "referral_saasquatch";
    const FRIENDBUY = "friendbuy";
    const UNKNOWN = "unknown";

    private static array $choices = [ "referral_candy","referral_saasquatch","friendbuy", ];
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
