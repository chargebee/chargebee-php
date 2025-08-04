<?php

namespace Chargebee\ClassBasedEnums;

final class TaxOverrideReason { 
    const ID_EXEMPT = "id_exempt";
    const CUSTOMER_EXEMPT = "customer_exempt";
    const EXPORT = "export";
    const UNKNOWN = "unknown";

    private static array $choices = [ "id_exempt","customer_exempt","export", ];
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
