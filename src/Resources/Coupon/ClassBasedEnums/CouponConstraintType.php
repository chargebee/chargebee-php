<?php

namespace Chargebee\Resources\Coupon\ClassBasedEnums;

final class CouponConstraintType { 
    const MAX_REDEMPTIONS = "max_redemptions";
    const UNIQUE_BY = "unique_by";
    const EXISTING_CUSTOMER = "existing_customer";
    const NEW_CUSTOMER = "new_customer";
    const UNKNOWN = "unknown";

    private static array $choices = [ "max_redemptions","unique_by","existing_customer","new_customer", ];
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
