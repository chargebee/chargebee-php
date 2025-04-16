<?php

namespace Chargebee\Resources\Subscription\Enums;

enum ContractTermStatus : string { 
    case ACTIVE = "active";
    case COMPLETED = "completed";
    case CANCELLED = "cancelled";
    case TERMINATED = "terminated";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>