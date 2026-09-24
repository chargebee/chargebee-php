<?php

namespace Chargebee\Resources\BusinessRuleset\Enums;

enum ExecuteMode : string { 
    case STOP_ON_FIRST_TRUE = "stop_on_first_true";
    case STOP_ON_FIRST_FALSE = "stop_on_first_false";
    case EXECUTE_ALL = "execute_all";
    case EXECUTE_ALL_TRUE = "execute_all_true";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>