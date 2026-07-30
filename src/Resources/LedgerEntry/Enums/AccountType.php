<?php

namespace Chargebee\Resources\LedgerEntry\Enums;

enum AccountType : string { 
    case PROVISIONED = "provisioned";
    case OVERDRAFT = "overdraft";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>