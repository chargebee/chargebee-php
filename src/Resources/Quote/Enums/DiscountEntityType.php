<?php

namespace Chargebee\Resources\Quote\Enums;

enum DiscountEntityType : string { 
    case ITEM_LEVEL_COUPON = "item_level_coupon";
    case DOCUMENT_LEVEL_COUPON = "document_level_coupon";
    case PROMOTIONAL_CREDITS = "promotional_credits";
    case PRORATED_CREDITS = "prorated_credits";
    case ITEM_LEVEL_DISCOUNT = "item_level_discount";
    case DOCUMENT_LEVEL_DISCOUNT = "document_level_discount";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>