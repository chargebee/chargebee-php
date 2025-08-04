<?php

namespace Chargebee\ClassBasedEnums;

final class TaxExemptReason { 
    const TAX_NOT_CONFIGURED = "tax_not_configured";
    const REGION_NON_TAXABLE = "region_non_taxable";
    const EXPORT = "export";
    const CUSTOMER_EXEMPT = "customer_exempt";
    const PRODUCT_EXEMPT = "product_exempt";
    const ZERO_RATED = "zero_rated";
    const REVERSE_CHARGE = "reverse_charge";
    const HIGH_VALUE_PHYSICAL_GOODS = "high_value_physical_goods";
    const ZERO_VALUE_ITEM = "zero_value_item";
    const TAX_NOT_CONFIGURED_EXTERNAL_PROVIDER = "tax_not_configured_external_provider";
    const UNKNOWN = "unknown";

    private static array $choices = [ "tax_not_configured","region_non_taxable","export","customer_exempt","product_exempt","zero_rated","reverse_charge","high_value_physical_goods","zero_value_item","tax_not_configured_external_provider", ];
    public final string $value;

    public static function tryFromValue(string $key): self
    {
        $instance = new self();
        $instance->value = self::isValidChoice($key) ? $key : self::UNKNOWN;

        return $instance;
    }
    public function __toString(): string
    {
        return $this->value;
    }
    private static function isValidChoice(string $key): bool
    {
        return in_array($key, self::$choices);
    }
}
?>
