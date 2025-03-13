<?php

namespace Chargebee\Resources\Comment\Enums;

enum Type : string { 
    case USER = "user";
    case SYSTEM = "system";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>