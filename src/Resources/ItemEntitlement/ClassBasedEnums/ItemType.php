<?php

namespace Chargebee\Resources\ItemEntitlement\ClassBasedEnums;

final class ItemType { 
    const PLAN = "plan";
    const ADDON = "addon";
    const CHARGE = "charge";
    const SUBSCRIPTION = "subscription";
    const ITEM = "item";
    const UNKNOWN = "unknown";

    private static array $choices = [ "plan","addon","charge","subscription","item", ];
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
