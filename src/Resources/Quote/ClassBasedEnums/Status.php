<?php

namespace Chargebee\Resources\Quote\ClassBasedEnums;

final class Status { 
    const OPEN = "open";
    const ACCEPTED = "accepted";
    const DECLINED = "declined";
    const INVOICED = "invoiced";
    const CLOSED = "closed";
    const PENDING_APPROVAL = "pending_approval";
    const APPROVAL_REJECTED = "approval_rejected";
    const PROPOSED = "proposed";
    const VOIDED = "voided";
    const EXPIRED = "expired";
    const UNKNOWN = "unknown";

    private static array $choices = [ "open","accepted","declined","invoiced","closed","pending_approval","approval_rejected","proposed","voided","expired", ];
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
