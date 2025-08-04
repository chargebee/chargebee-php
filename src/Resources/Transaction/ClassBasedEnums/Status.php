<?php

namespace Chargebee\Resources\Transaction\ClassBasedEnums;

final class Status { 
    const IN_PROGRESS = "in_progress";
    const SUCCESS = "success";
    const VOIDED = "voided";
    const FAILURE = "failure";
    const TIMEOUT = "timeout";
    const NEEDS_ATTENTION = "needs_attention";
    const LATE_FAILURE = "late_failure";
    const UNKNOWN = "unknown";

    private static array $choices = [ "in_progress","success","voided","failure","timeout","needs_attention","late_failure", ];
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
