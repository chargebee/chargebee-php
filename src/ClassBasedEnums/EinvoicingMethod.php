<?php

namespace Chargebee\ClassBasedEnums;

final class EinvoicingMethod { 
    const AUTOMATIC = "automatic";
    const MANUAL = "manual";
    const SITE_DEFAULT = "site_default";
    const UNKNOWN = "unknown";

    private static array $choices = [ "automatic","manual","site_default", ];
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
