<?php

namespace Chargebee\Resources\Meter\Enums;

enum ColumnDefinitionDataType : string { 
    case NUMBER = "number";
    case STRING = "string";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>