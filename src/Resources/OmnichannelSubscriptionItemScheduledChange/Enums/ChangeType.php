<?php

namespace Chargebee\Resources\OmnichannelSubscriptionItemScheduledChange\Enums;

enum ChangeType : string { 
    case DOWNGRADE = "downgrade";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>