<?php

namespace Chargebee\Resources\Customer\ClassBasedEnums;

final class VatNumberStatus { 
    const VALID = "valid";
    const INVALID = "invalid";
    const NOT_VALIDATED = "not_validated";
    const UNDETERMINED = "undetermined";
    const UNKNOWN = "unknown";

    private static array $choices = [ "valid","invalid","not_validated","undetermined", ];
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
