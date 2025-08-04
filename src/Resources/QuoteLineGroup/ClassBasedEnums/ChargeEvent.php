<?php

namespace Chargebee\Resources\QuoteLineGroup\ClassBasedEnums;

final class ChargeEvent { 
    const IMMEDIATE = "immediate";
    const SUBSCRIPTION_CREATION = "subscription_creation";
    const TRIAL_START = "trial_start";
    const SUBSCRIPTION_CHANGE = "subscription_change";
    const SUBSCRIPTION_RENEWAL = "subscription_renewal";
    const SUBSCRIPTION_CANCEL = "subscription_cancel";
    const UNKNOWN = "unknown";

    private static array $choices = [ "immediate","subscription_creation","trial_start","subscription_change","subscription_renewal","subscription_cancel", ];
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
