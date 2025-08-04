<?php

namespace Chargebee\Resources\Quote\ClassBasedEnums;

final class DiscountEntityType { 
    const ITEM_LEVEL_COUPON = "item_level_coupon";
    const DOCUMENT_LEVEL_COUPON = "document_level_coupon";
    const PROMOTIONAL_CREDITS = "promotional_credits";
    const PRORATED_CREDITS = "prorated_credits";
    const ITEM_LEVEL_DISCOUNT = "item_level_discount";
    const DOCUMENT_LEVEL_DISCOUNT = "document_level_discount";
    const UNKNOWN = "unknown";

    private static array $choices = [ "item_level_coupon","document_level_coupon","promotional_credits","prorated_credits","item_level_discount","document_level_discount", ];
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
