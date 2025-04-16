<?php

namespace Chargebee\Resources\QuotedSubscription\Enums;

enum QuotedContractTermActionAtTermEnd : string { 
    case RENEW = "renew";
    case EVERGREEN = "evergreen";
    case CANCEL = "cancel";
    case RENEW_ONCE = "renew_once";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>