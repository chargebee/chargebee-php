<?php

namespace Chargebee\Enums;

enum Type : string { 
    case CARD = "card";
    case PAYPAL_EXPRESS_CHECKOUT = "paypal_express_checkout";
    case AMAZON_PAYMENTS = "amazon_payments";
    case DIRECT_DEBIT = "direct_debit";
    case GENERIC = "generic";
    case ALIPAY = "alipay";
    case UNIONPAY = "unionpay";
    case APPLE_PAY = "apple_pay";
    case WECHAT_PAY = "wechat_pay";
    case IDEAL = "ideal";
    case GOOGLE_PAY = "google_pay";
    case SOFORT = "sofort";
    case BANCONTACT = "bancontact";
    case GIROPAY = "giropay";
    case DOTPAY = "dotpay";
    case UPI = "upi";
    case NETBANKING_EMANDATES = "netbanking_emandates";
    case VENMO = "venmo";
    case PAY_TO = "pay_to";
    case FASTER_PAYMENTS = "faster_payments";
    case SEPA_INSTANT_TRANSFER = "sepa_instant_transfer";
    case AUTOMATED_BANK_TRANSFER = "automated_bank_transfer";
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
    case TWINT = "twint";
    case GO_PAY = "go_pay";
    case GRAB_PAY = "grab_pay";
    case PAY_CO = "pay_co";
    case AFTER_PAY = "after_pay";
    case SWISH = "swish";
    case PAYME = "payme";
    case PIX = "pix";
    case KLARNA = "klarna";
    case ALIPAY_HK = "alipay_hk";
    case PAYPAY = "paypay";
    case GCASH = "gcash";
    case SOUTH_KOREAN_CARDS = "south_korean_cards";
    case PAYNOW = "paynow";
    case BIZUM = "bizum";
    case PROMPTPAY = "promptpay";
    case DANA = "dana";
    case TOUCH_N_GO = "touch_n_go";
    case TAMARA = "tamara";
    case QPAY = "qpay";
    case FREE_TRIAL = "free_trial";
    case PAY_UP_FRONT = "pay_up_front";
    case PAY_AS_YOU_GO = "pay_as_you_go";
    case SIMPLE = "simple";
    case COMPOUND = "compound";
    case USAGE_EXCEEDED = "usage_exceeded";
    case SPEND_EXCEEDED = "spend_exceeded";
    case CREDIT_BALANCE_DROPPED = "credit_balance_dropped";
    case CREDIT = "credit";
    case DEBIT = "debit";
    case HOLD = "hold";
    case UNHOLD = "unhold";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>