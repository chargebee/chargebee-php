<?php

namespace Chargebee\Resources\Gift\Enums;

enum Status : string { 
    case SCHEDULED = "scheduled";
    case UNCLAIMED = "unclaimed";
    case CLAIMED = "claimed";
    case CANCELLED = "cancelled";
    case EXPIRED = "expired";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>