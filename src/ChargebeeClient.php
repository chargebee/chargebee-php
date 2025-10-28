<?php
namespace Chargebee;
use Chargebee\Actions\Contracts\AddonActionsInterface;
use Chargebee\Actions\AddonActions;
use Chargebee\Actions\Contracts\AddressActionsInterface;
use Chargebee\Actions\AddressActions;
use Chargebee\Actions\Contracts\AttachedItemActionsInterface;
use Chargebee\Actions\AttachedItemActions;
use Chargebee\Actions\Contracts\BusinessEntityActionsInterface;
use Chargebee\Actions\BusinessEntityActions;
use Chargebee\Actions\Contracts\CardActionsInterface;
use Chargebee\Actions\CardActions;
use Chargebee\Actions\Contracts\CommentActionsInterface;
use Chargebee\Actions\CommentActions;
use Chargebee\Actions\Contracts\ConfigurationActionsInterface;
use Chargebee\Actions\ConfigurationActions;
use Chargebee\Actions\Contracts\CouponActionsInterface;
use Chargebee\Actions\CouponActions;
use Chargebee\Actions\Contracts\CouponCodeActionsInterface;
use Chargebee\Actions\CouponCodeActions;
use Chargebee\Actions\Contracts\CouponSetActionsInterface;
use Chargebee\Actions\CouponSetActions;
use Chargebee\Actions\Contracts\CreditNoteActionsInterface;
use Chargebee\Actions\CreditNoteActions;
use Chargebee\Actions\Contracts\CurrencyActionsInterface;
use Chargebee\Actions\CurrencyActions;
use Chargebee\Actions\Contracts\CustomerActionsInterface;
use Chargebee\Actions\CustomerActions;
use Chargebee\Actions\Contracts\CustomerEntitlementActionsInterface;
use Chargebee\Actions\CustomerEntitlementActions;
use Chargebee\Actions\Contracts\DifferentialPriceActionsInterface;
use Chargebee\Actions\DifferentialPriceActions;
use Chargebee\Actions\Contracts\EntitlementActionsInterface;
use Chargebee\Actions\EntitlementActions;
use Chargebee\Actions\Contracts\EntitlementOverrideActionsInterface;
use Chargebee\Actions\EntitlementOverrideActions;
use Chargebee\Actions\Contracts\EstimateActionsInterface;
use Chargebee\Actions\EstimateActions;
use Chargebee\Actions\Contracts\EventActionsInterface;
use Chargebee\Actions\EventActions;
use Chargebee\Actions\Contracts\ExportActionsInterface;
use Chargebee\Actions\ExportActions;
use Chargebee\Actions\Contracts\FeatureActionsInterface;
use Chargebee\Actions\FeatureActions;
use Chargebee\Actions\Contracts\GiftActionsInterface;
use Chargebee\Actions\GiftActions;
use Chargebee\Actions\Contracts\HostedPageActionsInterface;
use Chargebee\Actions\HostedPageActions;
use Chargebee\Actions\Contracts\InAppSubscriptionActionsInterface;
use Chargebee\Actions\InAppSubscriptionActions;
use Chargebee\Actions\Contracts\InvoiceActionsInterface;
use Chargebee\Actions\InvoiceActions;
use Chargebee\Actions\Contracts\ItemActionsInterface;
use Chargebee\Actions\ItemActions;
use Chargebee\Actions\Contracts\ItemEntitlementActionsInterface;
use Chargebee\Actions\ItemEntitlementActions;
use Chargebee\Actions\Contracts\ItemFamilyActionsInterface;
use Chargebee\Actions\ItemFamilyActions;
use Chargebee\Actions\Contracts\ItemPriceActionsInterface;
use Chargebee\Actions\ItemPriceActions;
use Chargebee\Actions\Contracts\NonSubscriptionActionsInterface;
use Chargebee\Actions\NonSubscriptionActions;
use Chargebee\Actions\Contracts\OfferEventActionsInterface;
use Chargebee\Actions\OfferEventActions;
use Chargebee\Actions\Contracts\OfferFulfillmentActionsInterface;
use Chargebee\Actions\OfferFulfillmentActions;
use Chargebee\Actions\Contracts\OmnichannelOneTimeOrderActionsInterface;
use Chargebee\Actions\OmnichannelOneTimeOrderActions;
use Chargebee\Actions\Contracts\OmnichannelSubscriptionActionsInterface;
use Chargebee\Actions\OmnichannelSubscriptionActions;
use Chargebee\Actions\Contracts\OmnichannelSubscriptionItemActionsInterface;
use Chargebee\Actions\OmnichannelSubscriptionItemActions;
use Chargebee\Actions\Contracts\OrderActionsInterface;
use Chargebee\Actions\OrderActions;
use Chargebee\Actions\Contracts\PaymentIntentActionsInterface;
use Chargebee\Actions\PaymentIntentActions;
use Chargebee\Actions\Contracts\PaymentScheduleSchemeActionsInterface;
use Chargebee\Actions\PaymentScheduleSchemeActions;
use Chargebee\Actions\Contracts\PaymentSourceActionsInterface;
use Chargebee\Actions\PaymentSourceActions;
use Chargebee\Actions\Contracts\PaymentVoucherActionsInterface;
use Chargebee\Actions\PaymentVoucherActions;
use Chargebee\Actions\Contracts\PersonalizedOfferActionsInterface;
use Chargebee\Actions\PersonalizedOfferActions;
use Chargebee\Actions\Contracts\PlanActionsInterface;
use Chargebee\Actions\PlanActions;
use Chargebee\Actions\Contracts\PortalSessionActionsInterface;
use Chargebee\Actions\PortalSessionActions;
use Chargebee\Actions\Contracts\PriceVariantActionsInterface;
use Chargebee\Actions\PriceVariantActions;
use Chargebee\Actions\Contracts\PricingPageSessionActionsInterface;
use Chargebee\Actions\PricingPageSessionActions;
use Chargebee\Actions\Contracts\PromotionalCreditActionsInterface;
use Chargebee\Actions\PromotionalCreditActions;
use Chargebee\Actions\Contracts\PurchaseActionsInterface;
use Chargebee\Actions\PurchaseActions;
use Chargebee\Actions\Contracts\QuoteActionsInterface;
use Chargebee\Actions\QuoteActions;
use Chargebee\Actions\Contracts\RampActionsInterface;
use Chargebee\Actions\RampActions;
use Chargebee\Actions\Contracts\RecordedPurchaseActionsInterface;
use Chargebee\Actions\RecordedPurchaseActions;
use Chargebee\Actions\Contracts\ResourceMigrationActionsInterface;
use Chargebee\Actions\ResourceMigrationActions;
use Chargebee\Actions\Contracts\RuleActionsInterface;
use Chargebee\Actions\RuleActions;
use Chargebee\Actions\Contracts\SiteMigrationDetailActionsInterface;
use Chargebee\Actions\SiteMigrationDetailActions;
use Chargebee\Actions\Contracts\SubscriptionActionsInterface;
use Chargebee\Actions\SubscriptionActions;
use Chargebee\Actions\Contracts\SubscriptionEntitlementActionsInterface;
use Chargebee\Actions\SubscriptionEntitlementActions;
use Chargebee\Actions\Contracts\TimeMachineActionsInterface;
use Chargebee\Actions\TimeMachineActions;
use Chargebee\Actions\Contracts\TransactionActionsInterface;
use Chargebee\Actions\TransactionActions;
use Chargebee\Actions\Contracts\UnbilledChargeActionsInterface;
use Chargebee\Actions\UnbilledChargeActions;
use Chargebee\Actions\Contracts\UsageActionsInterface;
use Chargebee\Actions\UsageActions;
use Chargebee\Actions\Contracts\UsageEventActionsInterface;
use Chargebee\Actions\UsageEventActions;
use Chargebee\Actions\Contracts\UsageFileActionsInterface;
use Chargebee\Actions\UsageFileActions;
use Chargebee\Actions\Contracts\VirtualBankAccountActionsInterface;
use Chargebee\Actions\VirtualBankAccountActions;
use Chargebee\Actions\Contracts\WebhookEndpointActionsInterface;
use Chargebee\Actions\WebhookEndpointActions;

