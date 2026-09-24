<?php

namespace Chargebee\Enums;

enum Status : string { 
    case SCHEDULED = "scheduled";
    case RESCHEDULED = "rescheduled";
    case SUCCEEDED = "succeeded";
    case FAILED = "failed";
    case DEFERRED = "deferred";
    case DELIVERED = "delivered";
    case OPENED = "opened";
    case BOUNCED = "bounced";
    case DROPPED = "dropped";
    case ACTIVE = "active";
    case ARCHIVED = "archived";
    case DELETED = "deleted";
    case AVAILABLE = "available";
    case EXHAUSTED = "exhausted";
    case IN_GRACE_PERIOD = "in_grace_period";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>