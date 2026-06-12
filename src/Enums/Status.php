<?php

namespace Chargebee\Enums;

enum Status : string { 
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