<?php
namespace Chargebee;
use Chargebee\Actions\AddonActions;
use Chargebee\Actions\AddressActions;
use Chargebee\Actions\AttachedItemActions;
use Chargebee\Actions\BusinessEntityActions;
use Chargebee\Actions\CardActions;
use Chargebee\Actions\CommentActions;
use Chargebee\Actions\ConfigurationActions;
use Chargebee\Actions\CouponActions;
use Chargebee\Actions\CouponCodeActions;
use Chargebee\Actions\CouponSetActions;
use Chargebee\Actions\CreditNoteActions;
use Chargebee\Actions\CurrencyActions;
use Chargebee\Actions\CustomerActions;
use Chargebee\Actions\CustomerEntitlementActions;
use Chargebee\Actions\DifferentialPriceActions;
use Chargebee\Actions\EntitlementActions;
use Chargebee\Actions\EntitlementOverrideActions;
use Chargebee\Actions\EstimateActions;
use Chargebee\Actions\EventActions;
use Chargebee\Actions\ExportActions;
use Chargebee\Actions\FeatureActions;
use Chargebee\Actions\GiftActions;
use Chargebee\Actions\HostedPageActions;
use Chargebee\Actions\InAppSubscriptionActions;
use Chargebee\Actions\InvoiceActions;
use Chargebee\Actions\ItemActions;
use Chargebee\Actions\ItemEntitlementActions;
use Chargebee\Actions\ItemFamilyActions;
use Chargebee\Actions\ItemPriceActions;
use Chargebee\Actions\OmnichannelSubscriptionActions;
use Chargebee\Actions\OmnichannelSubscriptionItemActions;
use Chargebee\Actions\OrderActions;
use Chargebee\Actions\PaymentIntentActions;
use Chargebee\Actions\PaymentScheduleSchemeActions;
use Chargebee\Actions\PaymentSourceActions;
use Chargebee\Actions\PaymentVoucherActions;
use Chargebee\Actions\PlanActions;
use Chargebee\Actions\PortalSessionActions;
use Chargebee\Actions\PriceVariantActions;
use Chargebee\Actions\PricingPageSessionActions;
use Chargebee\Actions\PromotionalCreditActions;
use Chargebee\Actions\PurchaseActions;
use Chargebee\Actions\QuoteActions;
use Chargebee\Actions\RampActions;
use Chargebee\Actions\RecordedPurchaseActions;
use Chargebee\Actions\ResourceMigrationActions;
use Chargebee\Actions\RuleActions;
use Chargebee\Actions\SiteMigrationDetailActions;
use Chargebee\Actions\SubscriptionActions;
use Chargebee\Actions\SubscriptionEntitlementActions;
use Chargebee\Actions\TimeMachineActions;
use Chargebee\Actions\TransactionActions;
use Chargebee\Actions\UnbilledChargeActions;
use Chargebee\Actions\UsageActions;
use Chargebee\Actions\UsageEventActions;
use Chargebee\Actions\VirtualBankAccountActions;

use Chargebee\HttpClient\GuzzleFactory;
use Chargebee\HttpClient\HttpClientFactory;

