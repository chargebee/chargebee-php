<?php

namespace Chargebee\Resources\GatewayPaymentMethodToken\Enums;

enum Status : string { 
    case ACTIVE = "active";
    case INACTIVE = "inactive";
    case PENDING_VERIFICATION = "pending_verification";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>