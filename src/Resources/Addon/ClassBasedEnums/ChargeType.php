<?php

namespace Chargebee\Resources\Addon\ClassBasedEnums;

final class ChargeType { 
    const RECURRING = "recurring";
    const NON_RECURRING = "non_recurring";
    const UNKNOWN = "unknown";

    private static array $choices = [ "recurring","non_recurring", ];
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
