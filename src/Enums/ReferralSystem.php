<?php

namespace Chargebee\Enums;

enum ReferralSystem : string { 
    case REFERRAL_CANDY = "referral_candy";
    case REFERRAL_SAASQUATCH = "referral_saasquatch";
    case FRIENDBUY = "friendbuy";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>