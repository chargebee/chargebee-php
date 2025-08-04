<?php

namespace Chargebee\ClassBasedEnums;

final class AvalaraSaleType { 
    const WHOLESALE = "wholesale";
    const RETAIL = "retail";
    const CONSUMED = "consumed";
    const VENDOR_USE = "vendor_use";
    const UNKNOWN = "unknown";

    private static array $choices = [ "wholesale","retail","consumed","vendor_use", ];
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
