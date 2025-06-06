<?php

namespace Chargebee\Resources\Order\Enums;

enum LineItemDiscountDiscountType : string { 
    case ITEM_LEVEL_COUPON = "item_level_coupon";
    case DOCUMENT_LEVEL_COUPON = "document_level_coupon";
    case PROMOTIONAL_CREDITS = "promotional_credits";
    case PRORATED_CREDITS = "prorated_credits";
    case CUSTOM_DISCOUNT = "custom_discount";
    case ITEM_LEVEL_DISCOUNT = "item_level_discount";
    case DOCUMENT_LEVEL_DISCOUNT = "document_level_discount";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>