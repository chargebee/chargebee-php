<?php

namespace Chargebee\Resources\Transaction\Enums;

enum Status : string { 
    case IN_PROGRESS = "in_progress";
    case SUCCESS = "success";
    case VOIDED = "voided";
    case FAILURE = "failure";
    case TIMEOUT = "timeout";
    case NEEDS_ATTENTION = "needs_attention";
    case LATE_FAILURE = "late_failure";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>