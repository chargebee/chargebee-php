<?php

namespace Chargebee\Resources\EmailMessage\Enums;

enum SendStatus : string { 
    case PENDING = "pending";
    case SENT = "sent";
    case FAILED = "failed";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>