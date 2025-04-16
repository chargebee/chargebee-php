<?php

namespace Chargebee\Enums;

enum RefundableCreditsHandling : string { 
    case NO_ACTION = "no_action";
    case SCHEDULE_REFUND = "schedule_refund";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>