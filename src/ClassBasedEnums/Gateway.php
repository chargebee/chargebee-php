<?php

namespace Chargebee\ClassBasedEnums;

final class Gateway { 
    const CHARGEBEE = "chargebee";
    const CHARGEBEE_PAYMENTS = "chargebee_payments";
    const ADYEN = "adyen";
    const STRIPE = "stripe";
    const WEPAY = "wepay";
    const BRAINTREE = "braintree";
    const AUTHORIZE_NET = "authorize_net";
    const PAYPAL_PRO = "paypal_pro";
    const PIN = "pin";
    const EWAY = "eway";
    const EWAY_RAPID = "eway_rapid";
    const WORLDPAY = "worldpay";
    const BALANCED_PAYMENTS = "balanced_payments";
    const BEANSTREAM = "beanstream";
    const BLUEPAY = "bluepay";
    const ELAVON = "elavon";
    const FIRST_DATA_GLOBAL = "first_data_global";
    const HDFC = "hdfc";
    const MIGS = "migs";
    const NMI = "nmi";
    const OGONE = "ogone";
    const PAYMILL = "paymill";
    const PAYPAL_PAYFLOW_PRO = "paypal_payflow_pro";
    const SAGE_PAY = "sage_pay";
    const TCO = "tco";
    const WIRECARD = "wirecard";
    const AMAZON_PAYMENTS = "amazon_payments";
    const PAYPAL_EXPRESS_CHECKOUT = "paypal_express_checkout";
    const ORBITAL = "orbital";
    const MONERIS_US = "moneris_us";
    const MONERIS = "moneris";
    const BLUESNAP = "bluesnap";
    const CYBERSOURCE = "cybersource";
    const VANTIV = "vantiv";
    const CHECKOUT_COM = "checkout_com";
    const PAYPAL = "paypal";
    const INGENICO_DIRECT = "ingenico_direct";
    const EXACT = "exact";
    const MOLLIE = "mollie";
    const QUICKBOOKS = "quickbooks";
    const RAZORPAY = "razorpay";
    const GLOBAL_PAYMENTS = "global_payments";
    const BANK_OF_AMERICA = "bank_of_america";
    const ECENTRIC = "ecentric";
    const METRICS_GLOBAL = "metrics_global";
    const WINDCAVE = "windcave";
    const PAY_COM = "pay_com";
    const EBANX = "ebanx";
    const DLOCAL = "dlocal";
    const NUVEI = "nuvei";
    const SOLIDGATE = "solidgate";
    const PAYSTACK = "paystack";
    const JP_MORGAN = "jp_morgan";
    const GOCARDLESS = "gocardless";
    const NOT_APPLICABLE = "not_applicable";
    const UNKNOWN = "unknown";

    private static array $choices = [ "chargebee","chargebee_payments","adyen","stripe","wepay","braintree","authorize_net","paypal_pro","pin","eway","eway_rapid","worldpay","balanced_payments","beanstream","bluepay","elavon","first_data_global","hdfc","migs","nmi","ogone","paymill","paypal_payflow_pro","sage_pay","tco","wirecard","amazon_payments","paypal_express_checkout","orbital","moneris_us","moneris","bluesnap","cybersource","vantiv","checkout_com","paypal","ingenico_direct","exact","mollie","quickbooks","razorpay","global_payments","bank_of_america","ecentric","metrics_global","windcave","pay_com","ebanx","dlocal","nuvei","solidgate","paystack","jp_morgan","gocardless","not_applicable", ];
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
