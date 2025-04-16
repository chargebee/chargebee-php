<?php

namespace Chargebee\Enums;

enum AccountHolderType : string { 
    case INDIVIDUAL = "individual";
    case COMPANY = "company";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>