<?php

namespace Chargebee\Enums;

enum ValidationStatus : string { 
    case NOT_VALIDATED = "not_validated";
    case VALID = "valid";
    case PARTIALLY_VALID = "partially_valid";
    case INVALID = "invalid";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>