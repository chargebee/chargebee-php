<?php

namespace Chargebee\Resources\RetrySegment\Enums;

enum ConditionLogic : string { 
    case AND = "and";
    case OR = "or";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>