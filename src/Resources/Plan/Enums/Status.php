<?php

namespace Chargebee\Resources\Plan\Enums;

enum Status : string { 
    case ACTIVE = "active";
    case ARCHIVED = "archived";
    case DELETED = "deleted";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>