<?php

namespace Chargebee\Resources\PaymentIntent\ClassBasedEnums;

final class Status { 
    const INITED = "inited";
    const IN_PROGRESS = "in_progress";
    const AUTHORIZED = "authorized";
    const CONSUMED = "consumed";
    const EXPIRED = "expired";
    const UNKNOWN = "unknown";

    private static array $choices = [ "inited","in_progress","authorized","consumed","expired", ];
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
