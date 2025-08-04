<?php

namespace Chargebee\Resources\OmnichannelTransaction\ClassBasedEnums;

final class Type { 
    const PURCHASE = "purchase";
    const RENEWAL = "renewal";
    const UNKNOWN = "unknown";

    private static array $choices = [ "purchase","renewal", ];
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
