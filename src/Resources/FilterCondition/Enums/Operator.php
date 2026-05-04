<?php

namespace Chargebee\Resources\FilterCondition\Enums;

enum Operator : string { 
    case EQUALS = "equals";
    case NOT_EQUALS = "not_equals";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>