<?php

namespace Chargebee\Enums;

enum ApplyOn : string { 
    case INVOICE_AMOUNT = "invoice_amount";
    case SPECIFIC_ITEM_PRICE = "specific_item_price";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>