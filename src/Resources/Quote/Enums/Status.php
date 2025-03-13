<?php

namespace Chargebee\Resources\Quote\Enums;

enum Status : string { 
    case OPEN = "open";
    case ACCEPTED = "accepted";
    case DECLINED = "declined";
    case INVOICED = "invoiced";
    case CLOSED = "closed";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>