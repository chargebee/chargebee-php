<?php

namespace Chargebee\Resources\Content;
use Chargebee\Resources\Addon\Addon;
use Chargebee\Resources\Address\Address;
use Chargebee\Resources\AdvanceInvoiceSchedule\AdvanceInvoiceSchedule;
use Chargebee\Resources\AttachedItem\AttachedItem;
use Chargebee\Resources\Attribute\Attribute;
use Chargebee\Resources\BusinessEntity\BusinessEntity;
use Chargebee\Resources\BusinessEntityTransfer\BusinessEntityTransfer;
use Chargebee\Resources\Card\Card;
use Chargebee\Resources\Comment\Comment;
use Chargebee\Resources\Configuration\Configuration;
use Chargebee\Resources\Contact\Contact;
use Chargebee\Resources\ContractTerm\ContractTerm;
use Chargebee\Resources\Coupon\Coupon;
use Chargebee\Resources\CouponCode\CouponCode;
use Chargebee\Resources\CouponSet\CouponSet;
use Chargebee\Resources\CreditNote\CreditNote;
use Chargebee\Resources\CreditNoteEstimate\CreditNoteEstimate;
use Chargebee\Resources\Currency\Currency;
use Chargebee\Resources\Customer\Customer;
use Chargebee\Resources\CustomerEntitlement\CustomerEntitlement;
use Chargebee\Resources\DifferentialPrice\DifferentialPrice;
use Chargebee\Resources\Discount\Discount;
use Chargebee\Resources\Download\Download;
use Chargebee\Resources\Entitlement\Entitlement;
use Chargebee\Resources\EntitlementOverride\EntitlementOverride;
use Chargebee\Resources\Estimate\Estimate;
use Chargebee\Resources\Event\Event;
use Chargebee\Resources\Export\Export;
use Chargebee\Resources\Feature\Feature;
use Chargebee\Resources\GatewayErrorDetail\GatewayErrorDetail;
use Chargebee\Resources\Gift\Gift;
use Chargebee\Resources\Hierarchy\Hierarchy;
use Chargebee\Resources\HostedPage\HostedPage;
use Chargebee\Resources\ImpactedItem\ImpactedItem;
use Chargebee\Resources\ImpactedItemPrice\ImpactedItemPrice;
use Chargebee\Resources\ImpactedSubscription\ImpactedSubscription;
use Chargebee\Resources\InAppSubscription\InAppSubscription;
use Chargebee\Resources\Invoice\Invoice;
use Chargebee\Resources\InvoiceEstimate\InvoiceEstimate;
use Chargebee\Resources\Item\Item;
use Chargebee\Resources\ItemEntitlement\ItemEntitlement;
use Chargebee\Resources\ItemFamily\ItemFamily;
use Chargebee\Resources\ItemPrice\ItemPrice;
use Chargebee\Resources\Metadata\Metadata;
use Chargebee\Resources\NonSubscription\NonSubscription;
use Chargebee\Resources\OmnichannelSubscription\OmnichannelSubscription;
use Chargebee\Resources\OmnichannelSubscriptionItem\OmnichannelSubscriptionItem;
use Chargebee\Resources\OmnichannelSubscriptionItemScheduledChange\OmnichannelSubscriptionItemScheduledChange;
use Chargebee\Resources\OmnichannelTransaction\OmnichannelTransaction;
use Chargebee\Resources\Order\Order;
use Chargebee\Resources\PaymentIntent\PaymentIntent;
use Chargebee\Resources\PaymentReferenceNumber\PaymentReferenceNumber;
use Chargebee\Resources\PaymentSchedule\PaymentSchedule;
use Chargebee\Resources\PaymentScheduleEstimate\PaymentScheduleEstimate;
use Chargebee\Resources\PaymentScheduleScheme\PaymentScheduleScheme;
use Chargebee\Resources\PaymentSource\PaymentSource;
use Chargebee\Resources\PaymentVoucher\PaymentVoucher;
use Chargebee\Resources\Plan\Plan;
use Chargebee\Resources\PortalSession\PortalSession;
use Chargebee\Resources\PriceVariant\PriceVariant;
use Chargebee\Resources\PricingPageSession\PricingPageSession;
use Chargebee\Resources\PromotionalCredit\PromotionalCredit;
use Chargebee\Resources\Purchase\Purchase;
use Chargebee\Resources\Quote\Quote;
use Chargebee\Resources\QuoteLineGroup\QuoteLineGroup;
use Chargebee\Resources\QuotedCharge\QuotedCharge;
use Chargebee\Resources\QuotedSubscription\QuotedSubscription;
use Chargebee\Resources\Ramp\Ramp;
use Chargebee\Resources\RecordedPurchase\RecordedPurchase;
use Chargebee\Resources\ResourceMigration\ResourceMigration;
use Chargebee\Resources\Rule\Rule;
use Chargebee\Resources\SiteMigrationDetail\SiteMigrationDetail;
use Chargebee\Resources\Subscription\Subscription;
use Chargebee\Resources\SubscriptionEntitlement\SubscriptionEntitlement;
use Chargebee\Resources\SubscriptionEstimate\SubscriptionEstimate;
use Chargebee\Resources\TaxWithheld\TaxWithheld;
use Chargebee\Resources\ThirdPartyPaymentMethod\ThirdPartyPaymentMethod;
use Chargebee\Resources\TimeMachine\TimeMachine;
use Chargebee\Resources\Token\Token;
use Chargebee\Resources\Transaction\Transaction;
use Chargebee\Resources\UnbilledCharge\UnbilledCharge;
use Chargebee\Resources\Usage\Usage;
use Chargebee\Resources\UsageEvent\UsageEvent;
use Chargebee\Resources\UsageFile\UsageFile;
use Chargebee\Resources\VirtualBankAccount\VirtualBankAccount;

class Content  { 
    /**
    *
    * @var ?Addon $addon
    */
    public ?Addon $addon;
    
