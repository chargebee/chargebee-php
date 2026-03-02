<?php

namespace Chargebee\Enums;

enum WindowSize : string { 
    case MONTH = "month";
    case WEEK = "week";
    case DAY = "day";
    case HOUR = "hour";
    case MINUTE = "minute";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>