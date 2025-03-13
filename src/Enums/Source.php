<?php

namespace Chargebee\Enums;

enum Source : string { 
    case ADMIN_CONSOLE = "admin_console";
    case API = "api";
    case BULK_OPERATION = "bulk_operation";
    case SCHEDULED_JOB = "scheduled_job";
    case HOSTED_PAGE = "hosted_page";
    case PORTAL = "portal";
    case SYSTEM = "system";
    case NONE = "none";
    case JS_API = "js_api";
    case MIGRATION = "migration";
    case EXTERNAL_SERVICE = "external_service";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>