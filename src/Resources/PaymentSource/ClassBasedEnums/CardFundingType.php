<?php

namespace Chargebee\Resources\PaymentSource\ClassBasedEnums;

final class CardFundingType { 
    const CREDIT = "credit";
    const DEBIT = "debit";
    const PREPAID = "prepaid";
    const NOT_KNOWN = "not_known";
    const NOT_APPLICABLE = "not_applicable";
    const UNKNOWN = "unknown";

    private static array $choices = [ "credit","debit","prepaid","not_known","not_applicable", ];
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
