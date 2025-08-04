<?php

namespace Chargebee\Resources\OmnichannelSubscription\ClassBasedEnums;

final class Source { 
    const APPLE_APP_STORE = "apple_app_store";
    const GOOGLE_PLAY_STORE = "google_play_store";
    const UNKNOWN = "unknown";

    private static array $choices = [ "apple_app_store","google_play_store", ];
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
