<?php

namespace Chargebee\Resources\AttachedItem\ClassBasedEnums;

final class Type { 
    const RECOMMENDED = "recommended";
    const MANDATORY = "mandatory";
    const OPTIONAL = "optional";
    const UNKNOWN = "unknown";

    private static array $choices = [ "recommended","mandatory","optional", ];
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
