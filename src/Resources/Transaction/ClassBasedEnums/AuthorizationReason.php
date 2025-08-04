<?php

namespace Chargebee\Resources\Transaction\ClassBasedEnums;

final class AuthorizationReason { 
    const BLOCKING_FUNDS = "blocking_funds";
    const VERIFICATION = "verification";
    const UNKNOWN = "unknown";

    private static array $choices = [ "blocking_funds","verification", ];
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
