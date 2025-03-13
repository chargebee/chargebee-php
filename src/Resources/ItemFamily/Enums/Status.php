<?php

namespace Chargebee\Resources\ItemFamily\Enums;

enum Status : string { 
    case ACTIVE = "active";
    case DELETED = "deleted";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>