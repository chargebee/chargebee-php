<?php

namespace Chargebee\Resources\Customer\Enums;

enum VatNumberStatus : string { 
    case VALID = "valid";
    case INVALID = "invalid";
    case NOT_VALIDATED = "not_validated";
    case UNDETERMINED = "undetermined";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>