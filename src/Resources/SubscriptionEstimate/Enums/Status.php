<?php

namespace Chargebee\Resources\SubscriptionEstimate\Enums;

enum Status : string { 
    case FUTURE = "future";
    case IN_TRIAL = "in_trial";
    case ACTIVE = "active";
    case NON_RENEWING = "non_renewing";
    case PAUSED = "paused";
    case CANCELLED = "cancelled";
    case TRANSFERRED = "transferred";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>