<?php

namespace Chargebee\Resources\Subscription;

use Chargebee\ValueObjects\SupportsCustomFields;
class Subscription  extends SupportsCustomFields  { 
    /**
    *
    * @var string $id
    */
    public string $id;
    
    /**
    *
    * @var string $currency_code
    */
    public string $currency_code;
    
    /**
    *
    * @var ?string $plan_id
    */
    public ?string $plan_id;
    
    /**
    *
    * @var ?int $plan_quantity
    */
    public ?int $plan_quantity;
    
    /**
    *
    * @var ?int $plan_unit_price
    */
    public ?int $plan_unit_price;
    
    /**
    *
    * @var ?int $setup_fee
    */
    public ?int $setup_fee;
    
    /**
    *
    * @var ?int $billing_period
    */
    public ?int $billing_period;
    
    /**
    *
    * @var ?int $start_date
    */
    public ?int $start_date;
    
    /**
    *
    * @var ?int $trial_end
    */
    public ?int $trial_end;
    
    /**
    *
    * @var ?int $remaining_billing_cycles
    */
    public ?int $remaining_billing_cycles;
    
    /**
    *
    * @var ?string $po_number
    */
    public ?string $po_number;
    
    /**
    *
    * @var ?string $plan_quantity_in_decimal
    */
    public ?string $plan_quantity_in_decimal;
    
    /**
    *
    * @var ?string $plan_unit_price_in_decimal
    */
    public ?string $plan_unit_price_in_decimal;
    
    /**
    *
    * @var string $customer_id
    */
    public string $customer_id;
    
    /**
    *
    * @var ?int $plan_amount
    */
    public ?int $plan_amount;
    
    /**
    *
    * @var ?int $plan_free_quantity
    */
    public ?int $plan_free_quantity;
    
    /**
    *
    * @var ?int $trial_start
    */
    public ?int $trial_start;
    
    /**
    *
    * @var ?int $current_term_start
    */
    public ?int $current_term_start;
    
    /**
    *
    * @var ?int $current_term_end
    */
    public ?int $current_term_end;
    
    /**
    *
    * @var ?int $next_billing_at
    */
    public ?int $next_billing_at;
    
    /**
    *
    * @var ?int $created_at
    */
    public ?int $created_at;
    
    /**
    *
    * @var ?int $started_at
    */
    public ?int $started_at;
    
    /**
    *
    * @var ?int $activated_at
    */
    public ?int $activated_at;
    
    /**
    *
    * @var ?string $gift_id
    */
    public ?string $gift_id;
    
    /**
    *
    * @var ?int $contract_term_billing_cycle_on_renewal
    */
    public ?int $contract_term_billing_cycle_on_renewal;
    
    /**
    *
    * @var ?bool $override_relationship
    */
    public ?bool $override_relationship;
    
    /**
    *
    * @var ?int $pause_date
    */
    public ?int $pause_date;
    
    /**
    *
    * @var ?int $resume_date
    */
    public ?int $resume_date;
    
    /**
    *
    * @var ?int $cancelled_at
    */
    public ?int $cancelled_at;
    
    /**
    *
    * @var ?string $affiliate_token
    */
    public ?string $affiliate_token;
    
    /**
    *
    * @var ?string $created_from_ip
    */
    public ?string $created_from_ip;
    
    /**
    *
    * @var ?int $resource_version
    */
    public ?int $resource_version;
    
    /**
    *
    * @var ?int $updated_at
    */
    public ?int $updated_at;
    
    /**
    *
    * @var bool $has_scheduled_advance_invoices
    */
    public bool $has_scheduled_advance_invoices;
    
    /**
    *
    * @var bool $has_scheduled_changes
    */
    public bool $has_scheduled_changes;
    
    /**
    *
    * @var ?string $payment_source_id
    */
    public ?string $payment_source_id;
    
    /**
    *
    * @var ?string $plan_free_quantity_in_decimal
    */
    public ?string $plan_free_quantity_in_decimal;
    
    /**
    *
    * @var ?string $plan_amount_in_decimal
    */
    public ?string $plan_amount_in_decimal;
    
    /**
    *
    * @var ?int $cancel_schedule_created_at
    */
    public ?int $cancel_schedule_created_at;
    
    /**
    *
    * @var ?int $net_term_days
    */
    public ?int $net_term_days;
    
