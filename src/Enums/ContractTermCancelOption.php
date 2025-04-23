<?php

namespace Chargebee\Enums;

enum ContractTermCancelOption : string { 
    case TERMINATE_IMMEDIATELY = "terminate_immediately";
    case END_OF_CONTRACT_TERM = "end_of_contract_term";
    case SPECIFIC_DATE = "specific_date";
    case END_OF_SUBSCRIPTION_BILLING_TERM = "end_of_subscription_billing_term";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>