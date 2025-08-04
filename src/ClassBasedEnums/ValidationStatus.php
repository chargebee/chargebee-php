<?php

namespace Chargebee\ClassBasedEnums;

final class ValidationStatus { 
    const NOT_VALIDATED = "not_validated";
    const VALID = "valid";
    const PARTIALLY_VALID = "partially_valid";
    const INVALID = "invalid";
    const UNKNOWN = "unknown";

    private static array $choices = [ "not_validated","valid","partially_valid","invalid", ];
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