    /**
    *
    * @var ?Address $address
    */
    public ?Address $address;
    
    /**
    *
    * @var ?AdvanceInvoiceSchedule $advanceinvoiceschedule
    */
    public ?AdvanceInvoiceSchedule $advanceinvoiceschedule;
    
    /**
    *
    * @var ?AttachedItem $attacheditem
    */
    public ?AttachedItem $attacheditem;
    
    /**
    *
    * @var ?Attribute $attribute
    */
    public ?Attribute $attribute;
    
    /**
    *
    * @var ?BusinessEntity $businessentity
    */
    public ?BusinessEntity $businessentity;
    
    /**
    *
    * @var ?BusinessEntityTransfer $businessentitytransfer
    */
    public ?BusinessEntityTransfer $businessentitytransfer;
    
    /**
    *
    * @var ?Card $card
    */
    public ?Card $card;
    
    /**
    *
    * @var ?Comment $comment
    */
    public ?Comment $comment;
    
    /**
    *
    * @var ?Configuration $configuration
    */
    public ?Configuration $configuration;
    
    /**
    *
    * @var ?Contact $contact
    */
    public ?Contact $contact;
    
    /**
    *
    * @var ?ContractTerm $contractterm
    */
    public ?ContractTerm $contractterm;
    
    /**
    *
    * @var ?Coupon $coupon
    */
    public ?Coupon $coupon;
    
    /**
    *
    * @var ?CouponCode $couponcode
    */
    public ?CouponCode $couponcode;
    
    /**
    *
    * @var ?CouponSet $couponset
    */
    public ?CouponSet $couponset;
    
    /**
    *
    * @var ?CreditNote $creditnote
    */
    public ?CreditNote $creditnote;
    
    /**
    *
    * @var ?CreditNoteEstimate $creditnoteestimate
    */
    public ?CreditNoteEstimate $creditnoteestimate;
    
    /**
    *
    * @var ?Currency $currency
    */
    public ?Currency $currency;
    
    /**
    *
    * @var ?Customer $customer
    */
    public ?Customer $customer;
    
    /**
    *
    * @var ?CustomerEntitlement $customerentitlement
    */
    public ?CustomerEntitlement $customerentitlement;
    
    /**
    *
    * @var ?DifferentialPrice $differentialprice
    */
    public ?DifferentialPrice $differentialprice;
    
    /**
    *
    * @var ?Discount $discount
    */
    public ?Discount $discount;
    
    /**
    *
    * @var ?Download $download
    */
    public ?Download $download;
    
    /**
    *
    * @var ?Entitlement $entitlement
    */
    public ?Entitlement $entitlement;
    
    /**
    *
    * @var ?EntitlementOverride $entitlementoverride
    */
    public ?EntitlementOverride $entitlementoverride;
    
    /**
    *
    * @var ?Estimate $estimate
    */
    public ?Estimate $estimate;
    
    /**
    *
    * @var ?Event $event
    */
    public ?Event $event;
    
    /**
    *
    * @var ?Export $export
    */
    public ?Export $export;
    
    /**
    *
    * @var ?Feature $feature
    */
    public ?Feature $feature;
    
    /**
    *
    * @var ?GatewayErrorDetail $gatewayerrordetail
    */
    public ?GatewayErrorDetail $gatewayerrordetail;
    
    /**
    *
    * @var ?Gift $gift
    */
    public ?Gift $gift;
    
    /**
    *
    * @var ?Hierarchy $hierarchy
    */
    public ?Hierarchy $hierarchy;
    
    /**
    *
    * @var ?HostedPage $hostedpage
    */
    public ?HostedPage $hostedpage;
    
    /**
    *
    * @var ?ImpactedItem $impacteditem
    */
    public ?ImpactedItem $impacteditem;
    
    /**
    *
    * @var ?ImpactedItemPrice $impacteditemprice
    */
    public ?ImpactedItemPrice $impacteditemprice;
    
    /**
    *
    * @var ?ImpactedSubscription $impactedsubscription
    */
    public ?ImpactedSubscription $impactedsubscription;
    
    /**
    *
    * @var ?InAppSubscription $inappsubscription
    */
    public ?InAppSubscription $inappsubscription;
    
    /**
    *
    * @var ?Invoice $invoice
    */
    public ?Invoice $invoice;
    
    /**
    *
    * @var ?InvoiceEstimate $invoiceestimate
    */
    public ?InvoiceEstimate $invoiceestimate;
    
    /**
    *
    * @var ?Item $item
    */
    public ?Item $item;
    
    /**
    *
    * @var ?ItemEntitlement $itementitlement
    */
    public ?ItemEntitlement $itementitlement;
    
    /**
    *
    * @var ?ItemFamily $itemfamily
    */
    public ?ItemFamily $itemfamily;
    
    /**
    *
    * @var ?ItemPrice $itemprice
    */
    public ?ItemPrice $itemprice;
    
    /**
    *
    * @var ?Metadata $metadata
    */
    public ?Metadata $metadata;
    
    /**
    *
    * @var ?NonSubscription $nonsubscription
    */
    public ?NonSubscription $nonsubscription;
    
    /**
    *
    * @var ?OmnichannelSubscription $omnichannelsubscription
    */
    public ?OmnichannelSubscription $omnichannelsubscription;
    
    /**
    *
    * @var ?OmnichannelSubscriptionItem $omnichannelsubscriptionitem
    */
    public ?OmnichannelSubscriptionItem $omnichannelsubscriptionitem;
    
    /**
    *
    * @var ?OmnichannelSubscriptionItemScheduledChange $omnichannelsubscriptionitemscheduledchange
    */
    public ?OmnichannelSubscriptionItemScheduledChange $omnichannelsubscriptionitemscheduledchange;
    
    /**
    *
    * @var ?OmnichannelTransaction $omnichanneltransaction
    */
    public ?OmnichannelTransaction $omnichanneltransaction;
    