    /**
    *
    * @var ?string $active_id
    */
    public ?string $active_id;
    
    /**
    *
    * @var ?array<SubscriptionItem> $subscription_items
    */
    public ?array $subscription_items;
    
    /**
    *
    * @var ?array<ItemTier> $item_tiers
    */
    public ?array $item_tiers;
    
    /**
    *
    * @var ?array<ChargedItem> $charged_items
    */
    public ?array $charged_items;
    
    /**
    *
    * @var ?int $due_invoices_count
    */
    public ?int $due_invoices_count;
    
    /**
    *
    * @var ?int $due_since
    */
    public ?int $due_since;
    
    /**
    *
    * @var ?int $total_dues
    */
    public ?int $total_dues;
    
    /**
    *
    * @var ?int $mrr
    */
    public ?int $mrr;
    
    /**
    *
    * @var ?int $arr
    */
    public ?int $arr;
    
    /**
    *
    * @var ?int $exchange_rate
    */
    public ?int $exchange_rate;
    
    /**
    *
    * @var ?string $base_currency_code
    */
    public ?string $base_currency_code;
    
    /**
    *
    * @var ?array<Addon> $addons
    */
    public ?array $addons;
    
    /**
    *
    * @var ?array<EventBasedAddon> $event_based_addons
    */
    public ?array $event_based_addons;
    
    /**
    *
    * @var ?array<ChargedEventBasedAddon> $charged_event_based_addons
    */
    public ?array $charged_event_based_addons;
    
    /**
    *
    * @var ?string $coupon
    */
    public ?string $coupon;
    
    /**
    *
    * @var ?array<Coupon> $coupons
    */
    public ?array $coupons;
    
    /**
    *
    * @var ?ShippingAddress $shipping_address
    */
    public ?ShippingAddress $shipping_address;
    
    /**
    *
    * @var ?ReferralInfo $referral_info
    */
    public ?ReferralInfo $referral_info;
    
    /**
    *
    * @var ?BillingOverride $billing_override
    */
    public ?BillingOverride $billing_override;
    
    /**
    *
    * @var ?string $invoice_notes
    */
    public ?string $invoice_notes;
    
    /**
    *
    * @var mixed $meta_data
    */
    public mixed $meta_data;
    
    /**
    *
    * @var bool $deleted
    */
    public bool $deleted;
    
    /**
    *
    * @var ?int $changes_scheduled_at
    */
    public ?int $changes_scheduled_at;
    
    /**
    *
    * @var ?ContractTerm $contract_term
    */
    public ?ContractTerm $contract_term;
    
    /**
    *
    * @var ?string $cancel_reason_code
    */
    public ?string $cancel_reason_code;
    
    /**
    *
    * @var ?int $free_period
    */
    public ?int $free_period;
    
    /**
    *
    * @var ?bool $create_pending_invoices
    */
    public ?bool $create_pending_invoices;
    
    /**
    *
    * @var ?bool $auto_close_invoices
    */
    public ?bool $auto_close_invoices;
    
    /**
    *
    * @var ?array<Discount> $discounts
    */
    public ?array $discounts;
    
    /**
    *
    * @var ?string $business_entity_id
    */
    public ?string $business_entity_id;
    
    /**
    *
    * @var ?\Chargebee\Enums\AutoCollection $auto_collection
    */
    public ?\Chargebee\Enums\AutoCollection $auto_collection;
    
    /**
    *
    * @var ?\Chargebee\Enums\TrialEndAction $trial_end_action
    */
    public ?\Chargebee\Enums\TrialEndAction $trial_end_action;
    
    /**
    *
    * @var ?\Chargebee\Enums\OfflinePaymentMethod $offline_payment_method
    */
    public ?\Chargebee\Enums\OfflinePaymentMethod $offline_payment_method;
    
    /**
    *
    * @var ?\Chargebee\Enums\Channel $channel
    */
    public ?\Chargebee\Enums\Channel $channel;
    
    /**
    *
    * @var ?\Chargebee\Enums\FreePeriodUnit $free_period_unit
    */
    public ?\Chargebee\Enums\FreePeriodUnit $free_period_unit;
    
    /**
    *
    * @var ?\Chargebee\Resources\Subscription\Enums\BillingPeriodUnit $billing_period_unit
    */
    public ?\Chargebee\Resources\Subscription\Enums\BillingPeriodUnit $billing_period_unit;
    
