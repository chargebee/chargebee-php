<?php

namespace Chargebee\Resources\Customer\Enums;

enum PaymentMethodStatus : string { 
    case VALID = "valid";
    case EXPIRING = "expiring";
    case EXPIRED = "expired";
    case INVALID = "invalid";
    case PENDING_VERIFICATION = "pending_verification";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>