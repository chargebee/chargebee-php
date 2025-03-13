<?php

namespace Chargebee\Resources\ResourceMigration\Enums;

enum Status : string { 
    case SCHEDULED = "scheduled";
    case FAILED = "failed";
    case SUCCEEDED = "succeeded";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>