    /**
    *
    * @var ?Order $order
    */
    public ?Order $order;
    
    /**
    *
    * @var ?PaymentIntent $paymentintent
    */
    public ?PaymentIntent $paymentintent;
    
    /**
    *
    * @var ?PaymentReferenceNumber $paymentreferencenumber
    */
    public ?PaymentReferenceNumber $paymentreferencenumber;
    
    /**
    *
    * @var ?PaymentSchedule $paymentschedule
    */
    public ?PaymentSchedule $paymentschedule;
    
    /**
    *
    * @var ?PaymentScheduleEstimate $paymentscheduleestimate
    */
    public ?PaymentScheduleEstimate $paymentscheduleestimate;
    
    /**
    *
    * @var ?PaymentScheduleScheme $paymentschedulescheme
    */
    public ?PaymentScheduleScheme $paymentschedulescheme;
    
    /**
    *
    * @var ?PaymentSource $paymentsource
    */
    public ?PaymentSource $paymentsource;
    
    /**
    *
    * @var ?PaymentVoucher $paymentvoucher
    */
    public ?PaymentVoucher $paymentvoucher;
    
    /**
    *
    * @var ?Plan $plan
    */
    public ?Plan $plan;
    
    /**
    *
    * @var ?PortalSession $portalsession
    */
    public ?PortalSession $portalsession;
    
    /**
    *
    * @var ?PriceVariant $pricevariant
    */
    public ?PriceVariant $pricevariant;
    
    /**
    *
    * @var ?PricingPageSession $pricingpagesession
    */
    public ?PricingPageSession $pricingpagesession;
    
    /**
    *
    * @var ?PromotionalCredit $promotionalcredit
    */
    public ?PromotionalCredit $promotionalcredit;
    
    /**
    *
    * @var ?Purchase $purchase
    */
    public ?Purchase $purchase;
    
    /**
    *
    * @var ?Quote $quote
    */
    public ?Quote $quote;
    
    /**
    *
    * @var ?QuoteLineGroup $quotelinegroup
    */
    public ?QuoteLineGroup $quotelinegroup;
    
    /**
    *
    * @var ?QuotedCharge $quotedcharge
    */
    public ?QuotedCharge $quotedcharge;
    
    /**
    *
    * @var ?QuotedSubscription $quotedsubscription
    */
    public ?QuotedSubscription $quotedsubscription;
    
    /**
    *
    * @var ?Ramp $ramp
    */
    public ?Ramp $ramp;
    
    /**
    *
    * @var ?RecordedPurchase $recordedpurchase
    */
    public ?RecordedPurchase $recordedpurchase;
    
    /**
    *
    * @var ?ResourceMigration $resourcemigration
    */
    public ?ResourceMigration $resourcemigration;
    
    /**
    *
    * @var ?Rule $rule
    */
    public ?Rule $rule;
    
    /**
    *
    * @var ?SiteMigrationDetail $sitemigrationdetail
    */
    public ?SiteMigrationDetail $sitemigrationdetail;
    
    /**
    *
    * @var ?Subscription $subscription
    */
    public ?Subscription $subscription;
    
    /**
    *
    * @var ?SubscriptionEntitlement $subscriptionentitlement
    */
    public ?SubscriptionEntitlement $subscriptionentitlement;
    
    /**
    *
    * @var ?SubscriptionEstimate $subscriptionestimate
    */
    public ?SubscriptionEstimate $subscriptionestimate;
    
    /**
    *
    * @var ?TaxWithheld $taxwithheld
    */
    public ?TaxWithheld $taxwithheld;
    
    /**
    *
    * @var ?ThirdPartyPaymentMethod $thirdpartypaymentmethod
    */
    public ?ThirdPartyPaymentMethod $thirdpartypaymentmethod;
    
    /**
    *
    * @var ?TimeMachine $timemachine
    */
    public ?TimeMachine $timemachine;
    
    /**
    *
    * @var ?Token $token
    */
    public ?Token $token;
    
    /**
    *
    * @var ?Transaction $transaction
    */
    public ?Transaction $transaction;
    
    /**
    *
    * @var ?UnbilledCharge $unbilledcharge
    */
    public ?UnbilledCharge $unbilledcharge;
    
    /**
    *
    * @var ?Usage $usage
    */
    public ?Usage $usage;
    
    /**
    *
    * @var ?UsageEvent $usageevent
    */
    public ?UsageEvent $usageevent;
    
    /**
    *
    * @var ?UsageFile $usagefile
    */
    public ?UsageFile $usagefile;
    
