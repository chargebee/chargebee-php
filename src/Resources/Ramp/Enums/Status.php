<?php

namespace Chargebee\Resources\Ramp\Enums;

enum Status : string { 
    case SCHEDULED = "scheduled";
    case SUCCEEDED = "succeeded";
    case FAILED = "failed";
    case DRAFT = "draft";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>