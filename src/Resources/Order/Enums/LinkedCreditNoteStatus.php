<?php

namespace Chargebee\Resources\Order\Enums;

enum LinkedCreditNoteStatus : string { 
    case ADJUSTED = "adjusted";
    case REFUNDED = "refunded";
    case REFUND_DUE = "refund_due";
    case VOIDED = "voided";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>