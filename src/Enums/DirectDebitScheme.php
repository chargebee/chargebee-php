<?php

namespace Chargebee\Enums;

enum DirectDebitScheme : string { 
    case ACH = "ach";
    case BACS = "bacs";
    case SEPA_CORE = "sepa_core";
    case AUTOGIRO = "autogiro";
    case BECS = "becs";
    case BECS_NZ = "becs_nz";
    case PAD = "pad";
    case NOT_APPLICABLE = "not_applicable";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>