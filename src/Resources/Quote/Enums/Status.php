<?php

namespace Chargebee\Resources\Quote\Enums;

enum Status : string { 
    case OPEN = "open";
    case ACCEPTED = "accepted";
    case DECLINED = "declined";
    case INVOICED = "invoiced";
    case CLOSED = "closed";
    /*
    * @depcreated
    */
    case PENDING_APPROVAL = "pending_approval";
    /*
    * @depcreated
    */
    case APPROVAL_REJECTED = "approval_rejected";
    /*
    * @depcreated
    */
    case PROPOSED = "proposed";
    /*
    * @depcreated
    */
    case VOIDED = "voided";
    /*
    * @depcreated
    */
    case EXPIRED = "expired";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>