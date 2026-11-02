<?php

namespace Chargebee\Resources\GatewayPaymentMethodToken\Enums;

enum Status : string { 
    case VALID = "valid";
    case INVALID = "invalid";
    case PENDING_VERIFICATION = "pending_verification";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>