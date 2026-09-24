<?php

namespace Chargebee\Resources\AppliedBusinessRule\Enums;

enum EntityType : string { 
    case CPQ_QUOTE = "cpq_quote";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>