<?php

namespace Chargebee\ClassBasedEnums;

final class CustomerType { 
    const RESIDENTIAL = "residential";
    const BUSINESS = "business";
    const SENIOR_CITIZEN = "senior_citizen";
    const INDUSTRIAL = "industrial";
    const UNKNOWN = "unknown";

    private static array $choices = [ "residential","business","senior_citizen","industrial", ];
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
