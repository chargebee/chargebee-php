<?php

namespace Chargebee\Resources\GrantBlock\Enums;

enum GrantSource : string { 
    case SUBSCRIPTION_CREATED = "subscription_created";
    case SUBSCRIPTION_CHANGED = "subscription_changed";
    case TOP_UP = "top_up";
    case PROMOTIONAL_GRANTS = "promotional_grants";
    case ROLLOVER = "rollover";
    case GRANT_RENEWAL = "grant_renewal";
    case SUBSCRIPTION_RENEWED = "subscription_renewed";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>