    /**
    *
    * @var \Chargebee\Resources\Subscription\Enums\Status $status
    */
    public \Chargebee\Resources\Subscription\Enums\Status $status;
    
    /**
    *
    * @var ?\Chargebee\Resources\Subscription\Enums\CancelReason $cancel_reason
    */
    public ?\Chargebee\Resources\Subscription\Enums\CancelReason $cancel_reason;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "currency_code" , "plan_id" , "plan_quantity" , "plan_unit_price" , "setup_fee" , "billing_period" , "start_date" , "trial_end" , "remaining_billing_cycles" , "po_number" , "plan_quantity_in_decimal" , "plan_unit_price_in_decimal" , "customer_id" , "plan_amount" , "plan_free_quantity" , "trial_start" , "current_term_start" , "current_term_end" , "next_billing_at" , "created_at" , "started_at" , "activated_at" , "gift_id" , "contract_term_billing_cycle_on_renewal" , "override_relationship" , "pause_date" , "resume_date" , "cancelled_at" , "affiliate_token" , "created_from_ip" , "resource_version" , "updated_at" , "has_scheduled_advance_invoices" , "has_scheduled_changes" , "payment_source_id" , "plan_free_quantity_in_decimal" , "plan_amount_in_decimal" , "cancel_schedule_created_at" , "net_term_days" , "active_id" , "subscription_items" , "item_tiers" , "charged_items" , "due_invoices_count" , "due_since" , "total_dues" , "mrr" , "arr" , "exchange_rate" , "base_currency_code" , "addons" , "event_based_addons" , "charged_event_based_addons" , "coupon" , "coupons" , "shipping_address" , "referral_info" , "billing_override" , "invoice_notes" , "meta_data" , "deleted" , "changes_scheduled_at" , "contract_term" , "cancel_reason_code" , "free_period" , "create_pending_invoices" , "auto_close_invoices" , "discounts" , "business_entity_id"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        string $id,
        string $currency_code,
        ?string $plan_id,
        ?int $plan_quantity,
        ?int $plan_unit_price,
        ?int $setup_fee,
        ?int $billing_period,
        ?int $start_date,
        ?int $trial_end,
        ?int $remaining_billing_cycles,
        ?string $po_number,
        ?string $plan_quantity_in_decimal,
        ?string $plan_unit_price_in_decimal,
        string $customer_id,
        ?int $plan_amount,
        ?int $plan_free_quantity,
        ?int $trial_start,
        ?int $current_term_start,
        ?int $current_term_end,
        ?int $next_billing_at,
        ?int $created_at,
        ?int $started_at,
        ?int $activated_at,
        ?string $gift_id,
        ?int $contract_term_billing_cycle_on_renewal,
        ?bool $override_relationship,
        ?int $pause_date,
        ?int $resume_date,
        ?int $cancelled_at,
        ?string $affiliate_token,
        ?string $created_from_ip,
        ?int $resource_version,
        ?int $updated_at,
        bool $has_scheduled_advance_invoices,
        bool $has_scheduled_changes,
        ?string $payment_source_id,
        ?string $plan_free_quantity_in_decimal,
        ?string $plan_amount_in_decimal,
        ?int $cancel_schedule_created_at,
        ?int $net_term_days,
        ?string $active_id,
        ?array $subscription_items,
        ?array $item_tiers,
        ?array $charged_items,
        ?int $due_invoices_count,
        ?int $due_since,
        ?int $total_dues,
        ?int $mrr,
        ?int $arr,
        ?int $exchange_rate,
        ?string $base_currency_code,
        ?array $addons,
        ?array $event_based_addons,
        ?array $charged_event_based_addons,
        ?string $coupon,
        ?array $coupons,
        ?ShippingAddress $shipping_address,
        ?ReferralInfo $referral_info,
        ?BillingOverride $billing_override,
        ?string $invoice_notes,
        mixed $meta_data,
        bool $deleted,
        ?int $changes_scheduled_at,
        ?ContractTerm $contract_term,
        ?string $cancel_reason_code,
        ?int $free_period,
        ?bool $create_pending_invoices,
        ?bool $auto_close_invoices,
        ?array $discounts,
        ?string $business_entity_id,
        ?\Chargebee\Enums\AutoCollection $auto_collection,
        ?\Chargebee\Enums\TrialEndAction $trial_end_action,
        ?\Chargebee\Enums\OfflinePaymentMethod $offline_payment_method,
        ?\Chargebee\Enums\Channel $channel,
        ?\Chargebee\Enums\FreePeriodUnit $free_period_unit,
        ?\Chargebee\Resources\Subscription\Enums\BillingPeriodUnit $billing_period_unit,
        \Chargebee\Resources\Subscription\Enums\Status $status,
        ?\Chargebee\Resources\Subscription\Enums\CancelReason $cancel_reason,
    )
    { 
        $this->id = $id;
        $this->currency_code = $currency_code;
        $this->plan_id = $plan_id;
        $this->plan_quantity = $plan_quantity;
        $this->plan_unit_price = $plan_unit_price;
        $this->setup_fee = $setup_fee;
        $this->billing_period = $billing_period;
        $this->start_date = $start_date;
        $this->trial_end = $trial_end;
        $this->remaining_billing_cycles = $remaining_billing_cycles;
        $this->po_number = $po_number;
        $this->plan_quantity_in_decimal = $plan_quantity_in_decimal;
        $this->plan_unit_price_in_decimal = $plan_unit_price_in_decimal;
        $this->customer_id = $customer_id;
        $this->plan_amount = $plan_amount;
        $this->plan_free_quantity = $plan_free_quantity;
        $this->trial_start = $trial_start;
        $this->current_term_start = $current_term_start;
        $this->current_term_end = $current_term_end;
        $this->next_billing_at = $next_billing_at;
        $this->created_at = $created_at;
        $this->started_at = $started_at;
        $this->activated_at = $activated_at;
        $this->gift_id = $gift_id;
        $this->contract_term_billing_cycle_on_renewal = $contract_term_billing_cycle_on_renewal;
        $this->override_relationship = $override_relationship;
        $this->pause_date = $pause_date;
        $this->resume_date = $resume_date;
        $this->cancelled_at = $cancelled_at;
        $this->affiliate_token = $affiliate_token;
        $this->created_from_ip = $created_from_ip;
        $this->resource_version = $resource_version;
        $this->updated_at = $updated_at;
        $this->has_scheduled_advance_invoices = $has_scheduled_advance_invoices;
        $this->has_scheduled_changes = $has_scheduled_changes;
        $this->payment_source_id = $payment_source_id;
        $this->plan_free_quantity_in_decimal = $plan_free_quantity_in_decimal;
        $this->plan_amount_in_decimal = $plan_amount_in_decimal;
        $this->cancel_schedule_created_at = $cancel_schedule_created_at;
        $this->net_term_days = $net_term_days;
        $this->active_id = $active_id;
        $this->subscription_items = $subscription_items;
        $this->item_tiers = $item_tiers;
        $this->charged_items = $charged_items;
        $this->due_invoices_count = $due_invoices_count;
        $this->due_since = $due_since;
        $this->total_dues = $total_dues;
        $this->mrr = $mrr;
        $this->arr = $arr;
        $this->exchange_rate = $exchange_rate;
        $this->base_currency_code = $base_currency_code;
        $this->addons = $addons;
        $this->event_based_addons = $event_based_addons;
        $this->charged_event_based_addons = $charged_event_based_addons;
        $this->coupon = $coupon;
        $this->coupons = $coupons;
        $this->shipping_address = $shipping_address;
        $this->referral_info = $referral_info;
        $this->billing_override = $billing_override;
        $this->invoice_notes = $invoice_notes;
        $this->meta_data = $meta_data;
        $this->deleted = $deleted;
        $this->changes_scheduled_at = $changes_scheduled_at;
        $this->contract_term = $contract_term;
        $this->cancel_reason_code = $cancel_reason_code;
        $this->free_period = $free_period;
        $this->create_pending_invoices = $create_pending_invoices;
        $this->auto_close_invoices = $auto_close_invoices;
        $this->discounts = $discounts;
        $this->business_entity_id = $business_entity_id; 
        $this->auto_collection = $auto_collection;
        $this->trial_end_action = $trial_end_action;
        $this->offline_payment_method = $offline_payment_method;
        $this->channel = $channel;
        $this->free_period_unit = $free_period_unit; 
        $this->billing_period_unit = $billing_period_unit;
        $this->status = $status;
        $this->cancel_reason = $cancel_reason;
    }

    public static function from(array $resourceAttributes): self
    { 
        $subscription_items = array_map(fn (array $result): SubscriptionItem =>  SubscriptionItem::from(
            $result
        ), $resourceAttributes['subscription_items'] ?? []);
        
        $item_tiers = array_map(fn (array $result): ItemTier =>  ItemTier::from(
            $result
        ), $resourceAttributes['item_tiers'] ?? []);
        
        $charged_items = array_map(fn (array $result): ChargedItem =>  ChargedItem::from(
            $result
        ), $resourceAttributes['charged_items'] ?? []);
        
        $addons = array_map(fn (array $result): Addon =>  Addon::from(
            $result
        ), $resourceAttributes['addons'] ?? []);
        
        $event_based_addons = array_map(fn (array $result): EventBasedAddon =>  EventBasedAddon::from(
            $result
        ), $resourceAttributes['event_based_addons'] ?? []);
        
        $charged_event_based_addons = array_map(fn (array $result): ChargedEventBasedAddon =>  ChargedEventBasedAddon::from(
            $result
        ), $resourceAttributes['charged_event_based_addons'] ?? []);
        
        $coupons = array_map(fn (array $result): Coupon =>  Coupon::from(
            $result
        ), $resourceAttributes['coupons'] ?? []);
        
        $discounts = array_map(fn (array $result): Discount =>  Discount::from(
            $result
        ), $resourceAttributes['discounts'] ?? []);
        
        $returnData = new self( $resourceAttributes['id'] ,
        $resourceAttributes['currency_code'] ,
        $resourceAttributes['plan_id'] ?? null,
        $resourceAttributes['plan_quantity'] ?? null,
        $resourceAttributes['plan_unit_price'] ?? null,
        $resourceAttributes['setup_fee'] ?? null,
        $resourceAttributes['billing_period'] ?? null,
        $resourceAttributes['start_date'] ?? null,
        $resourceAttributes['trial_end'] ?? null,
        $resourceAttributes['remaining_billing_cycles'] ?? null,
        $resourceAttributes['po_number'] ?? null,
        $resourceAttributes['plan_quantity_in_decimal'] ?? null,
        $resourceAttributes['plan_unit_price_in_decimal'] ?? null,
        $resourceAttributes['customer_id'] ,
        $resourceAttributes['plan_amount'] ?? null,
        $resourceAttributes['plan_free_quantity'] ?? null,
        $resourceAttributes['trial_start'] ?? null,
        $resourceAttributes['current_term_start'] ?? null,
        $resourceAttributes['current_term_end'] ?? null,
        $resourceAttributes['next_billing_at'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['started_at'] ?? null,
        $resourceAttributes['activated_at'] ?? null,
        $resourceAttributes['gift_id'] ?? null,
        $resourceAttributes['contract_term_billing_cycle_on_renewal'] ?? null,
        $resourceAttributes['override_relationship'] ?? null,
        $resourceAttributes['pause_date'] ?? null,
        $resourceAttributes['resume_date'] ?? null,
        $resourceAttributes['cancelled_at'] ?? null,
        $resourceAttributes['affiliate_token'] ?? null,
        $resourceAttributes['created_from_ip'] ?? null,
        $resourceAttributes['resource_version'] ?? null,
        $resourceAttributes['updated_at'] ?? null,
        $resourceAttributes['has_scheduled_advance_invoices'] ,
        $resourceAttributes['has_scheduled_changes'] ,
        $resourceAttributes['payment_source_id'] ?? null,
        $resourceAttributes['plan_free_quantity_in_decimal'] ?? null,
        $resourceAttributes['plan_amount_in_decimal'] ?? null,
        $resourceAttributes['cancel_schedule_created_at'] ?? null,
        $resourceAttributes['net_term_days'] ?? null,
        $resourceAttributes['active_id'] ?? null,
        $subscription_items,
        $item_tiers,
        $charged_items,
        $resourceAttributes['due_invoices_count'] ?? null,
        $resourceAttributes['due_since'] ?? null,
        $resourceAttributes['total_dues'] ?? null,
        $resourceAttributes['mrr'] ?? null,
        $resourceAttributes['arr'] ?? null,
        $resourceAttributes['exchange_rate'] ?? null,
        $resourceAttributes['base_currency_code'] ?? null,
        $addons,
        $event_based_addons,
        $charged_event_based_addons,
        $resourceAttributes['coupon'] ?? null,
        $coupons,
        isset($resourceAttributes['shipping_address']) ? ShippingAddress::from($resourceAttributes['shipping_address']) : null,
        isset($resourceAttributes['referral_info']) ? ReferralInfo::from($resourceAttributes['referral_info']) : null,
        isset($resourceAttributes['billing_override']) ? BillingOverride::from($resourceAttributes['billing_override']) : null,
        $resourceAttributes['invoice_notes'] ?? null,
        $resourceAttributes['meta_data'] ?? null,
        $resourceAttributes['deleted'] ,
        $resourceAttributes['changes_scheduled_at'] ?? null,
        isset($resourceAttributes['contract_term']) ? ContractTerm::from($resourceAttributes['contract_term']) : null,
        $resourceAttributes['cancel_reason_code'] ?? null,
        $resourceAttributes['free_period'] ?? null,
        $resourceAttributes['create_pending_invoices'] ?? null,
        $resourceAttributes['auto_close_invoices'] ?? null,
        $discounts,
        $resourceAttributes['business_entity_id'] ?? null,
        
        
        isset($resourceAttributes['auto_collection']) ? \Chargebee\Enums\AutoCollection::tryFromValue($resourceAttributes['auto_collection']) : null,
        
        isset($resourceAttributes['trial_end_action']) ? \Chargebee\Enums\TrialEndAction::tryFromValue($resourceAttributes['trial_end_action']) : null,
        
        isset($resourceAttributes['offline_payment_method']) ? \Chargebee\Enums\OfflinePaymentMethod::tryFromValue($resourceAttributes['offline_payment_method']) : null,
        
        isset($resourceAttributes['channel']) ? \Chargebee\Enums\Channel::tryFromValue($resourceAttributes['channel']) : null,
        
        isset($resourceAttributes['free_period_unit']) ? \Chargebee\Enums\FreePeriodUnit::tryFromValue($resourceAttributes['free_period_unit']) : null,
         
        isset($resourceAttributes['billing_period_unit']) ? \Chargebee\Resources\Subscription\Enums\BillingPeriodUnit::tryFromValue($resourceAttributes['billing_period_unit']) : null,
        
        isset($resourceAttributes['status']) ? \Chargebee\Resources\Subscription\Enums\Status::tryFromValue($resourceAttributes['status']) : null,
        
        isset($resourceAttributes['cancel_reason']) ? \Chargebee\Resources\Subscription\Enums\CancelReason::tryFromValue($resourceAttributes['cancel_reason']) : null,
        
        );
       foreach ($resourceAttributes as $key => $value) {
            if (!in_array($key, $returnData::$knownFields, true)) {
                $returnData->__set($key, $value);
            }
        } 
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['id' => $this->id,
        'currency_code' => $this->currency_code,
        'plan_id' => $this->plan_id,
        'plan_quantity' => $this->plan_quantity,
        'plan_unit_price' => $this->plan_unit_price,
        'setup_fee' => $this->setup_fee,
        'billing_period' => $this->billing_period,
        'start_date' => $this->start_date,
        'trial_end' => $this->trial_end,
        'remaining_billing_cycles' => $this->remaining_billing_cycles,
        'po_number' => $this->po_number,
        'plan_quantity_in_decimal' => $this->plan_quantity_in_decimal,
        'plan_unit_price_in_decimal' => $this->plan_unit_price_in_decimal,
        'customer_id' => $this->customer_id,
        'plan_amount' => $this->plan_amount,
        'plan_free_quantity' => $this->plan_free_quantity,
        'trial_start' => $this->trial_start,
        'current_term_start' => $this->current_term_start,
        'current_term_end' => $this->current_term_end,
        'next_billing_at' => $this->next_billing_at,
        'created_at' => $this->created_at,
        'started_at' => $this->started_at,
        'activated_at' => $this->activated_at,
        'gift_id' => $this->gift_id,
        'contract_term_billing_cycle_on_renewal' => $this->contract_term_billing_cycle_on_renewal,
        'override_relationship' => $this->override_relationship,
        'pause_date' => $this->pause_date,
        'resume_date' => $this->resume_date,
        'cancelled_at' => $this->cancelled_at,
        'affiliate_token' => $this->affiliate_token,
        'created_from_ip' => $this->created_from_ip,
        'resource_version' => $this->resource_version,
        'updated_at' => $this->updated_at,
        'has_scheduled_advance_invoices' => $this->has_scheduled_advance_invoices,
        'has_scheduled_changes' => $this->has_scheduled_changes,
        'payment_source_id' => $this->payment_source_id,
        'plan_free_quantity_in_decimal' => $this->plan_free_quantity_in_decimal,
        'plan_amount_in_decimal' => $this->plan_amount_in_decimal,
        'cancel_schedule_created_at' => $this->cancel_schedule_created_at,
        'net_term_days' => $this->net_term_days,
        'active_id' => $this->active_id,
        
        
        
        'due_invoices_count' => $this->due_invoices_count,
        'due_since' => $this->due_since,
        'total_dues' => $this->total_dues,
        'mrr' => $this->mrr,
        'arr' => $this->arr,
        'exchange_rate' => $this->exchange_rate,
        'base_currency_code' => $this->base_currency_code,
        
        
        
        'coupon' => $this->coupon,
        
        
        
        
        'invoice_notes' => $this->invoice_notes,
        'meta_data' => $this->meta_data,
        'deleted' => $this->deleted,
        'changes_scheduled_at' => $this->changes_scheduled_at,
        
        'cancel_reason_code' => $this->cancel_reason_code,
        'free_period' => $this->free_period,
        'create_pending_invoices' => $this->create_pending_invoices,
        'auto_close_invoices' => $this->auto_close_invoices,
        
        'business_entity_id' => $this->business_entity_id,
        
        'auto_collection' => $this->auto_collection?->value,
        
        'trial_end_action' => $this->trial_end_action?->value,
        
        'offline_payment_method' => $this->offline_payment_method?->value,
        
        'channel' => $this->channel?->value,
        
        'free_period_unit' => $this->free_period_unit?->value,
        
        'billing_period_unit' => $this->billing_period_unit?->value,
        
        'status' => $this->status?->value,
        
        'cancel_reason' => $this->cancel_reason?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        if($this->shipping_address instanceof ShippingAddress){
            $data['shipping_address'] = $this->shipping_address->toArray();
        }
        if($this->referral_info instanceof ReferralInfo){
            $data['referral_info'] = $this->referral_info->toArray();
        }
        if($this->billing_override instanceof BillingOverride){
            $data['billing_override'] = $this->billing_override->toArray();
        }
        if($this->contract_term instanceof ContractTerm){
            $data['contract_term'] = $this->contract_term->toArray();
        }
        
        if($this->subscription_items !== []){
            $data['subscription_items'] = array_map(
                fn (SubscriptionItem $subscription_items): array => $subscription_items->toArray(),
                $this->subscription_items
            );
        }
        if($this->item_tiers !== []){
            $data['item_tiers'] = array_map(
                fn (ItemTier $item_tiers): array => $item_tiers->toArray(),
                $this->item_tiers
            );
        }
        if($this->charged_items !== []){
            $data['charged_items'] = array_map(
                fn (ChargedItem $charged_items): array => $charged_items->toArray(),
                $this->charged_items
            );
        }
        if($this->addons !== []){
            $data['addons'] = array_map(
                fn (Addon $addons): array => $addons->toArray(),
                $this->addons
            );
        }
        if($this->event_based_addons !== []){
            $data['event_based_addons'] = array_map(
                fn (EventBasedAddon $event_based_addons): array => $event_based_addons->toArray(),
                $this->event_based_addons
            );
        }
        if($this->charged_event_based_addons !== []){
            $data['charged_event_based_addons'] = array_map(
                fn (ChargedEventBasedAddon $charged_event_based_addons): array => $charged_event_based_addons->toArray(),
                $this->charged_event_based_addons
            );
        }
        if($this->coupons !== []){
            $data['coupons'] = array_map(
                fn (Coupon $coupons): array => $coupons->toArray(),
                $this->coupons
            );
        }
        if($this->discounts !== []){
            $data['discounts'] = array_map(
                fn (Discount $discounts): array => $discounts->toArray(),
                $this->discounts
            );
        }

        foreach($this->_data as $keys => $value){
            if (!in_array($keys, $this::$knownFields)) {
                $data[$keys] = $value;
            }
        } 
        return $data;
    }
}
?>