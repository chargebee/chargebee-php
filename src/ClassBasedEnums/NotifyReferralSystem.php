<?php

namespace Chargebee\ClassBasedEnums;

final class NotifyReferralSystem { 
    const NONE = "none";
    const FIRST_PAID_CONVERSION = "first_paid_conversion";
    const ALL_INVOICES = "all_invoices";
    const UNKNOWN = "unknown";

    private static array $choices = [ "none","first_paid_conversion","all_invoices", ];
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
