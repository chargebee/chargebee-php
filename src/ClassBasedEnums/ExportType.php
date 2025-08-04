<?php

namespace Chargebee\ClassBasedEnums;

final class ExportType { 
    const DATA = "data";
    const IMPORT_FRIENDLY_DATA = "import_friendly_data";
    const UNKNOWN = "unknown";

    private static array $choices = [ "data","import_friendly_data", ];
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