class ChargebeeClient {
    private HttpClientFactory $httpClientFactory;
    private Environment $env;
     /**
     * @param array{
     *      apiKey: string,
     *      site: string,
     *      httpScheme: 'http' | 'https',
     *      chargebeeDomain?: string,
     *      connectTimeoutInMillis?: float,
     *      requestTimeoutInMillis?: float,
     *      userAgentSuffix?: string
     * } $options
     * @param HttpClientFactory|null $httpClient
     * @throws \Exception
     */
    public function __construct($options, ?HttpClientFactory $httpClient=null)
    {
        if (!is_array($options)) {
            throw new \Exception('$option must be of type array!');
        }
        if (!isset($options["apiKey"]) && !isset($options["site"])) {
            throw new \Exception('$option must contain apiKey or site.');
        }
        $env = new Environment($options["site"], $options["apiKey"]);
        if (isset($options["chargebeeDomain"])) {
            $env->setChargebeeDomain($options["chargebeeDomain"]);
        }
        if (isset($options["httpScheme"])) {
            $env->setScheme($options["httpScheme"]);
        }
        if (isset($options["connectTimeoutInMillis"]) && is_numeric($options["connectTimeoutInMillis"])) {
            $env->updateConnectTimeoutInSecs($options["connectTimeoutInMillis"] / 1000);
        }
        if (isset($options["requestTimeoutInMillis"]) && is_numeric($options["requestTimeoutInMillis"])) {
            $env->updateRequestTimeoutInSecs($options["requestTimeoutInMillis"] / 1000);
        }
        if(isset($options['userAgentSuffix'])){
            $env->setUserAgentSuffix($options['userAgentSuffix']);
        }
        $this->env = $env;
        $this->httpClientFactory = $httpClient ?? new GuzzleFactory($env->requestTimeoutInSecs, $env->connectTimeoutInSecs);
    }


    public function addon() :AddonActions {
        return new AddonActions($this->httpClientFactory, $this->env);
    }

    public function address() :AddressActions {
        return new AddressActions($this->httpClientFactory, $this->env);
    }

    public function attachedItem() :AttachedItemActions {
        return new AttachedItemActions($this->httpClientFactory, $this->env);
    }

    public function businessEntity() :BusinessEntityActions {
        return new BusinessEntityActions($this->httpClientFactory, $this->env);
    }

    public function card() :CardActions {
        return new CardActions($this->httpClientFactory, $this->env);
    }

    public function comment() :CommentActions {
        return new CommentActions($this->httpClientFactory, $this->env);
    }

    public function configuration() :ConfigurationActions {
        return new ConfigurationActions($this->httpClientFactory, $this->env);
    }

    public function coupon() :CouponActions {
        return new CouponActions($this->httpClientFactory, $this->env);
    }

    public function couponCode() :CouponCodeActions {
        return new CouponCodeActions($this->httpClientFactory, $this->env);
    }

    public function couponSet() :CouponSetActions {
        return new CouponSetActions($this->httpClientFactory, $this->env);
    }

    public function creditNote() :CreditNoteActions {
        return new CreditNoteActions($this->httpClientFactory, $this->env);
    }

    public function currency() :CurrencyActions {
        return new CurrencyActions($this->httpClientFactory, $this->env);
    }

    public function customer() :CustomerActions {
        return new CustomerActions($this->httpClientFactory, $this->env);
    }

    public function customerEntitlement() :CustomerEntitlementActions {
        return new CustomerEntitlementActions($this->httpClientFactory, $this->env);
    }

    public function differentialPrice() :DifferentialPriceActions {
        return new DifferentialPriceActions($this->httpClientFactory, $this->env);
    }

    public function entitlement() :EntitlementActions {
        return new EntitlementActions($this->httpClientFactory, $this->env);
    }

    public function entitlementOverride() :EntitlementOverrideActions {
        return new EntitlementOverrideActions($this->httpClientFactory, $this->env);
    }

    public function estimate() :EstimateActions {
        return new EstimateActions($this->httpClientFactory, $this->env);
    }

    public function event() :EventActions {
        return new EventActions($this->httpClientFactory, $this->env);
    }

    public function export() :ExportActions {
        return new ExportActions($this->httpClientFactory, $this->env);
    }

    public function feature() :FeatureActions {
        return new FeatureActions($this->httpClientFactory, $this->env);
    }

    public function gift() :GiftActions {
        return new GiftActions($this->httpClientFactory, $this->env);
    }

    public function hostedPage() :HostedPageActions {
        return new HostedPageActions($this->httpClientFactory, $this->env);
    }

    public function inAppSubscription() :InAppSubscriptionActions {
        return new InAppSubscriptionActions($this->httpClientFactory, $this->env);
    }

    public function invoice() :InvoiceActions {
        return new InvoiceActions($this->httpClientFactory, $this->env);
    }

    public function item() :ItemActions {
        return new ItemActions($this->httpClientFactory, $this->env);
    }

