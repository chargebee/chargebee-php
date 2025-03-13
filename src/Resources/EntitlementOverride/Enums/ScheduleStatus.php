<?php

namespace Chargebee\Resources\EntitlementOverride\Enums;

enum ScheduleStatus : string { 
    case ACTIVATED = "activated";
    case SCHEDULED = "scheduled";
    case FAILED = "failed";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>