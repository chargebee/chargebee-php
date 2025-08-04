<?php

namespace Chargebee\ClassBasedEnums;

final class DirectDebitScheme { 
    const ACH = "ach";
    const BACS = "bacs";
    const SEPA_CORE = "sepa_core";
    const AUTOGIRO = "autogiro";
    const BECS = "becs";
    const BECS_NZ = "becs_nz";
    const PAD = "pad";
    const NOT_APPLICABLE = "not_applicable";
    const UNKNOWN = "unknown";

    private static array $choices = [ "ach","bacs","sepa_core","autogiro","becs","becs_nz","pad","not_applicable", ];
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
