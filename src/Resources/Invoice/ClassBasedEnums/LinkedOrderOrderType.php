<?php

namespace Chargebee\Resources\Invoice\ClassBasedEnums;

final class LinkedOrderOrderType { 
    const MANUAL = "manual";
    const SYSTEM_GENERATED = "system_generated";
    const UNKNOWN = "unknown";

    private static array $choices = [ "manual","system_generated", ];
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
