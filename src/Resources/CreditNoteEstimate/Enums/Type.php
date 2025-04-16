<?php

namespace Chargebee\Resources\CreditNoteEstimate\Enums;

enum Type : string { 
    case ADJUSTMENT = "adjustment";
    case REFUNDABLE = "refundable";
    case STORE = "store";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>