    /**
    *
    * @var ?VirtualBankAccount $virtualbankaccount
    */
    public ?VirtualBankAccount $virtualbankaccount;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "addon" , "address" , "advance_invoice_schedule" , "attached_item" , "attribute" , "business_entity" , "business_entity_transfer" , "card" , "comment" , "configuration" , "contact" , "contract_term" , "coupon" , "coupon_code" , "coupon_set" , "credit_note" , "credit_note_estimate" , "currency" , "customer" , "customer_entitlement" , "differential_price" , "discount" , "download" , "entitlement" , "entitlement_override" , "estimate" , "event" , "export" , "feature" , "gateway_error_detail" , "gift" , "hierarchy" , "hosted_page" , "impacted_item" , "impacted_item_price" , "impacted_subscription" , "in_app_subscription" , "invoice" , "invoice_estimate" , "item" , "item_entitlement" , "item_family" , "item_price" , "metadata" , "non_subscription" , "omnichannel_subscription" , "omnichannel_subscription_item" , "omnichannel_subscription_item_scheduled_change" , "omnichannel_transaction" , "order" , "payment_intent" , "payment_reference_number" , "payment_schedule" , "payment_schedule_estimate" , "payment_schedule_scheme" , "payment_source" , "payment_voucher" , "plan" , "portal_session" , "price_variant" , "pricing_page_session" , "promotional_credit" , "purchase" , "quote" , "quote_line_group" , "quoted_charge" , "quoted_subscription" , "ramp" , "recorded_purchase" , "resource_migration" , "rule" , "site_migration_detail" , "subscription" , "subscription_entitlement" , "subscription_estimate" , "tax_withheld" , "third_party_payment_method" , "time_machine" , "token" , "transaction" , "unbilled_charge" , "usage" , "usage_event" , "usage_file" , "virtual_bank_account"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?Addon $addon,
        ?Address $address,
        ?AdvanceInvoiceSchedule $advanceinvoiceschedule,
        ?AttachedItem $attacheditem,
        ?Attribute $attribute,
        ?BusinessEntity $businessentity,
        ?BusinessEntityTransfer $businessentitytransfer,
        ?Card $card,
        ?Comment $comment,
        ?Configuration $configuration,
        ?Contact $contact,
        ?ContractTerm $contractterm,
        ?Coupon $coupon,
        ?CouponCode $couponcode,
        ?CouponSet $couponset,
        ?CreditNote $creditnote,
        ?CreditNoteEstimate $creditnoteestimate,
        ?Currency $currency,
        ?Customer $customer,
        ?CustomerEntitlement $customerentitlement,
        ?DifferentialPrice $differentialprice,
        ?Discount $discount,
        ?Download $download,
        ?Entitlement $entitlement,
        ?EntitlementOverride $entitlementoverride,
        ?Estimate $estimate,
        ?Event $event,
        ?Export $export,
        ?Feature $feature,
        ?GatewayErrorDetail $gatewayerrordetail,
        ?Gift $gift,
        ?Hierarchy $hierarchy,
        ?HostedPage $hostedpage,
        ?ImpactedItem $impacteditem,
        ?ImpactedItemPrice $impacteditemprice,
        ?ImpactedSubscription $impactedsubscription,
        ?InAppSubscription $inappsubscription,
        ?Invoice $invoice,
        ?InvoiceEstimate $invoiceestimate,
        ?Item $item,
        ?ItemEntitlement $itementitlement,
        ?ItemFamily $itemfamily,
        ?ItemPrice $itemprice,
        ?Metadata $metadata,
        ?NonSubscription $nonsubscription,
        ?OmnichannelSubscription $omnichannelsubscription,
        ?OmnichannelSubscriptionItem $omnichannelsubscriptionitem,
        ?OmnichannelSubscriptionItemScheduledChange $omnichannelsubscriptionitemscheduledchange,
        ?OmnichannelTransaction $omnichanneltransaction,
        ?Order $order,
        ?PaymentIntent $paymentintent,
        ?PaymentReferenceNumber $paymentreferencenumber,
        ?PaymentSchedule $paymentschedule,
        ?PaymentScheduleEstimate $paymentscheduleestimate,
        ?PaymentScheduleScheme $paymentschedulescheme,
        ?PaymentSource $paymentsource,
        ?PaymentVoucher $paymentvoucher,
        ?Plan $plan,
        ?PortalSession $portalsession,
        ?PriceVariant $pricevariant,
        ?PricingPageSession $pricingpagesession,
        ?PromotionalCredit $promotionalcredit,
        ?Purchase $purchase,
        ?Quote $quote,
        ?QuoteLineGroup $quotelinegroup,
        ?QuotedCharge $quotedcharge,
        ?QuotedSubscription $quotedsubscription,
        ?Ramp $ramp,
        ?RecordedPurchase $recordedpurchase,
        ?ResourceMigration $resourcemigration,
        ?Rule $rule,
        ?SiteMigrationDetail $sitemigrationdetail,
        ?Subscription $subscription,
        ?SubscriptionEntitlement $subscriptionentitlement,
        ?SubscriptionEstimate $subscriptionestimate,
        ?TaxWithheld $taxwithheld,
        ?ThirdPartyPaymentMethod $thirdpartypaymentmethod,
        ?TimeMachine $timemachine,
        ?Token $token,
        ?Transaction $transaction,
        ?UnbilledCharge $unbilledcharge,
        ?Usage $usage,
        ?UsageEvent $usageevent,
        ?UsageFile $usagefile,
        ?VirtualBankAccount $virtualbankaccount,
    )
    { 
        $this->addon = $addon;
        $this->address = $address;
        $this->advanceinvoiceschedule = $advanceinvoiceschedule;
        $this->attacheditem = $attacheditem;
        $this->attribute = $attribute;
        $this->businessentity = $businessentity;
        $this->businessentitytransfer = $businessentitytransfer;
        $this->card = $card;
        $this->comment = $comment;
        $this->configuration = $configuration;
        $this->contact = $contact;
        $this->contractterm = $contractterm;
        $this->coupon = $coupon;
        $this->couponcode = $couponcode;
        $this->couponset = $couponset;
        $this->creditnote = $creditnote;
        $this->creditnoteestimate = $creditnoteestimate;
        $this->currency = $currency;
        $this->customer = $customer;
        $this->customerentitlement = $customerentitlement;
        $this->differentialprice = $differentialprice;
        $this->discount = $discount;
        $this->download = $download;
        $this->entitlement = $entitlement;
        $this->entitlementoverride = $entitlementoverride;
        $this->estimate = $estimate;
        $this->event = $event;
        $this->export = $export;
        $this->feature = $feature;
        $this->gatewayerrordetail = $gatewayerrordetail;
        $this->gift = $gift;
        $this->hierarchy = $hierarchy;
        $this->hostedpage = $hostedpage;
        $this->impacteditem = $impacteditem;
        $this->impacteditemprice = $impacteditemprice;
        $this->impactedsubscription = $impactedsubscription;
        $this->inappsubscription = $inappsubscription;
        $this->invoice = $invoice;
        $this->invoiceestimate = $invoiceestimate;
        $this->item = $item;
        $this->itementitlement = $itementitlement;
        $this->itemfamily = $itemfamily;
        $this->itemprice = $itemprice;
        $this->metadata = $metadata;
        $this->nonsubscription = $nonsubscription;
        $this->omnichannelsubscription = $omnichannelsubscription;
        $this->omnichannelsubscriptionitem = $omnichannelsubscriptionitem;
        $this->omnichannelsubscriptionitemscheduledchange = $omnichannelsubscriptionitemscheduledchange;
        $this->omnichanneltransaction = $omnichanneltransaction;
        $this->order = $order;
        $this->paymentintent = $paymentintent;
        $this->paymentreferencenumber = $paymentreferencenumber;
        $this->paymentschedule = $paymentschedule;
        $this->paymentscheduleestimate = $paymentscheduleestimate;
        $this->paymentschedulescheme = $paymentschedulescheme;
        $this->paymentsource = $paymentsource;
        $this->paymentvoucher = $paymentvoucher;
        $this->plan = $plan;
        $this->portalsession = $portalsession;
        $this->pricevariant = $pricevariant;
        $this->pricingpagesession = $pricingpagesession;
        $this->promotionalcredit = $promotionalcredit;
        $this->purchase = $purchase;
        $this->quote = $quote;
        $this->quotelinegroup = $quotelinegroup;
        $this->quotedcharge = $quotedcharge;
        $this->quotedsubscription = $quotedsubscription;
        $this->ramp = $ramp;
        $this->recordedpurchase = $recordedpurchase;
        $this->resourcemigration = $resourcemigration;
        $this->rule = $rule;
        $this->sitemigrationdetail = $sitemigrationdetail;
        $this->subscription = $subscription;
        $this->subscriptionentitlement = $subscriptionentitlement;
        $this->subscriptionestimate = $subscriptionestimate;
        $this->taxwithheld = $taxwithheld;
        $this->thirdpartypaymentmethod = $thirdpartypaymentmethod;
        $this->timemachine = $timemachine;
        $this->token = $token;
        $this->transaction = $transaction;
        $this->unbilledcharge = $unbilledcharge;
        $this->usage = $usage;
        $this->usageevent = $usageevent;
        $this->usagefile = $usagefile;
        $this->virtualbankaccount = $virtualbankaccount;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( isset($resourceAttributes['addon']) ? Addon::from($resourceAttributes['addon']) : null,
        isset($resourceAttributes['address']) ? Address::from($resourceAttributes['address']) : null,
        isset($resourceAttributes['advance_invoice_schedule']) ? AdvanceInvoiceSchedule::from($resourceAttributes['advance_invoice_schedule']) : null,
        isset($resourceAttributes['attached_item']) ? AttachedItem::from($resourceAttributes['attached_item']) : null,
        isset($resourceAttributes['attribute']) ? Attribute::from($resourceAttributes['attribute']) : null,
        isset($resourceAttributes['business_entity']) ? BusinessEntity::from($resourceAttributes['business_entity']) : null,
        isset($resourceAttributes['business_entity_transfer']) ? BusinessEntityTransfer::from($resourceAttributes['business_entity_transfer']) : null,
        isset($resourceAttributes['card']) ? Card::from($resourceAttributes['card']) : null,
        isset($resourceAttributes['comment']) ? Comment::from($resourceAttributes['comment']) : null,
        isset($resourceAttributes['configuration']) ? Configuration::from($resourceAttributes['configuration']) : null,
        isset($resourceAttributes['contact']) ? Contact::from($resourceAttributes['contact']) : null,
        isset($resourceAttributes['contract_term']) ? ContractTerm::from($resourceAttributes['contract_term']) : null,
        isset($resourceAttributes['coupon']) ? Coupon::from($resourceAttributes['coupon']) : null,
        isset($resourceAttributes['coupon_code']) ? CouponCode::from($resourceAttributes['coupon_code']) : null,
        isset($resourceAttributes['coupon_set']) ? CouponSet::from($resourceAttributes['coupon_set']) : null,
        isset($resourceAttributes['credit_note']) ? CreditNote::from($resourceAttributes['credit_note']) : null,
        isset($resourceAttributes['credit_note_estimate']) ? CreditNoteEstimate::from($resourceAttributes['credit_note_estimate']) : null,
        isset($resourceAttributes['currency']) ? Currency::from($resourceAttributes['currency']) : null,
        isset($resourceAttributes['customer']) ? Customer::from($resourceAttributes['customer']) : null,
        isset($resourceAttributes['customer_entitlement']) ? CustomerEntitlement::from($resourceAttributes['customer_entitlement']) : null,
        isset($resourceAttributes['differential_price']) ? DifferentialPrice::from($resourceAttributes['differential_price']) : null,
        isset($resourceAttributes['discount']) ? Discount::from($resourceAttributes['discount']) : null,
        isset($resourceAttributes['download']) ? Download::from($resourceAttributes['download']) : null,
        isset($resourceAttributes['entitlement']) ? Entitlement::from($resourceAttributes['entitlement']) : null,
        isset($resourceAttributes['entitlement_override']) ? EntitlementOverride::from($resourceAttributes['entitlement_override']) : null,
        isset($resourceAttributes['estimate']) ? Estimate::from($resourceAttributes['estimate']) : null,
        isset($resourceAttributes['event']) ? Event::from($resourceAttributes['event']) : null,
        isset($resourceAttributes['export']) ? Export::from($resourceAttributes['export']) : null,
        isset($resourceAttributes['feature']) ? Feature::from($resourceAttributes['feature']) : null,
        isset($resourceAttributes['gateway_error_detail']) ? GatewayErrorDetail::from($resourceAttributes['gateway_error_detail']) : null,
        isset($resourceAttributes['gift']) ? Gift::from($resourceAttributes['gift']) : null,
        isset($resourceAttributes['hierarchy']) ? Hierarchy::from($resourceAttributes['hierarchy']) : null,
        isset($resourceAttributes['hosted_page']) ? HostedPage::from($resourceAttributes['hosted_page']) : null,
        isset($resourceAttributes['impacted_item']) ? ImpactedItem::from($resourceAttributes['impacted_item']) : null,
        isset($resourceAttributes['impacted_item_price']) ? ImpactedItemPrice::from($resourceAttributes['impacted_item_price']) : null,
        isset($resourceAttributes['impacted_subscription']) ? ImpactedSubscription::from($resourceAttributes['impacted_subscription']) : null,
        isset($resourceAttributes['in_app_subscription']) ? InAppSubscription::from($resourceAttributes['in_app_subscription']) : null,
        isset($resourceAttributes['invoice']) ? Invoice::from($resourceAttributes['invoice']) : null,
        isset($resourceAttributes['invoice_estimate']) ? InvoiceEstimate::from($resourceAttributes['invoice_estimate']) : null,
        isset($resourceAttributes['item']) ? Item::from($resourceAttributes['item']) : null,
        isset($resourceAttributes['item_entitlement']) ? ItemEntitlement::from($resourceAttributes['item_entitlement']) : null,
        isset($resourceAttributes['item_family']) ? ItemFamily::from($resourceAttributes['item_family']) : null,
        isset($resourceAttributes['item_price']) ? ItemPrice::from($resourceAttributes['item_price']) : null,
        isset($resourceAttributes['metadata']) ? Metadata::from($resourceAttributes['metadata']) : null,
        isset($resourceAttributes['non_subscription']) ? NonSubscription::from($resourceAttributes['non_subscription']) : null,
        isset($resourceAttributes['omnichannel_subscription']) ? OmnichannelSubscription::from($resourceAttributes['omnichannel_subscription']) : null,
        isset($resourceAttributes['omnichannel_subscription_item']) ? OmnichannelSubscriptionItem::from($resourceAttributes['omnichannel_subscription_item']) : null,
        isset($resourceAttributes['omnichannel_subscription_item_scheduled_change']) ? OmnichannelSubscriptionItemScheduledChange::from($resourceAttributes['omnichannel_subscription_item_scheduled_change']) : null,
        isset($resourceAttributes['omnichannel_transaction']) ? OmnichannelTransaction::from($resourceAttributes['omnichannel_transaction']) : null,
        isset($resourceAttributes['order']) ? Order::from($resourceAttributes['order']) : null,
        isset($resourceAttributes['payment_intent']) ? PaymentIntent::from($resourceAttributes['payment_intent']) : null,
        isset($resourceAttributes['payment_reference_number']) ? PaymentReferenceNumber::from($resourceAttributes['payment_reference_number']) : null,
        isset($resourceAttributes['payment_schedule']) ? PaymentSchedule::from($resourceAttributes['payment_schedule']) : null,
        isset($resourceAttributes['payment_schedule_estimate']) ? PaymentScheduleEstimate::from($resourceAttributes['payment_schedule_estimate']) : null,
        isset($resourceAttributes['payment_schedule_scheme']) ? PaymentScheduleScheme::from($resourceAttributes['payment_schedule_scheme']) : null,
        isset($resourceAttributes['payment_source']) ? PaymentSource::from($resourceAttributes['payment_source']) : null,
        isset($resourceAttributes['payment_voucher']) ? PaymentVoucher::from($resourceAttributes['payment_voucher']) : null,
        isset($resourceAttributes['plan']) ? Plan::from($resourceAttributes['plan']) : null,
        isset($resourceAttributes['portal_session']) ? PortalSession::from($resourceAttributes['portal_session']) : null,
        isset($resourceAttributes['price_variant']) ? PriceVariant::from($resourceAttributes['price_variant']) : null,
        isset($resourceAttributes['pricing_page_session']) ? PricingPageSession::from($resourceAttributes['pricing_page_session']) : null,
        isset($resourceAttributes['promotional_credit']) ? PromotionalCredit::from($resourceAttributes['promotional_credit']) : null,
        isset($resourceAttributes['purchase']) ? Purchase::from($resourceAttributes['purchase']) : null,
        isset($resourceAttributes['quote']) ? Quote::from($resourceAttributes['quote']) : null,
        isset($resourceAttributes['quote_line_group']) ? QuoteLineGroup::from($resourceAttributes['quote_line_group']) : null,
        isset($resourceAttributes['quoted_charge']) ? QuotedCharge::from($resourceAttributes['quoted_charge']) : null,
        isset($resourceAttributes['quoted_subscription']) ? QuotedSubscription::from($resourceAttributes['quoted_subscription']) : null,
        isset($resourceAttributes['ramp']) ? Ramp::from($resourceAttributes['ramp']) : null,
        isset($resourceAttributes['recorded_purchase']) ? RecordedPurchase::from($resourceAttributes['recorded_purchase']) : null,
        isset($resourceAttributes['resource_migration']) ? ResourceMigration::from($resourceAttributes['resource_migration']) : null,
        isset($resourceAttributes['rule']) ? Rule::from($resourceAttributes['rule']) : null,
        isset($resourceAttributes['site_migration_detail']) ? SiteMigrationDetail::from($resourceAttributes['site_migration_detail']) : null,
        isset($resourceAttributes['subscription']) ? Subscription::from($resourceAttributes['subscription']) : null,
        isset($resourceAttributes['subscription_entitlement']) ? SubscriptionEntitlement::from($resourceAttributes['subscription_entitlement']) : null,
        isset($resourceAttributes['subscription_estimate']) ? SubscriptionEstimate::from($resourceAttributes['subscription_estimate']) : null,
        isset($resourceAttributes['tax_withheld']) ? TaxWithheld::from($resourceAttributes['tax_withheld']) : null,
        isset($resourceAttributes['third_party_payment_method']) ? ThirdPartyPaymentMethod::from($resourceAttributes['third_party_payment_method']) : null,
        isset($resourceAttributes['time_machine']) ? TimeMachine::from($resourceAttributes['time_machine']) : null,
        isset($resourceAttributes['token']) ? Token::from($resourceAttributes['token']) : null,
        isset($resourceAttributes['transaction']) ? Transaction::from($resourceAttributes['transaction']) : null,
        isset($resourceAttributes['unbilled_charge']) ? UnbilledCharge::from($resourceAttributes['unbilled_charge']) : null,
        isset($resourceAttributes['usage']) ? Usage::from($resourceAttributes['usage']) : null,
        isset($resourceAttributes['usage_event']) ? UsageEvent::from($resourceAttributes['usage_event']) : null,
        isset($resourceAttributes['usage_file']) ? UsageFile::from($resourceAttributes['usage_file']) : null,
        isset($resourceAttributes['virtual_bank_account']) ? VirtualBankAccount::from($resourceAttributes['virtual_bank_account']) : null,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter([
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        ], function ($value) {
            return $value !== null;
        });

        
        if($this->addon instanceof Addon){
            $data['addon'] = $this->addon->toArray();
        }
        if($this->address instanceof Address){
            $data['address'] = $this->address->toArray();
        }
        if($this->advanceinvoiceschedule instanceof AdvanceInvoiceSchedule){
            $data['advance_invoice_schedule'] = $this->advanceinvoiceschedule->toArray();
        }
        if($this->attacheditem instanceof AttachedItem){
            $data['attached_item'] = $this->attacheditem->toArray();
        }
        if($this->attribute instanceof Attribute){
            $data['attribute'] = $this->attribute->toArray();
        }
        if($this->businessentity instanceof BusinessEntity){
            $data['business_entity'] = $this->businessentity->toArray();
        }
        if($this->businessentitytransfer instanceof BusinessEntityTransfer){
            $data['business_entity_transfer'] = $this->businessentitytransfer->toArray();
        }
        if($this->card instanceof Card){
            $data['card'] = $this->card->toArray();
        }
        if($this->comment instanceof Comment){
            $data['comment'] = $this->comment->toArray();
        }
        if($this->configuration instanceof Configuration){
            $data['configuration'] = $this->configuration->toArray();
        }
        if($this->contact instanceof Contact){
            $data['contact'] = $this->contact->toArray();
        }
        if($this->contractterm instanceof ContractTerm){
            $data['contract_term'] = $this->contractterm->toArray();
        }
        if($this->coupon instanceof Coupon){
            $data['coupon'] = $this->coupon->toArray();
        }
        if($this->couponcode instanceof CouponCode){
            $data['coupon_code'] = $this->couponcode->toArray();
        }
        if($this->couponset instanceof CouponSet){
            $data['coupon_set'] = $this->couponset->toArray();
        }
        if($this->creditnote instanceof CreditNote){
            $data['credit_note'] = $this->creditnote->toArray();
        }
        if($this->creditnoteestimate instanceof CreditNoteEstimate){
            $data['credit_note_estimate'] = $this->creditnoteestimate->toArray();
        }
        if($this->currency instanceof Currency){
            $data['currency'] = $this->currency->toArray();
        }
        if($this->customer instanceof Customer){
            $data['customer'] = $this->customer->toArray();
        }
        if($this->customerentitlement instanceof CustomerEntitlement){
            $data['customer_entitlement'] = $this->customerentitlement->toArray();
        }
        if($this->differentialprice instanceof DifferentialPrice){
            $data['differential_price'] = $this->differentialprice->toArray();
        }
        if($this->discount instanceof Discount){
            $data['discount'] = $this->discount->toArray();
        }
        if($this->download instanceof Download){
            $data['download'] = $this->download->toArray();
        }
        if($this->entitlement instanceof Entitlement){
            $data['entitlement'] = $this->entitlement->toArray();
        }
        if($this->entitlementoverride instanceof EntitlementOverride){
            $data['entitlement_override'] = $this->entitlementoverride->toArray();
        }
        if($this->estimate instanceof Estimate){
            $data['estimate'] = $this->estimate->toArray();
        }
        if($this->event instanceof Event){
            $data['event'] = $this->event->toArray();
        }
        if($this->export instanceof Export){
            $data['export'] = $this->export->toArray();
        }
        if($this->feature instanceof Feature){
            $data['feature'] = $this->feature->toArray();
        }
        if($this->gatewayerrordetail instanceof GatewayErrorDetail){
            $data['gateway_error_detail'] = $this->gatewayerrordetail->toArray();
        }
        if($this->gift instanceof Gift){
            $data['gift'] = $this->gift->toArray();
        }
        if($this->hierarchy instanceof Hierarchy){
            $data['hierarchy'] = $this->hierarchy->toArray();
        }
        if($this->hostedpage instanceof HostedPage){
            $data['hosted_page'] = $this->hostedpage->toArray();
        }
        if($this->impacteditem instanceof ImpactedItem){
            $data['impacted_item'] = $this->impacteditem->toArray();
        }
        if($this->impacteditemprice instanceof ImpactedItemPrice){
            $data['impacted_item_price'] = $this->impacteditemprice->toArray();
        }
        if($this->impactedsubscription instanceof ImpactedSubscription){
            $data['impacted_subscription'] = $this->impactedsubscription->toArray();
        }
        if($this->inappsubscription instanceof InAppSubscription){
            $data['in_app_subscription'] = $this->inappsubscription->toArray();
        }
        if($this->invoice instanceof Invoice){
            $data['invoice'] = $this->invoice->toArray();
        }
        if($this->invoiceestimate instanceof InvoiceEstimate){
            $data['invoice_estimate'] = $this->invoiceestimate->toArray();
        }
        if($this->item instanceof Item){
            $data['item'] = $this->item->toArray();
        }
        if($this->itementitlement instanceof ItemEntitlement){
            $data['item_entitlement'] = $this->itementitlement->toArray();
        }
        if($this->itemfamily instanceof ItemFamily){
            $data['item_family'] = $this->itemfamily->toArray();
        }
        if($this->itemprice instanceof ItemPrice){
            $data['item_price'] = $this->itemprice->toArray();
        }
        if($this->metadata instanceof Metadata){
            $data['metadata'] = $this->metadata->toArray();
        }
        if($this->nonsubscription instanceof NonSubscription){
            $data['non_subscription'] = $this->nonsubscription->toArray();
        }
        if($this->omnichannelsubscription instanceof OmnichannelSubscription){
            $data['omnichannel_subscription'] = $this->omnichannelsubscription->toArray();
        }
        if($this->omnichannelsubscriptionitem instanceof OmnichannelSubscriptionItem){
            $data['omnichannel_subscription_item'] = $this->omnichannelsubscriptionitem->toArray();
        }
        if($this->omnichannelsubscriptionitemscheduledchange instanceof OmnichannelSubscriptionItemScheduledChange){
            $data['omnichannel_subscription_item_scheduled_change'] = $this->omnichannelsubscriptionitemscheduledchange->toArray();
        }
        if($this->omnichanneltransaction instanceof OmnichannelTransaction){
            $data['omnichannel_transaction'] = $this->omnichanneltransaction->toArray();
        }
        if($this->order instanceof Order){
            $data['order'] = $this->order->toArray();
        }
        if($this->paymentintent instanceof PaymentIntent){
            $data['payment_intent'] = $this->paymentintent->toArray();
        }
        if($this->paymentreferencenumber instanceof PaymentReferenceNumber){
            $data['payment_reference_number'] = $this->paymentreferencenumber->toArray();
        }
        if($this->paymentschedule instanceof PaymentSchedule){
            $data['payment_schedule'] = $this->paymentschedule->toArray();
        }
        if($this->paymentscheduleestimate instanceof PaymentScheduleEstimate){
            $data['payment_schedule_estimate'] = $this->paymentscheduleestimate->toArray();
        }
        if($this->paymentschedulescheme instanceof PaymentScheduleScheme){
            $data['payment_schedule_scheme'] = $this->paymentschedulescheme->toArray();
        }
        if($this->paymentsource instanceof PaymentSource){
            $data['payment_source'] = $this->paymentsource->toArray();
        }
        if($this->paymentvoucher instanceof PaymentVoucher){
            $data['payment_voucher'] = $this->paymentvoucher->toArray();
        }
        if($this->plan instanceof Plan){
            $data['plan'] = $this->plan->toArray();
        }
        if($this->portalsession instanceof PortalSession){
            $data['portal_session'] = $this->portalsession->toArray();
        }
        if($this->pricevariant instanceof PriceVariant){
            $data['price_variant'] = $this->pricevariant->toArray();
        }
        if($this->pricingpagesession instanceof PricingPageSession){
            $data['pricing_page_session'] = $this->pricingpagesession->toArray();
        }
        if($this->promotionalcredit instanceof PromotionalCredit){
            $data['promotional_credit'] = $this->promotionalcredit->toArray();
        }
        if($this->purchase instanceof Purchase){
            $data['purchase'] = $this->purchase->toArray();
        }
        if($this->quote instanceof Quote){
            $data['quote'] = $this->quote->toArray();
        }
        if($this->quotelinegroup instanceof QuoteLineGroup){
            $data['quote_line_group'] = $this->quotelinegroup->toArray();
        }
        if($this->quotedcharge instanceof QuotedCharge){
            $data['quoted_charge'] = $this->quotedcharge->toArray();
        }
        if($this->quotedsubscription instanceof QuotedSubscription){
            $data['quoted_subscription'] = $this->quotedsubscription->toArray();
        }
        if($this->ramp instanceof Ramp){
            $data['ramp'] = $this->ramp->toArray();
        }
        if($this->recordedpurchase instanceof RecordedPurchase){
            $data['recorded_purchase'] = $this->recordedpurchase->toArray();
        }
        if($this->resourcemigration instanceof ResourceMigration){
            $data['resource_migration'] = $this->resourcemigration->toArray();
        }
        if($this->rule instanceof Rule){
            $data['rule'] = $this->rule->toArray();
        }
        if($this->sitemigrationdetail instanceof SiteMigrationDetail){
            $data['site_migration_detail'] = $this->sitemigrationdetail->toArray();
        }
        if($this->subscription instanceof Subscription){
            $data['subscription'] = $this->subscription->toArray();
        }
        if($this->subscriptionentitlement instanceof SubscriptionEntitlement){
            $data['subscription_entitlement'] = $this->subscriptionentitlement->toArray();
        }
        if($this->subscriptionestimate instanceof SubscriptionEstimate){
            $data['subscription_estimate'] = $this->subscriptionestimate->toArray();
        }
        if($this->taxwithheld instanceof TaxWithheld){
            $data['tax_withheld'] = $this->taxwithheld->toArray();
        }
        if($this->thirdpartypaymentmethod instanceof ThirdPartyPaymentMethod){
            $data['third_party_payment_method'] = $this->thirdpartypaymentmethod->toArray();
        }
        if($this->timemachine instanceof TimeMachine){
            $data['time_machine'] = $this->timemachine->toArray();
        }
        if($this->token instanceof Token){
            $data['token'] = $this->token->toArray();
        }
        if($this->transaction instanceof Transaction){
            $data['transaction'] = $this->transaction->toArray();
        }
        if($this->unbilledcharge instanceof UnbilledCharge){
            $data['unbilled_charge'] = $this->unbilledcharge->toArray();
        }
        if($this->usage instanceof Usage){
            $data['usage'] = $this->usage->toArray();
        }
        if($this->usageevent instanceof UsageEvent){
            $data['usage_event'] = $this->usageevent->toArray();
        }
        if($this->usagefile instanceof UsageFile){
            $data['usage_file'] = $this->usagefile->toArray();
        }
        if($this->virtualbankaccount instanceof VirtualBankAccount){
            $data['virtual_bank_account'] = $this->virtualbankaccount->toArray();
        }
        

        
        return $data;
    }
}
?>