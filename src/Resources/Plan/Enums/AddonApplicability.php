<?php

namespace Chargebee\Resources\Plan\Enums;

enum AddonApplicability : string { 
    case ALL = "all";
    case RESTRICTED = "restricted";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>