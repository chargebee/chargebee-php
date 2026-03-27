<?php

namespace Chargebee\Resources\Alert\Enums;

enum Scope : string { 
    case GLOBAL = "global";
    case SUBSCRIPTION = "subscription";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>