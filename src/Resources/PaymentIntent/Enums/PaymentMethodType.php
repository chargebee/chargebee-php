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
    case PAYCONIQ_BY_BANCONTACT = "payconiq_by_bancontact";
    case ELECTRONIC_PAYMENT_STANDARD = "electronic_payment_standard";
    case KBC_PAYMENT_BUTTON = "kbc_payment_button";
    case PAY_BY_BANK = "pay_by_bank";
    case TRUSTLY = "trustly";
    case STABLECOIN = "stablecoin";
    case KAKAO_PAY = "kakao_pay";
    case NAVER_PAY = "naver_pay";
    case REVOLUT_PAY = "revolut_pay";
    case CASH_APP_PAY = "cash_app_pay";
    case WECHAT_PAY = "wechat_pay";
    case ALIPAY = "alipay";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>