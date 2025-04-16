<?php

namespace Chargebee\Resources\QuotedSubscription;

class QuotedSubscription  { 
    /**
    *
    * @var string $id
    */
    public string $id;
    
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
    * @var ?int $changes_scheduled_at
    */
    public ?int $changes_scheduled_at;
    
    /**
    *
    * @var ?int $contract_term_billing_cycle_on_renewal
    */
    public ?int $contract_term_billing_cycle_on_renewal;
    
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
    * @var ?array<Coupon> $coupons
    */
    public ?array $coupons;
    
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
    * @var ?QuotedContractTerm $quoted_contract_term
    */
    public ?QuotedContractTerm $quoted_contract_term;
    
    /**
    *
    * @var ?\Chargebee\Enums\AutoCollection $auto_collection
    */
    public ?\Chargebee\Enums\AutoCollection $auto_collection;
    
    /**
    *
    * @var ?\Chargebee\Resources\QuotedSubscription\Enums\BillingPeriodUnit $billing_period_unit
    */
    public ?\Chargebee\Resources\QuotedSubscription\Enums\BillingPeriodUnit $billing_period_unit;
    
    /**
    *
    * @var ?\Chargebee\Resources\QuotedSubscription\Enums\ChangeOption $change_option
    */
    public ?\Chargebee\Resources\QuotedSubscription\Enums\ChangeOption $change_option;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "plan_id" , "plan_quantity" , "plan_unit_price" , "setup_fee" , "billing_period" , "start_date" , "trial_end" , "remaining_billing_cycles" , "po_number" , "plan_quantity_in_decimal" , "plan_unit_price_in_decimal" , "changes_scheduled_at" , "contract_term_billing_cycle_on_renewal" , "addons" , "event_based_addons" , "coupons" , "subscription_items" , "item_tiers" , "quoted_contract_term"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        string $id,
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
        ?int $changes_scheduled_at,
        ?int $contract_term_billing_cycle_on_renewal,
        ?array $addons,
        ?array $event_based_addons,
        ?array $coupons,
        ?array $subscription_items,
        ?array $item_tiers,
        ?QuotedContractTerm $quoted_contract_term,
        ?\Chargebee\Enums\AutoCollection $auto_collection,
        ?\Chargebee\Resources\QuotedSubscription\Enums\BillingPeriodUnit $billing_period_unit,
        ?\Chargebee\Resources\QuotedSubscription\Enums\ChangeOption $change_option,
    )
    { 
        $this->id = $id;
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
        $this->changes_scheduled_at = $changes_scheduled_at;
        $this->contract_term_billing_cycle_on_renewal = $contract_term_billing_cycle_on_renewal;
        $this->addons = $addons;
        $this->event_based_addons = $event_based_addons;
        $this->coupons = $coupons;
        $this->subscription_items = $subscription_items;
        $this->item_tiers = $item_tiers;
        $this->quoted_contract_term = $quoted_contract_term; 
        $this->auto_collection = $auto_collection; 
        $this->billing_period_unit = $billing_period_unit;
        $this->change_option = $change_option;
    }

    public static function from(array $resourceAttributes): self
    { 
        $addons = array_map(fn (array $result): Addon =>  Addon::from(
            $result
        ), $resourceAttributes['addons'] ?? []);
        
        $event_based_addons = array_map(fn (array $result): EventBasedAddon =>  EventBasedAddon::from(
            $result
        ), $resourceAttributes['event_based_addons'] ?? []);
        
        $coupons = array_map(fn (array $result): Coupon =>  Coupon::from(
            $result
        ), $resourceAttributes['coupons'] ?? []);
        
        $subscription_items = array_map(fn (array $result): SubscriptionItem =>  SubscriptionItem::from(
            $result
        ), $resourceAttributes['subscription_items'] ?? []);
        
        $item_tiers = array_map(fn (array $result): ItemTier =>  ItemTier::from(
            $result
        ), $resourceAttributes['item_tiers'] ?? []);
        
        $returnData = new self( $resourceAttributes['id'] ,
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
        $resourceAttributes['changes_scheduled_at'] ?? null,
        $resourceAttributes['contract_term_billing_cycle_on_renewal'] ?? null,
        $addons,
        $event_based_addons,
        $coupons,
        $subscription_items,
        $item_tiers,
        isset($resourceAttributes['quoted_contract_term']) ? QuotedContractTerm::from($resourceAttributes['quoted_contract_term']) : null,
        
        
        isset($resourceAttributes['auto_collection']) ? \Chargebee\Enums\AutoCollection::tryFromValue($resourceAttributes['auto_collection']) : null,
         
        isset($resourceAttributes['billing_period_unit']) ? \Chargebee\Resources\QuotedSubscription\Enums\BillingPeriodUnit::tryFromValue($resourceAttributes['billing_period_unit']) : null,
        
        isset($resourceAttributes['change_option']) ? \Chargebee\Resources\QuotedSubscription\Enums\ChangeOption::tryFromValue($resourceAttributes['change_option']) : null,
        
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['id' => $this->id,
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
        'changes_scheduled_at' => $this->changes_scheduled_at,
        'contract_term_billing_cycle_on_renewal' => $this->contract_term_billing_cycle_on_renewal,
        
        
        
        
        
        
        
        'auto_collection' => $this->auto_collection?->value,
        
        'billing_period_unit' => $this->billing_period_unit?->value,
        
        'change_option' => $this->change_option?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        if($this->quoted_contract_term instanceof QuotedContractTerm){
            $data['quoted_contract_term'] = $this->quoted_contract_term->toArray();
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
        if($this->coupons !== []){
            $data['coupons'] = array_map(
                fn (Coupon $coupons): array => $coupons->toArray(),
                $this->coupons
            );
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

        
        return $data;
    }
}
?>