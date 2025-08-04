<?php

namespace Chargebee\Resources\TaxWithheld\ClassBasedEnums;

final class PaymentMethod { 
    const CASH = "cash";
    const CHECK = "check";
    const CHARGEBACK = "chargeback";
    const BANK_TRANSFER = "bank_transfer";
    const OTHER = "other";
    const UNKNOWN = "unknown";

    private static array $choices = [ "cash","check","chargeback","bank_transfer","other", ];
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
