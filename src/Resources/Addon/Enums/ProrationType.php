<?php

namespace Chargebee\Resources\Addon\Enums;

enum ProrationType : string { 
    case SITE_DEFAULT = "site_default";
    case PARTIAL_TERM = "partial_term";
    case FULL_TERM = "full_term";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>