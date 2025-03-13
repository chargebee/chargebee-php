<?php

namespace Chargebee\Resources\HostedPage\Enums;

enum FailureReason : string { 
    case CARD_ERROR = "card_error";
    case SERVER_ERROR = "server_error";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>