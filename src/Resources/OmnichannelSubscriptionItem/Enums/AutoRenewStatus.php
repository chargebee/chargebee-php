<?php

namespace Chargebee\Resources\OmnichannelSubscriptionItem\Enums;

enum AutoRenewStatus : string { 
    case OFF = "off";
    case ON = "on";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>