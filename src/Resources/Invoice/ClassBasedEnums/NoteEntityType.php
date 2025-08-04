<?php

namespace Chargebee\Resources\Invoice\ClassBasedEnums;

final class NoteEntityType { 
    const COUPON = "coupon";
    const SUBSCRIPTION = "subscription";
    const CUSTOMER = "customer";
    const PLAN_ITEM_PRICE = "plan_item_price";
    const ADDON_ITEM_PRICE = "addon_item_price";
    const CHARGE_ITEM_PRICE = "charge_item_price";
    const TAX = "tax";
    const PLAN = "plan";
    const ADDON = "addon";
    const UNKNOWN = "unknown";

    private static array $choices = [ "coupon","subscription","customer","plan_item_price","addon_item_price","charge_item_price","tax","plan","addon", ];
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
