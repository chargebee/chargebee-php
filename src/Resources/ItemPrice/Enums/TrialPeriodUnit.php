<?php

namespace Chargebee\Resources\ItemPrice\Enums;

enum TrialPeriodUnit : string { 
    case DAY = "day";
    case MONTH = "month";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>