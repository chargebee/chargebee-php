<?php

namespace Chargebee\Resources\Rule\Enums;

enum Status : string { 
    case ACTIVE = "active";
    case DISABLED = "disabled";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>