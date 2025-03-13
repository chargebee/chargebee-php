<?php

namespace Chargebee\Resources\Invoice\Enums;

enum DunningStatus : string { 
    case IN_PROGRESS = "in_progress";
    case EXHAUSTED = "exhausted";
    case STOPPED = "stopped";
    case SUCCESS = "success";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>