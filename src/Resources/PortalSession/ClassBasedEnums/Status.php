<?php

namespace Chargebee\Resources\PortalSession\ClassBasedEnums;

final class Status { 
    const CREATED = "created";
    const LOGGED_IN = "logged_in";
    const LOGGED_OUT = "logged_out";
    const NOT_YET_ACTIVATED = "not_yet_activated";
    const ACTIVATED = "activated";
    const UNKNOWN = "unknown";

    private static array $choices = [ "created","logged_in","logged_out","not_yet_activated","activated", ];
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
