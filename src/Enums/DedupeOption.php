<?php

namespace Chargebee\Enums;

enum DedupeOption : string { 
    case SKIP = "skip";
    case UPDATE_EXISTING = "update_existing";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>