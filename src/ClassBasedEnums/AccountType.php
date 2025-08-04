<?php

namespace Chargebee\ClassBasedEnums;

final class AccountType { 
    const CHECKING = "checking";
    const SAVINGS = "savings";
    const BUSINESS_CHECKING = "business_checking";
    const CURRENT = "current";
    const UNKNOWN = "unknown";

    private static array $choices = [ "checking","savings","business_checking","current", ];
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
