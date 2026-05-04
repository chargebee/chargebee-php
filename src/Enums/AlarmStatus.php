<?php

namespace Chargebee\Enums;

enum AlarmStatus : string { 
    case WITHIN_LIMIT = "within_limit";
    case IN_ALARM = "in_alarm";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>