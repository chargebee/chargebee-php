<?php

namespace Chargebee\Resources\Item\Enums;

enum UsageCalculation : string { 
    case SUM_OF_USAGES = "sum_of_usages";
    case LAST_USAGE = "last_usage";
    case MAX_USAGE = "max_usage";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>