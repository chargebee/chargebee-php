<?php

namespace Chargebee\Resources\Transaction\Enums;

enum AuthorizationReason : string { 
    case BLOCKING_FUNDS = "blocking_funds";
    case VERIFICATION = "verification";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>