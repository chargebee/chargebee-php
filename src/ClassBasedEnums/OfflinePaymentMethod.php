<?php

namespace Chargebee\ClassBasedEnums;

final class OfflinePaymentMethod { 
    const NO_PREFERENCE = "no_preference";
    const CASH = "cash";
    const CHECK = "check";
    const BANK_TRANSFER = "bank_transfer";
    const ACH_CREDIT = "ach_credit";
    const SEPA_CREDIT = "sepa_credit";
    const BOLETO = "boleto";
    const US_AUTOMATED_BANK_TRANSFER = "us_automated_bank_transfer";
    const EU_AUTOMATED_BANK_TRANSFER = "eu_automated_bank_transfer";
    const UK_AUTOMATED_BANK_TRANSFER = "uk_automated_bank_transfer";
    const JP_AUTOMATED_BANK_TRANSFER = "jp_automated_bank_transfer";
    const MX_AUTOMATED_BANK_TRANSFER = "mx_automated_bank_transfer";
    const CUSTOM = "custom";
    const UNKNOWN = "unknown";

    private static array $choices = [ "no_preference","cash","check","bank_transfer","ach_credit","sepa_credit","boleto","us_automated_bank_transfer","eu_automated_bank_transfer","uk_automated_bank_transfer","jp_automated_bank_transfer","mx_automated_bank_transfer","custom", ];
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
