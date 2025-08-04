<?php

namespace Chargebee\ClassBasedEnums;

final class UsageAccumulationResetFrequency { 
    const NEVER = "never";
    const SUBSCRIPTION_BILLING_FREQUENCY = "subscription_billing_frequency";
    const UNKNOWN = "unknown";

    private static array $choices = [ "never","subscription_billing_frequency", ];
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
