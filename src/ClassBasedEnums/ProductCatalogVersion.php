<?php

namespace Chargebee\ClassBasedEnums;

final class ProductCatalogVersion { 
    const V1 = "v1";
    const V2 = "v2";
    const UNKNOWN = "unknown";

    private static array $choices = [ "v1","v2", ];
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
