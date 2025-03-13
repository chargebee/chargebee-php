<?php

namespace Chargebee\Enums;

enum AccountReceivablesHandling : string { 
    case NO_ACTION = "no_action";
    case SCHEDULE_PAYMENT_COLLECTION = "schedule_payment_collection";
    case WRITE_OFF = "write_off";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>