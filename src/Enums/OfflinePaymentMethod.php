<?php

namespace Chargebee\Enums;

enum OfflinePaymentMethod : string { 
    case NO_PREFERENCE = "no_preference";
    case CASH = "cash";
    case CHECK = "check";
    case BANK_TRANSFER = "bank_transfer";
    case ACH_CREDIT = "ach_credit";
    case SEPA_CREDIT = "sepa_credit";
    case BOLETO = "boleto";
    case US_AUTOMATED_BANK_TRANSFER = "us_automated_bank_transfer";
    case EU_AUTOMATED_BANK_TRANSFER = "eu_automated_bank_transfer";
    case UK_AUTOMATED_BANK_TRANSFER = "uk_automated_bank_transfer";
    case JP_AUTOMATED_BANK_TRANSFER = "jp_automated_bank_transfer";
    case MX_AUTOMATED_BANK_TRANSFER = "mx_automated_bank_transfer";
    case CUSTOM = "custom";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>