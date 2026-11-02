<?php

namespace Chargebee\Resources\CollectionsReminderSequence\Enums;

enum CollectionsReminderSequenceActionLogReasonCode : string { 
    case DATE_ALREADY_PASSED = "date_already_passed";
    case BEFORE_INVOICE_DATE = "before_invoice_date";
    case TRIGGER_EVENT_NOT_RECEIVED = "trigger_event_not_received";
    case SEQUENCE_PAUSED = "sequence_paused";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>