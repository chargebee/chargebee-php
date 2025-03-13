<?php

namespace Chargebee\Resources\CreditNote\Enums;

enum Status : string { 
    case ADJUSTED = "adjusted";
    case REFUNDED = "refunded";
    case REFUND_DUE = "refund_due";
    case VOIDED = "voided";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>