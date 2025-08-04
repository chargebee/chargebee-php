<?php

namespace Chargebee\Resources\BusinessEntityTransfer\ClassBasedEnums;

final class ResourceType { 
    const CUSTOMER = "customer";
    const SUBSCRIPTION = "subscription";
    const UNKNOWN = "unknown";

    private static array $choices = [ "customer","subscription", ];
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
