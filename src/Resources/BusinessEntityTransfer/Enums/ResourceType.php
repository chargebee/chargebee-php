<?php

namespace Chargebee\Resources\BusinessEntityTransfer\Enums;

enum ResourceType : string { 
    case CUSTOMER = "customer";
    case SUBSCRIPTION = "subscription";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>