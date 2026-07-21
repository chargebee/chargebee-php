<?php

namespace Chargebee\Resources\MeteredFeature\Enums;

enum ColumnDefinitionDataType : string { 
    case NUMBER = "number";
    case STRING = "string";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>