use Chargebee\HttpClient\GuzzleFactory;
use Chargebee\HttpClient\HttpClientFactory;

class ChargebeeClient {
    private HttpClientFactory $httpClientFactory;
    private Environment $env;
     /**
     * @param array{
     *      apiKey: string,
     *      site: string,
     *      httpScheme?: 'http' | 'https',
     *      chargebeeDomain?: string,
     *      connectTimeoutInMillis?: float,
     *      requestTimeoutInMillis?: float,
     *      userAgentSuffix?: string,
     *      retryConfig?: RetryConfig,
     *      enableDebugLogs?: bool
     * } $options
     * @param HttpClientFactory|null $httpClient
     * @throws \Exception
     */
    public function __construct($options, ?HttpClientFactory $httpClient=null)
    {
        if (!is_array($options)) {
            throw new \Exception('$options must be of type array!');
        }
        if (!isset($options["apiKey"]) && !isset($options["site"])) {
            throw new \Exception('$options must contain apiKey and site.');
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
        if (isset($options['retryConfig']) && $options['retryConfig'] instanceof RetryConfig) {
            $env->setRetryConfig($options['retryConfig']);
        }
        if (isset($options['enableDebugLogs']) && is_bool($options['enableDebugLogs'])) {
            $env->setEnableDebugLogs($options['enableDebugLogs']);
        }
        $this->env = $env;
        $this->httpClientFactory = $httpClient ?? new GuzzleFactory($env->requestTimeoutInSecs, $env->connectTimeoutInSecs);
    }


    public function addon() :AddonActionsInterface {
        return new AddonActions($this->httpClientFactory, $this->env);
    }

    public function address() :AddressActionsInterface {
        return new AddressActions($this->httpClientFactory, $this->env);
    }

    public function attachedItem() :AttachedItemActionsInterface {
        return new AttachedItemActions($this->httpClientFactory, $this->env);
    }

    public function businessEntity() :BusinessEntityActionsInterface {
        return new BusinessEntityActions($this->httpClientFactory, $this->env);
    }

    public function card() :CardActionsInterface {
        return new CardActions($this->httpClientFactory, $this->env);
    }

    public function comment() :CommentActionsInterface {
        return new CommentActions($this->httpClientFactory, $this->env);
    }

    public function configuration() :ConfigurationActionsInterface {
        return new ConfigurationActions($this->httpClientFactory, $this->env);
    }

    public function coupon() :CouponActionsInterface {
        return new CouponActions($this->httpClientFactory, $this->env);
    }

    public function couponCode() :CouponCodeActionsInterface {
        return new CouponCodeActions($this->httpClientFactory, $this->env);
    }

    public function couponSet() :CouponSetActionsInterface {
        return new CouponSetActions($this->httpClientFactory, $this->env);
    }

    public function creditNote() :CreditNoteActionsInterface {
        return new CreditNoteActions($this->httpClientFactory, $this->env);
    }

    public function currency() :CurrencyActionsInterface {
        return new CurrencyActions($this->httpClientFactory, $this->env);
    }

    public function customer() :CustomerActionsInterface {
        return new CustomerActions($this->httpClientFactory, $this->env);
    }

    public function customerEntitlement() :CustomerEntitlementActionsInterface {
        return new CustomerEntitlementActions($this->httpClientFactory, $this->env);
    }

    public function differentialPrice() :DifferentialPriceActionsInterface {
        return new DifferentialPriceActions($this->httpClientFactory, $this->env);
    }

    public function entitlement() :EntitlementActionsInterface {
        return new EntitlementActions($this->httpClientFactory, $this->env);
    }

    public function entitlementOverride() :EntitlementOverrideActionsInterface {
        return new EntitlementOverrideActions($this->httpClientFactory, $this->env);
    }

    public function estimate() :EstimateActionsInterface {
        return new EstimateActions($this->httpClientFactory, $this->env);
    }

    public function event() :EventActionsInterface {
        return new EventActions($this->httpClientFactory, $this->env);
    }

    public function export() :ExportActionsInterface {
        return new ExportActions($this->httpClientFactory, $this->env);
    }

    public function feature() :FeatureActionsInterface {
        return new FeatureActions($this->httpClientFactory, $this->env);
    }

    public function gift() :GiftActionsInterface {
        return new GiftActions($this->httpClientFactory, $this->env);
    }

    public function hostedPage() :HostedPageActionsInterface {
        return new HostedPageActions($this->httpClientFactory, $this->env);
    }

    public function inAppSubscription() :InAppSubscriptionActionsInterface {
        return new InAppSubscriptionActions($this->httpClientFactory, $this->env);
    }

    public function invoice() :InvoiceActionsInterface {
        return new InvoiceActions($this->httpClientFactory, $this->env);
    }

    public function item() :ItemActionsInterface {
        return new ItemActions($this->httpClientFactory, $this->env);
    }

    public function itemEntitlement() :ItemEntitlementActionsInterface {
        return new ItemEntitlementActions($this->httpClientFactory, $this->env);
    }

    public function itemFamily() :ItemFamilyActionsInterface {
        return new ItemFamilyActions($this->httpClientFactory, $this->env);
    }

    public function itemPrice() :ItemPriceActionsInterface {
        return new ItemPriceActions($this->httpClientFactory, $this->env);
    }

    public function nonSubscription() :NonSubscriptionActionsInterface {
        return new NonSubscriptionActions($this->httpClientFactory, $this->env);
    }

    public function offerEvent() :OfferEventActionsInterface {
        return new OfferEventActions($this->httpClientFactory, $this->env);
    }

    public function offerFulfillment() :OfferFulfillmentActionsInterface {
        return new OfferFulfillmentActions($this->httpClientFactory, $this->env);
    }

    public function omnichannelOneTimeOrder() :OmnichannelOneTimeOrderActionsInterface {
        return new OmnichannelOneTimeOrderActions($this->httpClientFactory, $this->env);
    }

    public function omnichannelSubscription() :OmnichannelSubscriptionActionsInterface {
        return new OmnichannelSubscriptionActions($this->httpClientFactory, $this->env);
    }

    public function omnichannelSubscriptionItem() :OmnichannelSubscriptionItemActionsInterface {
        return new OmnichannelSubscriptionItemActions($this->httpClientFactory, $this->env);
    }

    public function order() :OrderActionsInterface {
        return new OrderActions($this->httpClientFactory, $this->env);
    }

    public function paymentIntent() :PaymentIntentActionsInterface {
        return new PaymentIntentActions($this->httpClientFactory, $this->env);
    }

    public function paymentScheduleScheme() :PaymentScheduleSchemeActionsInterface {
        return new PaymentScheduleSchemeActions($this->httpClientFactory, $this->env);
    }

    public function paymentSource() :PaymentSourceActionsInterface {
        return new PaymentSourceActions($this->httpClientFactory, $this->env);
    }

    public function paymentVoucher() :PaymentVoucherActionsInterface {
        return new PaymentVoucherActions($this->httpClientFactory, $this->env);
    }

    public function personalizedOffer() :PersonalizedOfferActionsInterface {
        return new PersonalizedOfferActions($this->httpClientFactory, $this->env);
    }

    public function plan() :PlanActionsInterface {
        return new PlanActions($this->httpClientFactory, $this->env);
    }

    public function portalSession() :PortalSessionActionsInterface {
        return new PortalSessionActions($this->httpClientFactory, $this->env);
    }

    public function priceVariant() :PriceVariantActionsInterface {
        return new PriceVariantActions($this->httpClientFactory, $this->env);
    }

    public function pricingPageSession() :PricingPageSessionActionsInterface {
        return new PricingPageSessionActions($this->httpClientFactory, $this->env);
    }

    public function promotionalCredit() :PromotionalCreditActionsInterface {
        return new PromotionalCreditActions($this->httpClientFactory, $this->env);
    }

    public function purchase() :PurchaseActionsInterface {
        return new PurchaseActions($this->httpClientFactory, $this->env);
    }

    public function quote() :QuoteActionsInterface {
        return new QuoteActions($this->httpClientFactory, $this->env);
    }

    public function ramp() :RampActionsInterface {
        return new RampActions($this->httpClientFactory, $this->env);
    }

    public function recordedPurchase() :RecordedPurchaseActionsInterface {
        return new RecordedPurchaseActions($this->httpClientFactory, $this->env);
    }

    public function resourceMigration() :ResourceMigrationActionsInterface {
        return new ResourceMigrationActions($this->httpClientFactory, $this->env);
    }

    public function rule() :RuleActionsInterface {
        return new RuleActions($this->httpClientFactory, $this->env);
    }

    public function siteMigrationDetail() :SiteMigrationDetailActionsInterface {
        return new SiteMigrationDetailActions($this->httpClientFactory, $this->env);
    }

    public function subscription() :SubscriptionActionsInterface {
        return new SubscriptionActions($this->httpClientFactory, $this->env);
    }

    public function subscriptionEntitlement() :SubscriptionEntitlementActionsInterface {
        return new SubscriptionEntitlementActions($this->httpClientFactory, $this->env);
    }

    public function timeMachine() :TimeMachineActionsInterface {
        return new TimeMachineActions($this->httpClientFactory, $this->env);
    }

    public function transaction() :TransactionActionsInterface {
        return new TransactionActions($this->httpClientFactory, $this->env);
    }

    public function unbilledCharge() :UnbilledChargeActionsInterface {
        return new UnbilledChargeActions($this->httpClientFactory, $this->env);
    }

    public function usage() :UsageActionsInterface {
        return new UsageActions($this->httpClientFactory, $this->env);
    }

    public function usageEvent() :UsageEventActionsInterface {
        return new UsageEventActions($this->httpClientFactory, $this->env);
    }

    public function usageFile() :UsageFileActionsInterface {
        return new UsageFileActions($this->httpClientFactory, $this->env);
    }

    public function virtualBankAccount() :VirtualBankAccountActionsInterface {
        return new VirtualBankAccountActions($this->httpClientFactory, $this->env);
    }

    public function webhookEndpoint() :WebhookEndpointActionsInterface {
        return new WebhookEndpointActions($this->httpClientFactory, $this->env);
    }

}