<?php

namespace Chargebee\Enums;

enum TaxOverrideReason : string { 
    case ZERO_RATED = "zero_rated";
    case ID_EXEMPT = "id_exempt";
    case CUSTOMER_EXEMPT = "customer_exempt";
    case REGION_NON_TAXABLE = "region_non_taxable";
    case PRODUCT_EXEMPT = "product_exempt";
    case EXPORT = "export";
    case HIGH_VALUE_PHYSICAL_GOODS = "high_value_physical_goods";
    case ZERO_VALUE_ITEM = "zero_value_item";
    case TAX_NOT_CONFIGURED_EXTERNAL_PROVIDER = "tax_not_configured_external_provider";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>