    public function itemEntitlement() :ItemEntitlementActions {
        return new ItemEntitlementActions($this->httpClientFactory, $this->env);
    }

    public function itemFamily() :ItemFamilyActions {
        return new ItemFamilyActions($this->httpClientFactory, $this->env);
    }

    public function itemPrice() :ItemPriceActions {
        return new ItemPriceActions($this->httpClientFactory, $this->env);
    }

    public function omnichannelSubscription() :OmnichannelSubscriptionActions {
        return new OmnichannelSubscriptionActions($this->httpClientFactory, $this->env);
    }

    public function omnichannelSubscriptionItem() :OmnichannelSubscriptionItemActions {
        return new OmnichannelSubscriptionItemActions($this->httpClientFactory, $this->env);
    }

    public function order() :OrderActions {
        return new OrderActions($this->httpClientFactory, $this->env);
    }

    public function paymentIntent() :PaymentIntentActions {
        return new PaymentIntentActions($this->httpClientFactory, $this->env);
    }

    public function paymentScheduleScheme() :PaymentScheduleSchemeActions {
        return new PaymentScheduleSchemeActions($this->httpClientFactory, $this->env);
    }

    public function paymentSource() :PaymentSourceActions {
        return new PaymentSourceActions($this->httpClientFactory, $this->env);
    }

    public function paymentVoucher() :PaymentVoucherActions {
        return new PaymentVoucherActions($this->httpClientFactory, $this->env);
    }

    public function plan() :PlanActions {
        return new PlanActions($this->httpClientFactory, $this->env);
    }

    public function portalSession() :PortalSessionActions {
        return new PortalSessionActions($this->httpClientFactory, $this->env);
    }

    public function priceVariant() :PriceVariantActions {
        return new PriceVariantActions($this->httpClientFactory, $this->env);
    }

    public function pricingPageSession() :PricingPageSessionActions {
        return new PricingPageSessionActions($this->httpClientFactory, $this->env);
    }

    public function promotionalCredit() :PromotionalCreditActions {
        return new PromotionalCreditActions($this->httpClientFactory, $this->env);
    }

    public function purchase() :PurchaseActions {
        return new PurchaseActions($this->httpClientFactory, $this->env);
    }

    public function quote() :QuoteActions {
        return new QuoteActions($this->httpClientFactory, $this->env);
    }

    public function ramp() :RampActions {
        return new RampActions($this->httpClientFactory, $this->env);
    }

    public function recordedPurchase() :RecordedPurchaseActions {
        return new RecordedPurchaseActions($this->httpClientFactory, $this->env);
    }

    public function resourceMigration() :ResourceMigrationActions {
        return new ResourceMigrationActions($this->httpClientFactory, $this->env);
    }

    public function rule() :RuleActions {
        return new RuleActions($this->httpClientFactory, $this->env);
    }

    public function siteMigrationDetail() :SiteMigrationDetailActions {
        return new SiteMigrationDetailActions($this->httpClientFactory, $this->env);
    }

    public function subscription() :SubscriptionActions {
        return new SubscriptionActions($this->httpClientFactory, $this->env);
    }

    public function subscriptionEntitlement() :SubscriptionEntitlementActions {
        return new SubscriptionEntitlementActions($this->httpClientFactory, $this->env);
    }

    public function timeMachine() :TimeMachineActions {
        return new TimeMachineActions($this->httpClientFactory, $this->env);
    }

    public function transaction() :TransactionActions {
        return new TransactionActions($this->httpClientFactory, $this->env);
    }

    public function unbilledCharge() :UnbilledChargeActions {
        return new UnbilledChargeActions($this->httpClientFactory, $this->env);
    }

    public function usage() :UsageActions {
        return new UsageActions($this->httpClientFactory, $this->env);
    }

    public function usageEvent() :UsageEventActions {
        return new UsageEventActions($this->httpClientFactory, $this->env);
    }

    public function virtualBankAccount() :VirtualBankAccountActions {
        return new VirtualBankAccountActions($this->httpClientFactory, $this->env);
    }

}