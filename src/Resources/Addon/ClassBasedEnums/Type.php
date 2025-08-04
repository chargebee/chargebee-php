<?php

namespace Chargebee\Resources\Addon\ClassBasedEnums;

final class Type { 
    const ON_OFF = "on_off";
    const QUANTITY = "quantity";
    const TIERED = "tiered";
    const VOLUME = "volume";
    const STAIRSTEP = "stairstep";
    const UNKNOWN = "unknown";

    private static array $choices = [ "on_off","quantity","tiered","volume","stairstep", ];
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
