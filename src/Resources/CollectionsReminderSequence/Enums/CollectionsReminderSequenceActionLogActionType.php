<?php

namespace Chargebee\Resources\CollectionsReminderSequence\Enums;

enum CollectionsReminderSequenceActionLogActionType : string { 
    case SEND_EMAIL = "send_email";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>