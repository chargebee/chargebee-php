<?php

namespace Chargebee\Resources\CollectionsReminderSequence\Enums;

enum CollectionsReminderSequenceActionLogStatus : string { 
    case COMPLETED = "completed";
    case SCHEDULED = "scheduled";
    case SKIPPED = "skipped";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>