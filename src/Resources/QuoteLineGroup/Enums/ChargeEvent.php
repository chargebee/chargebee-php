<?php

namespace Chargebee\Resources\QuoteLineGroup\Enums;

enum ChargeEvent : string { 
    case IMMEDIATE = "immediate";
    case SUBSCRIPTION_CREATION = "subscription_creation";
    case TRIAL_START = "trial_start";
    case SUBSCRIPTION_CHANGE = "subscription_change";
    case SUBSCRIPTION_RENEWAL = "subscription_renewal";
    case SUBSCRIPTION_CANCEL = "subscription_cancel";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>