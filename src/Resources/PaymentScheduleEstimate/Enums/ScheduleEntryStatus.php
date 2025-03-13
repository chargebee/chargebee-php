<?php

namespace Chargebee\Resources\PaymentScheduleEstimate\Enums;

enum ScheduleEntryStatus : string { 
    case POSTED = "posted";
    case PAYMENT_DUE = "payment_due";
    case PAID = "paid";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>