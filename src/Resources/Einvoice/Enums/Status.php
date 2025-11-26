<?php

namespace Chargebee\Resources\Einvoice\Enums;

enum Status : string { 
    case SCHEDULED = "scheduled";
    case SKIPPED = "skipped";
    case IN_PROGRESS = "in_progress";
    case SUCCESS = "success";
    case FAILED = "failed";
    case REGISTERED = "registered";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>