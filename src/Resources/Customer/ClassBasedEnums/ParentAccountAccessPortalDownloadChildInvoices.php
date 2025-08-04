<?php

namespace Chargebee\Resources\Customer\ClassBasedEnums;

final class ParentAccountAccessPortalDownloadChildInvoices { 
    const YES = "yes";
    const VIEW_ONLY = "view_only";
    const NO = "no";
    const UNKNOWN = "unknown";

    private static array $choices = [ "yes","view_only","no", ];
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
