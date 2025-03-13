<?php

namespace Chargebee\Enums;

enum Operation : string { 
    case CREATE = "create";
    case UPDATE = "update";
    case DELETE = "delete";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>