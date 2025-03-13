<?php

namespace Chargebee\Resources\InAppSubscription\Enums;

enum StoreStatus : string { 
    case IN_TRIAL = "in_trial";
    case ACTIVE = "active";
    case CANCELLED = "cancelled";
    case PAUSED = "paused";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>