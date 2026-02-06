<?php

namespace Chargebee\Resources\Invoice\Enums;

enum EinvoiceStatus : string { 
    case SCHEDULED = "scheduled";
    case SKIPPED = "skipped";
    case IN_PROGRESS = "in_progress";
    case SUCCESS = "success";
    case FAILED = "failed";
    case REGISTERED = "registered";
    case ACCEPTED = "accepted";
    case REJECTED = "rejected";
    case MESSAGE_ACKNOWLEDGEMENT = "message_acknowledgement";
    case IN_PROCESS = "in_process";
    case UNDER_QUERY = "under_query";
    case CONDITIONALLY_ACCEPTED = "conditionally_accepted";
    case PAID = "paid";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>