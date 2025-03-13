<?php

namespace Chargebee\Enums;

enum ChargeOnOption : string { 
    case IMMEDIATELY = "immediately";
    case ON_EVENT = "on_event";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>