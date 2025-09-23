<?php

namespace Chargebee\Enums;

enum Category : string { 
    case INTRODUCTORY = "introductory";
    case PROMOTIONAL = "promotional";
    case DEVELOPER_DETERMINED = "developer_determined";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>