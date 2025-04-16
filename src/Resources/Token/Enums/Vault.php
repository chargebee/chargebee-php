<?php

namespace Chargebee\Resources\Token\Enums;

enum Vault : string { 
    case SPREEDLY = "spreedly";
    case GATEWAY = "gateway";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>