<?php

namespace Chargebee\Resources\Ramp\ClassBasedEnums;

final class DiscountsToAddType { 
    const FIXED_AMOUNT = "fixed_amount";
    const PERCENTAGE = "percentage";
    const UNKNOWN = "unknown";

    private static array $choices = [ "fixed_amount","percentage", ];
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
