<?php

namespace Chargebee\Resources\BusinessEntity\Enums;

enum Status : string { 
    case ACTIVE = "active";
    case INACTIVE = "inactive";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>