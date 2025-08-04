<?php

namespace Chargebee\ClassBasedEnums;

final class ChargebeeResponseSchemaType { 
    const PLANS_ADDONS = "plans_addons";
    const ITEMS = "items";
    const COMPAT = "compat";
    const UNKNOWN = "unknown";

    private static array $choices = [ "plans_addons","items","compat", ];
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
