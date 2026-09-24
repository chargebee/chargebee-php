<?php

namespace Chargebee\Resources\Dispute\Enums;

enum Status : string { 
    case INITIATED = "initiated";
    case FUNDS_WITHDRAWN = "funds_withdrawn";
    case IN_REVIEW = "in_review";
    case CANCELLED = "cancelled";
    case LOST = "lost";
    case WON = "won";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>