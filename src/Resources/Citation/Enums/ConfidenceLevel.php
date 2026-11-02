<?php

namespace Chargebee\Resources\Citation\Enums;

enum ConfidenceLevel : string { 
    case LOW = "low";
    case MEDIUM = "medium";
    case HIGH = "high";
    case NOT_PROVIDED = "not_provided";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>