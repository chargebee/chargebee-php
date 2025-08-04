<?php

namespace Chargebee\Resources\Card\ClassBasedEnums;

final class Status { 
    const VALID = "valid";
    const EXPIRING = "expiring";
    const EXPIRED = "expired";
    const UNKNOWN = "unknown";

    private static array $choices = [ "valid","expiring","expired", ];
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
