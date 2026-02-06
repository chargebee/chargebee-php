<?php

namespace Chargebee\Enums;

enum PaymentMethodSavePolicy : string { 
    case ALWAYS = "always";
    case ASK = "ask";
    case NEVER = "never";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>