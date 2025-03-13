<?php

namespace Chargebee\Resources\Plan\Enums;

enum AttachedAddonType : string { 
    case RECOMMENDED = "recommended";
    case MANDATORY = "mandatory";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>