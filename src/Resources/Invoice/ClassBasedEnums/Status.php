<?php

namespace Chargebee\Resources\Invoice\ClassBasedEnums;

final class Status { 
    const PAID = "paid";
    const POSTED = "posted";
    const PAYMENT_DUE = "payment_due";
    const NOT_PAID = "not_paid";
    const VOIDED = "voided";
    const PENDING = "pending";
    const UNKNOWN = "unknown";

    private static array $choices = [ "paid","posted","payment_due","not_paid","voided","pending", ];
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
