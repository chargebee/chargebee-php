<?php

namespace Chargebee\ClassBasedEnums;

final class TaxJurisType { 
    const COUNTRY = "country";
    const FEDERAL = "federal";
    const STATE = "state";
    const COUNTY = "county";
    const CITY = "city";
    const SPECIAL = "special";
    const UNINCORPORATED = "unincorporated";
    const OTHER = "other";
    const UNKNOWN = "unknown";

    private static array $choices = [ "country","federal","state","county","city","special","unincorporated","other", ];
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
