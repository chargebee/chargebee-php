<?php

namespace Chargebee\Resources\CpqQuoteSignature\Enums;

enum CustomerAcceptanceMethod : string { 
    case ESIGN_AND_PAY = "esign_and_pay";
    case ESIGN = "esign";
    case PAY = "pay";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>