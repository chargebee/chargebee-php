<?php

namespace Chargebee\Resources\Feature\ClassBasedEnums;

final class Type { 
    const SWITCH = "switch";
    const CUSTOM = "custom";
    const QUANTITY = "quantity";
    const RANGE = "range";
    const UNKNOWN = "unknown";

    private static array $choices = [ "switch","custom","quantity","range", ];
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
