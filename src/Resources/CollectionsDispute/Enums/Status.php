<?php

namespace Chargebee\Resources\CollectionsDispute\Enums;

enum Status : string { 
    case OPEN = "open";
    case RESOLVED = "resolved";
    case WITHDRAWN = "withdrawn";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>