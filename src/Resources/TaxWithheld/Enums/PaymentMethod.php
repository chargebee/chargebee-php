<?php

namespace Chargebee\Resources\TaxWithheld\Enums;

enum PaymentMethod : string { 
    case CASH = "cash";
    case CHECK = "check";
    case CHARGEBACK = "chargeback";
    case BANK_TRANSFER = "bank_transfer";
    case OTHER = "other";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>