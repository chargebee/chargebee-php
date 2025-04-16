<?php

namespace Chargebee\Resources\Order\Enums;

enum PaymentStatus : string { 
    case NOT_PAID = "not_paid";
    case PAID = "paid";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>