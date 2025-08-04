<?php

namespace Chargebee\ClassBasedEnums;

final class FriendOfferType { 
    const NONE = "none";
    const COUPON = "coupon";
    const COUPON_CODE = "coupon_code";
    const UNKNOWN = "unknown";

    private static array $choices = [ "none","coupon","coupon_code", ];
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
