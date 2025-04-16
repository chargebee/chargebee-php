<?php

namespace Chargebee\Resources\Item\Enums;

enum ItemApplicability : string { 
    case ALL = "all";
    case RESTRICTED = "restricted";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>