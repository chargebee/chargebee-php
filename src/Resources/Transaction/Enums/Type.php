<?php

namespace Chargebee\Resources\Transaction\Enums;

enum Type : string { 
    case AUTHORIZATION = "authorization";
    case PAYMENT = "payment";
    case REFUND = "refund";
    case PAYMENT_REVERSAL = "payment_reversal";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>