<?php

namespace Chargebee\Enums;

enum Role : string { 
    case PRIMARY = "primary";
    case BACKUP = "backup";
    case NONE = "none";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>