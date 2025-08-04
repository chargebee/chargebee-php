<?php

namespace Chargebee\Resources\Coupon\ClassBasedEnums;

final class ApplyDiscountOn { 
    const PLANS = "plans";
    const PLANS_AND_ADDONS = "plans_and_addons";
    const PLANS_WITH_QUANTITY = "plans_with_quantity";
    const NOT_APPLICABLE = "not_applicable";
    const UNKNOWN = "unknown";

    private static array $choices = [ "plans","plans_and_addons","plans_with_quantity","not_applicable", ];
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
