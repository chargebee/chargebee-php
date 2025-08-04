<?php

namespace Chargebee\Resources\VirtualBankAccount\ClassBasedEnums;

final class Scheme { 
    const ACH_CREDIT = "ach_credit";
    const SEPA_CREDIT = "sepa_credit";
    const US_AUTOMATED_BANK_TRANSFER = "us_automated_bank_transfer";
    const GB_AUTOMATED_BANK_TRANSFER = "gb_automated_bank_transfer";
    const EU_AUTOMATED_BANK_TRANSFER = "eu_automated_bank_transfer";
    const JP_AUTOMATED_BANK_TRANSFER = "jp_automated_bank_transfer";
    const MX_AUTOMATED_BANK_TRANSFER = "mx_automated_bank_transfer";
    const UNKNOWN = "unknown";

    private static array $choices = [ "ach_credit","sepa_credit","us_automated_bank_transfer","gb_automated_bank_transfer","eu_automated_bank_transfer","jp_automated_bank_transfer","mx_automated_bank_transfer", ];
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
