<?php

namespace Chargebee\Enums;

enum DurationType : string { 
    case ONE_TIME = "one_time";
    case FOREVER = "forever";
    case LIMITED_PERIOD = "limited_period";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>