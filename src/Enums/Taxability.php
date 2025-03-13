<?php

namespace Chargebee\Enums;

enum Taxability : string { 
    case TAXABLE = "taxable";
    case EXEMPT = "exempt";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>