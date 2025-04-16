<?php

namespace Chargebee\Resources\Customer\Enums;

enum CardStatus : string { 
    case NO_CARD = "no_card";
    case VALID = "valid";
    case EXPIRING = "expiring";
    case EXPIRED = "expired";
    case PENDING_VERIFICATION = "pending_verification";
    case INVALID = "invalid";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>