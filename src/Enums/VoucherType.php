<?php

namespace Chargebee\Enums;

enum VoucherType : string { 
    case BOLETO = "boleto";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>