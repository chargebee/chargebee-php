<?php

namespace Chargebee\Resources\Entitlement\ClassBasedEnums;

final class EntityType { 
    const PLAN = "plan";
    const ADDON = "addon";
    const CHARGE = "charge";
    const PLAN_PRICE = "plan_price";
    const ADDON_PRICE = "addon_price";
    const UNKNOWN = "unknown";

    private static array $choices = [ "plan","addon","charge","plan_price","addon_price", ];
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
