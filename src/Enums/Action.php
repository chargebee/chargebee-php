<?php

namespace Chargebee\Enums;

enum Action : string { 
    case UPSERT = "upsert";
    case REMOVE = "remove";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>