<?php

namespace Chargebee\Resources\Card\Enums;

enum Status : string { 
    case VALID = "valid";
    case EXPIRING = "expiring";
    case EXPIRED = "expired";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>