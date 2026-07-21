<?php

namespace Chargebee\Enums;

enum DunningType : string { 
    case AUTO_COLLECT = "auto_collect";
    case OFFLINE = "offline";
    case DIRECT_DEBIT = "direct_debit";
    case REAL_TIME_PAYMENTS = "real_time_payments";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>