<?php

namespace Chargebee\Enums;

enum Status : string { 
    case ACTIVE = "active";
    case ARCHIVED = "archived";
    case DELETED = "deleted";
    case AVAILABLE = "available";
    case EXHAUSTED = "exhausted";
    case SCHEDULED = "scheduled";
    case IN_GRACE_PERIOD = "in_grace_period";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>