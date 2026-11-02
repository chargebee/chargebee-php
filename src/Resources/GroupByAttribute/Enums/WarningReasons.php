<?php

namespace Chargebee\Resources\GroupByAttribute\Enums;

enum WarningReasons : string { 
    case LOW_COVERAGE = "low_coverage";
    case HIGH_CARDINALITY = "high_cardinality";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>