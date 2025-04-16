<?php

namespace Chargebee\Resources\TimeMachine\Enums;

enum TimeTravelStatus : string { 
    case NOT_ENABLED = "not_enabled";
    case IN_PROGRESS = "in_progress";
    case SUCCEEDED = "succeeded";
    case FAILED = "failed";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>