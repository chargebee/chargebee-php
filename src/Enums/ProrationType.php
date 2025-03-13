<?php

namespace Chargebee\Enums;

enum ProrationType : string { 
    case FULL_TERM = "full_term";
    case PARTIAL_TERM = "partial_term";
    case NONE = "none";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>