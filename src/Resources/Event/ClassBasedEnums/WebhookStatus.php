<?php

namespace Chargebee\Resources\Event\ClassBasedEnums;

final class WebhookStatus { 
    const NOT_CONFIGURED = "not_configured";
    const SCHEDULED = "scheduled";
    const SUCCEEDED = "succeeded";
    const RE_SCHEDULED = "re_scheduled";
    const FAILED = "failed";
    const SKIPPED = "skipped";
    const NOT_APPLICABLE = "not_applicable";
    const DISABLED = "disabled";
    const UNKNOWN = "unknown";

    private static array $choices = [ "not_configured","scheduled","succeeded","re_scheduled","failed","skipped","not_applicable","disabled", ];
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
