<?php

namespace Chargebee\Resources\Addon\Enums;

enum PeriodUnit : string { 
    case DAY = "day";
    case WEEK = "week";
    case MONTH = "month";
    case YEAR = "year";
    case NOT_APPLICABLE = "not_applicable";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>