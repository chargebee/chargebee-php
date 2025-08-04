<?php

namespace Chargebee\ClassBasedEnums;

final class Channel { 
    const WEB = "web";
    const APP_STORE = "app_store";
    const PLAY_STORE = "play_store";
    const UNKNOWN = "unknown";

    private static array $choices = [ "web","app_store","play_store", ];
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
