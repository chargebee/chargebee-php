<?php

namespace Chargebee\Enums;

enum ChargeOnEvent : string { 
    case SUBSCRIPTION_CREATION = "subscription_creation";
    case SUBSCRIPTION_TRIAL_START = "subscription_trial_start";
    case PLAN_ACTIVATION = "plan_activation";
    case SUBSCRIPTION_ACTIVATION = "subscription_activation";
    case CONTRACT_TERMINATION = "contract_termination";
    case ON_DEMAND = "on_demand";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>