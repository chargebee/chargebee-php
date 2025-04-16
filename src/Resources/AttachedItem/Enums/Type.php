<?php

namespace Chargebee\Resources\AttachedItem\Enums;

enum Type : string { 
    case RECOMMENDED = "recommended";
    case MANDATORY = "mandatory";
    case OPTIONAL = "optional";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>