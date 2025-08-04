<?php

namespace Chargebee\Resources\HostedPage\ClassBasedEnums;

final class State { 
    const CREATED = "created";
    const REQUESTED = "requested";
    const SUCCEEDED = "succeeded";
    const CANCELLED = "cancelled";
    const ACKNOWLEDGED = "acknowledged";
    /*
    * @depcreated
    */
    const failed = "failed";
    const UNKNOWN = "unknown";

    private static array $choices = [ "created","requested","succeeded","cancelled","acknowledged", ];
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
