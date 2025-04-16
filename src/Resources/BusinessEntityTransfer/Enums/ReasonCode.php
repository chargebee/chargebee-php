<?php

namespace Chargebee\Resources\BusinessEntityTransfer\Enums;

enum ReasonCode : string { 
    case CORRECTION = "correction";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>