<?php

namespace Chargebee\Enums;

enum UsageAccumulationResetFrequency : string { 
    case NEVER = "never";
    case SUBSCRIPTION_BILLING_FREQUENCY = "subscription_billing_frequency";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>