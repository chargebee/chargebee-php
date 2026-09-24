<?php

namespace Chargebee\Resources\CustomDataSchema\Enums;

enum Status : string { 
    case ACTIVE = "active";
    case ARCHIVED = "archived";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>