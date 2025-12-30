<?php

namespace Chargebee\Enums;

enum RetryEngine : string { 
    case CHARGEBEE = "chargebee";
    case FLEXPAY = "flexpay";
    case SUCCESSPLUS = "successplus";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>