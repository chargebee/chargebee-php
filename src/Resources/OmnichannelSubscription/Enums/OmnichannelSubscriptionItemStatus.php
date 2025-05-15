<?php

namespace Chargebee\Resources\OmnichannelSubscription\Enums;

enum OmnichannelSubscriptionItemStatus : string { 
    case ACTIVE = "active";
    case EXPIRED = "expired";
    case CANCELLED = "cancelled";
    case IN_DUNNING = "in_dunning";
    case IN_GRACE_PERIOD = "in_grace_period";
    case PAUSED = "paused";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>