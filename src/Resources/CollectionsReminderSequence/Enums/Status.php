<?php

namespace Chargebee\Resources\CollectionsReminderSequence\Enums;

enum Status : string { 
    case ACTIVE = "active";
    case COMPLETED = "completed";
    case PAUSED = "paused";
    case FAILED = "failed";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>