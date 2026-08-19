<?php

namespace Chargebee\Resources\QuoteEntitlement\Enums;

enum ActionType : string { 
    case UPSERT = "upsert";
    case REMOVE = "remove";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>