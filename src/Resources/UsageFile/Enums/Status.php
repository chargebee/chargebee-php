<?php

namespace Chargebee\Resources\UsageFile\Enums;

enum Status : string { 
    case QUEUED = "queued";
    case IMPORTED = "imported";
    case PROCESSING = "processing";
    case PROCESSED = "processed";
    case FAILED = "failed";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>