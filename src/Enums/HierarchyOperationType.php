<?php

namespace Chargebee\Enums;

enum HierarchyOperationType : string { 
    case COMPLETE_HIERARCHY = "complete_hierarchy";
    case SUBORDINATES = "subordinates";
    case PATH_TO_ROOT = "path_to_root";
    /*
    * @depcreated
    */
    case SUBORDINATES_WITH_UNBILLED_CHARGES_PAYABLE_BY_PARENT = "subordinates_with_unbilled_charges_payable_by_parent";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>