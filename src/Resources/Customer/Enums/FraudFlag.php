<?php

namespace Chargebee\Resources\Customer\Enums;

enum FraudFlag : string { 
    case SAFE = "safe";
    case SUSPICIOUS = "suspicious";
    case FRAUDULENT = "fraudulent";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>