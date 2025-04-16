<?php

namespace Chargebee\Resources\PromotionalCredit\Enums;

enum Type : string { 
    case INCREMENT = "increment";
    case DECREMENT = "decrement";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>