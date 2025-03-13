<?php

namespace Chargebee\Enums;

enum OperationType : string { 
    case ADD = "add";
    case REMOVE = "remove";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>