<?php

namespace Chargebee\ClassBasedEnums;

final class Source { 
    const ADMIN_CONSOLE = "admin_console";
    const API = "api";
    const BULK_OPERATION = "bulk_operation";
    const SCHEDULED_JOB = "scheduled_job";
    const HOSTED_PAGE = "hosted_page";
    const PORTAL = "portal";
    const SYSTEM = "system";
    const NONE = "none";
    const JS_API = "js_api";
    const MIGRATION = "migration";
    const EXTERNAL_SERVICE = "external_service";
    const UNKNOWN = "unknown";

    private static array $choices = [ "admin_console","api","bulk_operation","scheduled_job","hosted_page","portal","system","none","js_api","migration","external_service", ];
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
