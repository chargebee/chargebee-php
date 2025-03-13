<?php

namespace Chargebee\Enums;

enum ResumeOption : string { 
    case IMMEDIATELY = "immediately";
    case SPECIFIC_DATE = "specific_date";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>