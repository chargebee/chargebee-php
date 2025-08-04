<?php

namespace Chargebee\Resources\CouponCode\ClassBasedEnums;

final class Status { 
    const NOT_REDEEMED = "not_redeemed";
    const REDEEMED = "redeemed";
    const ARCHIVED = "archived";
    const UNKNOWN = "unknown";

    private static array $choices = [ "not_redeemed","redeemed","archived", ];
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
