<?php

namespace Chargebee\Resources\Plan\Enums;

enum TrialEndAction : string { 
    case SITE_DEFAULT = "site_default";
    case ACTIVATE_SUBSCRIPTION = "activate_subscription";
    case CANCEL_SUBSCRIPTION = "cancel_subscription";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>