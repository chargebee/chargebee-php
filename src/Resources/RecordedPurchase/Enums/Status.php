<?php

namespace Chargebee\Resources\RecordedPurchase\Enums;

enum Status : string { 
    case IN_PROCESS = "in_process";
    case COMPLETED = "completed";
    case FAILED = "failed";
    case IGNORED = "ignored";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>