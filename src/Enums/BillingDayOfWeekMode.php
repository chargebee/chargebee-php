<?php

namespace Chargebee\Enums;

enum BillingDayOfWeekMode : string { 
    case USING_DEFAULTS = "using_defaults";
    case MANUALLY_SET = "manually_set";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>