<?php

namespace Chargebee\Resources\Order\Enums;

enum CancellationReason : string { 
    case SHIPPING_CUT_OFF_PASSED = "shipping_cut_off_passed";
    case PRODUCT_UNSATISFACTORY = "product_unsatisfactory";
    case THIRD_PARTY_CANCELLATION = "third_party_cancellation";
    case PRODUCT_NOT_REQUIRED = "product_not_required";
    case DELIVERY_DATE_MISSED = "delivery_date_missed";
    case ALTERNATIVE_FOUND = "alternative_found";
    case INVOICE_WRITTEN_OFF = "invoice_written_off";
    case INVOICE_VOIDED = "invoice_voided";
    case FRAUDULENT_TRANSACTION = "fraudulent_transaction";
    case PAYMENT_DECLINED = "payment_declined";
    case SUBSCRIPTION_CANCELLED = "subscription_cancelled";
    case PRODUCT_NOT_AVAILABLE = "product_not_available";
    case OTHERS = "others";
    case ORDER_RESENT = "order_resent";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>