<?php

namespace Chargebee\Resources\TaxWithheld\ClassBasedEnums;

final class Type { 
    const PAYMENT = "payment";
    const REFUND = "refund";
    const UNKNOWN = "unknown";

    private static array $choices = [ "payment","refund", ];
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
