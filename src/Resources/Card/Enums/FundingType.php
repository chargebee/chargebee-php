<?php

namespace Chargebee\Resources\Card\Enums;

enum FundingType : string { 
    case CREDIT = "credit";
    case DEBIT = "debit";
    case PREPAID = "prepaid";
    case NOT_KNOWN = "not_known";
    case NOT_APPLICABLE = "not_applicable";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>