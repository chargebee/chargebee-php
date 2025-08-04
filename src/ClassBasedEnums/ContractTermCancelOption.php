<?php

namespace Chargebee\ClassBasedEnums;

final class ContractTermCancelOption { 
    const TERMINATE_IMMEDIATELY = "terminate_immediately";
    const END_OF_CONTRACT_TERM = "end_of_contract_term";
    const SPECIFIC_DATE = "specific_date";
    const END_OF_SUBSCRIPTION_BILLING_TERM = "end_of_subscription_billing_term";
    const UNKNOWN = "unknown";

    private static array $choices = [ "terminate_immediately","end_of_contract_term","specific_date","end_of_subscription_billing_term", ];
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
