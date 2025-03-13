<?php

namespace Chargebee\Resources\PaymentIntent\Enums;

enum PaymentMethodType : string { 
    case CARD = "card";
    case IDEAL = "ideal";
    case SOFORT = "sofort";
    case BANCONTACT = "bancontact";
    case GOOGLE_PAY = "google_pay";
    case DOTPAY = "dotpay";
    case GIROPAY = "giropay";
    case APPLE_PAY = "apple_pay";
    case UPI = "upi";
    case NETBANKING_EMANDATES = "netbanking_emandates";
    case PAYPAL_EXPRESS_CHECKOUT = "paypal_express_checkout";
    case DIRECT_DEBIT = "direct_debit";
    case BOLETO = "boleto";
    case VENMO = "venmo";
    case AMAZON_PAYMENTS = "amazon_payments";
    case PAY_TO = "pay_to";
    case FASTER_PAYMENTS = "faster_payments";
    case SEPA_INSTANT_TRANSFER = "sepa_instant_transfer";
    case KLARNA_PAY_NOW = "klarna_pay_now";
    case ONLINE_BANKING_POLAND = "online_banking_poland";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>