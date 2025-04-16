<?php

namespace Chargebee\Enums;

enum UnpaidInvoicesHandling : string { 
    case NO_ACTION = "no_action";
    case SCHEDULE_PAYMENT_COLLECTION = "schedule_payment_collection";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>