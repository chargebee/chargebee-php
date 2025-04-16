<?php

namespace Chargebee\Resources\Invoice\Enums;

enum Status : string { 
    case PAID = "paid";
    case POSTED = "posted";
    case PAYMENT_DUE = "payment_due";
    case NOT_PAID = "not_paid";
    case VOIDED = "voided";
    case PENDING = "pending";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>