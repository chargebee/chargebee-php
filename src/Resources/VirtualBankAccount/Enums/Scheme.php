<?php

namespace Chargebee\Resources\VirtualBankAccount\Enums;

enum Scheme : string { 
    case ACH_CREDIT = "ach_credit";
    case SEPA_CREDIT = "sepa_credit";
    case US_AUTOMATED_BANK_TRANSFER = "us_automated_bank_transfer";
    case GB_AUTOMATED_BANK_TRANSFER = "gb_automated_bank_transfer";
    case EU_AUTOMATED_BANK_TRANSFER = "eu_automated_bank_transfer";
    case JP_AUTOMATED_BANK_TRANSFER = "jp_automated_bank_transfer";
    case MX_AUTOMATED_BANK_TRANSFER = "mx_automated_bank_transfer";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>