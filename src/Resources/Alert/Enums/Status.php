<?php

namespace Chargebee\Resources\Alert\Enums;

enum Status : string { 
    case ENABLED = "enabled";
    case DISABLED = "disabled";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>