<?php

namespace Chargebee\Enums;

enum Gateway : string { 
    case CHARGEBEE = "chargebee";
    case CHARGEBEE_PAYMENTS = "chargebee_payments";
    case ADYEN = "adyen";
    case STRIPE = "stripe";
    case WEPAY = "wepay";
    case BRAINTREE = "braintree";
    case AUTHORIZE_NET = "authorize_net";
    case PAYPAL_PRO = "paypal_pro";
    case PIN = "pin";
    case EWAY = "eway";
    case EWAY_RAPID = "eway_rapid";
    case WORLDPAY = "worldpay";
    case BALANCED_PAYMENTS = "balanced_payments";
    case BEANSTREAM = "beanstream";
    case BLUEPAY = "bluepay";
    case ELAVON = "elavon";
    case FIRST_DATA_GLOBAL = "first_data_global";
    case HDFC = "hdfc";
    case MIGS = "migs";
    case NMI = "nmi";
    case OGONE = "ogone";
    case PAYMILL = "paymill";
    case PAYPAL_PAYFLOW_PRO = "paypal_payflow_pro";
    case SAGE_PAY = "sage_pay";
    case TCO = "tco";
    case WIRECARD = "wirecard";
    case AMAZON_PAYMENTS = "amazon_payments";
    case PAYPAL_EXPRESS_CHECKOUT = "paypal_express_checkout";
    case ORBITAL = "orbital";
    case MONERIS_US = "moneris_us";
    case MONERIS = "moneris";
    case BLUESNAP = "bluesnap";
    case CYBERSOURCE = "cybersource";
    case VANTIV = "vantiv";
    case CHECKOUT_COM = "checkout_com";
    case PAYPAL = "paypal";
    case INGENICO_DIRECT = "ingenico_direct";
    case EXACT = "exact";
    case MOLLIE = "mollie";
    case QUICKBOOKS = "quickbooks";
    case RAZORPAY = "razorpay";
    case GLOBAL_PAYMENTS = "global_payments";
    case BANK_OF_AMERICA = "bank_of_america";
    case ECENTRIC = "ecentric";
    case METRICS_GLOBAL = "metrics_global";
    case WINDCAVE = "windcave";
    case PAY_COM = "pay_com";
    case EBANX = "ebanx";
    case DLOCAL = "dlocal";
    case NUVEI = "nuvei";
    case SOLIDGATE = "solidgate";
    case PAYSTACK = "paystack";
    case JP_MORGAN = "jp_morgan";
    case GOCARDLESS = "gocardless";
    case NOT_APPLICABLE = "not_applicable";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>