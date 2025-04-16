<?php

namespace Chargebee\Enums;

enum InvoiceDunningHandling : string { 
    case CONTINUE = "continue";
    case STOP = "stop";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>