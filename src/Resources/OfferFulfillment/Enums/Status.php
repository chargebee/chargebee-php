<?php

namespace Chargebee\Resources\OfferFulfillment\Enums;

enum Status : string { 
    case IN_PROGRESS = "in_progress";
    case COMPLETED = "completed";
    case FAILED = "failed";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>