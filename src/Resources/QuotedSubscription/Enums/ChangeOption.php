<?php

namespace Chargebee\Resources\QuotedSubscription\Enums;

enum ChangeOption : string { 
    case END_OF_TERM = "end_of_term";
    case SPECIFIC_DATE = "specific_date";
    case IMMEDIATELY = "immediately";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>