<?php

namespace Chargebee\Resources\PaymentVoucher\ClassBasedEnums;

final class Status { 
    const ACTIVE = "active";
    const CONSUMED = "consumed";
    const EXPIRED = "expired";
    const FAILURE = "failure";
    const UNKNOWN = "unknown";

    private static array $choices = [ "active","consumed","expired","failure", ];
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
