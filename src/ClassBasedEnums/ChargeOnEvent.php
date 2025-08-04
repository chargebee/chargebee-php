<?php

namespace Chargebee\ClassBasedEnums;

final class ChargeOnEvent { 
    const SUBSCRIPTION_CREATION = "subscription_creation";
    const SUBSCRIPTION_TRIAL_START = "subscription_trial_start";
    const PLAN_ACTIVATION = "plan_activation";
    const SUBSCRIPTION_ACTIVATION = "subscription_activation";
    const CONTRACT_TERMINATION = "contract_termination";
    const ON_DEMAND = "on_demand";
    const UNKNOWN = "unknown";

    private static array $choices = [ "subscription_creation","subscription_trial_start","plan_activation","subscription_activation","contract_termination","on_demand", ];
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
