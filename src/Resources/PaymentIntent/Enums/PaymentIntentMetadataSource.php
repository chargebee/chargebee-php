<?php

namespace Chargebee\Resources\PaymentIntent\Enums;

enum PaymentIntentMetadataSource : string { 
    case CB_JS = "cb_js";
    case COMPONENTS_FIELDS = "components_fields";
    case CHECKOUT_V3 = "checkout_v3";
    case PAYNOW_V3 = "paynow_v3";
    case PORTAL_V3 = "portal_v3";
    case GIFT_V3 = "gift_v3";
    case CHECKOUT_V4 = "checkout_v4";
    case PAYMENT_COMPONENT = "payment_component";
    case PC_INAPP_V4 = "pc_inapp_v4";
    case PC_FPC_V4 = "pc_fpc_v4";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>