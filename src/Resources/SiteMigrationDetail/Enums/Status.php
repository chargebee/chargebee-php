<?php

namespace Chargebee\Resources\SiteMigrationDetail\Enums;

enum Status : string { 
    case MOVED_IN = "moved_in";
    case MOVED_OUT = "moved_out";
    case MOVING_OUT = "moving_out";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>