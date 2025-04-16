<?php

namespace Chargebee\Resources\Token\Enums;

enum Status : string { 
    case NEW = "new";
    case EXPIRED = "expired";
    case CONSUMED = "consumed";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>