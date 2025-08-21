<?php

namespace Chargebee\Resources\OmnichannelSubscription\Enums;

enum OmnichannelTransactionType : string { 
    case PURCHASE = "purchase";
    case RENEWAL = "renewal";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>