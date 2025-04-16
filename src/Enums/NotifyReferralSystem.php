<?php

namespace Chargebee\Enums;

enum NotifyReferralSystem : string { 
    case NONE = "none";
    case FIRST_PAID_CONVERSION = "first_paid_conversion";
    case ALL_INVOICES = "all_invoices";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>