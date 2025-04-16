<?php

namespace Chargebee\Resources\AdvanceInvoiceSchedule\Enums;

enum ScheduleType : string { 
    case FIXED_INTERVALS = "fixed_intervals";
    case SPECIFIC_DATES = "specific_dates";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>