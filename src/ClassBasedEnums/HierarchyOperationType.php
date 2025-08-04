<?php

namespace Chargebee\ClassBasedEnums;

final class HierarchyOperationType { 
    const COMPLETE_HIERARCHY = "complete_hierarchy";
    const SUBORDINATES = "subordinates";
    const PATH_TO_ROOT = "path_to_root";
    /*
    * @depcreated
    */
    const subordinates_with_unbilled_charges_payable_by_parent = "subordinates_with_unbilled_charges_payable_by_parent";
    const UNKNOWN = "unknown";

    private static array $choices = [ "complete_hierarchy","subordinates","path_to_root", ];
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
