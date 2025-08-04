<?php

namespace Chargebee\Resources\Subscription;

class SubscriptionItem  { 
    /**
    *
    * @var ?string $item_price_id
    */
    public ?string $item_price_id;
    
    /**
    *
    * @var ?int $quantity
    */
    public ?int $quantity;
    
    /**
    *
    * @var ?string $quantity_in_decimal
    */
    public ?string $quantity_in_decimal;
    
    /**
    *
    * @var ?string $metered_quantity
    */
    public ?string $metered_quantity;
    
    /**
    *
    * @var ?int $last_calculated_at
    */
    public ?int $last_calculated_at;
    
    /**
    *
    * @var ?int $unit_price
    */
    public ?int $unit_price;
    
    /**
    *
    * @var ?string $unit_price_in_decimal
    */
    public ?string $unit_price_in_decimal;
    
    /**
    *
    * @var ?int $amount
    */
    public ?int $amount;
    
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
    * @var ?string $amount_in_decimal
    */
    public ?string $amount_in_decimal;
    
    /**
    *
    * @var ?int $billing_period
    */
    public ?int $billing_period;
    
    /**
    *
    * @var ?int $free_quantity
    */
    public ?int $free_quantity;
    
    /**
    *
    * @var ?string $free_quantity_in_decimal
    */
    public ?string $free_quantity_in_decimal;
    
    /**
    *
    * @var ?int $trial_end
    */
    public ?int $trial_end;
    
    /**
    *
    * @var ?int $billing_cycles
    */
    public ?int $billing_cycles;
    
    /**
    *
    * @var ?int $service_period_days
    */
    public ?int $service_period_days;
    
    /**
    *
    * @var ?bool $charge_once
    */
    public ?bool $charge_once;
    
    /**
    *
    * @var ?\Chargebee\ClassBasedEnums\ItemType $item_type
    */
    public ?\Chargebee\ClassBasedEnums\ItemType $item_type;
    
    /**
    *
    * @var ?\Chargebee\ClassBasedEnums\BillingPeriodUnit $billing_period_unit
    */
    public ?\Chargebee\ClassBasedEnums\BillingPeriodUnit $billing_period_unit;
    
    /**
    *
    * @var ?\Chargebee\ClassBasedEnums\ChargeOnEvent $charge_on_event
    */
    public ?\Chargebee\ClassBasedEnums\ChargeOnEvent $charge_on_event;
    
    /**
    *
    * @var ?\Chargebee\ClassBasedEnums\ChargeOnOption $charge_on_option
    */
    public ?\Chargebee\ClassBasedEnums\ChargeOnOption $charge_on_option;
    
    /**
    *
    * @var ?\Chargebee\ClassBasedEnums\ProrationType $proration_type
    */
    public ?\Chargebee\ClassBasedEnums\ProrationType $proration_type;
    
    /**
    *
    * @var ?\Chargebee\ClassBasedEnums\UsageAccumulationResetFrequency $usage_accumulation_reset_frequency
    */
    public ?\Chargebee\ClassBasedEnums\UsageAccumulationResetFrequency $usage_accumulation_reset_frequency;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "item_price_id" , "quantity" , "quantity_in_decimal" , "metered_quantity" , "last_calculated_at" , "unit_price" , "unit_price_in_decimal" , "amount" , "current_term_start" , "current_term_end" , "next_billing_at" , "amount_in_decimal" , "billing_period" , "free_quantity" , "free_quantity_in_decimal" , "trial_end" , "billing_cycles" , "service_period_days" , "charge_once"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $item_price_id,
        ?int $quantity,
        ?string $quantity_in_decimal,
        ?string $metered_quantity,
        ?int $last_calculated_at,
        ?int $unit_price,
        ?string $unit_price_in_decimal,
        ?int $amount,
        ?int $current_term_start,
        ?int $current_term_end,
        ?int $next_billing_at,
        ?string $amount_in_decimal,
        ?int $billing_period,
        ?int $free_quantity,
        ?string $free_quantity_in_decimal,
        ?int $trial_end,
        ?int $billing_cycles,
        ?int $service_period_days,
        ?bool $charge_once,
        ?\Chargebee\ClassBasedEnums\ItemType $item_type,
        ?\Chargebee\ClassBasedEnums\BillingPeriodUnit $billing_period_unit,
        ?\Chargebee\ClassBasedEnums\ChargeOnEvent $charge_on_event,
        ?\Chargebee\ClassBasedEnums\ChargeOnOption $charge_on_option,
        ?\Chargebee\ClassBasedEnums\ProrationType $proration_type,
        ?\Chargebee\ClassBasedEnums\UsageAccumulationResetFrequency $usage_accumulation_reset_frequency,
    )
    { 
        $this->item_price_id = $item_price_id;
        $this->quantity = $quantity;
        $this->quantity_in_decimal = $quantity_in_decimal;
        $this->metered_quantity = $metered_quantity;
        $this->last_calculated_at = $last_calculated_at;
        $this->unit_price = $unit_price;
        $this->unit_price_in_decimal = $unit_price_in_decimal;
        $this->amount = $amount;
        $this->current_term_start = $current_term_start;
        $this->current_term_end = $current_term_end;
        $this->next_billing_at = $next_billing_at;
        $this->amount_in_decimal = $amount_in_decimal;
        $this->billing_period = $billing_period;
        $this->free_quantity = $free_quantity;
        $this->free_quantity_in_decimal = $free_quantity_in_decimal;
        $this->trial_end = $trial_end;
        $this->billing_cycles = $billing_cycles;
        $this->service_period_days = $service_period_days;
        $this->charge_once = $charge_once; 
        $this->item_type = $item_type;
        $this->billing_period_unit = $billing_period_unit;
        $this->charge_on_event = $charge_on_event;
        $this->charge_on_option = $charge_on_option;
        $this->proration_type = $proration_type;
        $this->usage_accumulation_reset_frequency = $usage_accumulation_reset_frequency; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['item_price_id'] ?? null,
        $resourceAttributes['quantity'] ?? null,
        $resourceAttributes['quantity_in_decimal'] ?? null,
        $resourceAttributes['metered_quantity'] ?? null,
        $resourceAttributes['last_calculated_at'] ?? null,
        $resourceAttributes['unit_price'] ?? null,
        $resourceAttributes['unit_price_in_decimal'] ?? null,
        $resourceAttributes['amount'] ?? null,
        $resourceAttributes['current_term_start'] ?? null,
        $resourceAttributes['current_term_end'] ?? null,
        $resourceAttributes['next_billing_at'] ?? null,
        $resourceAttributes['amount_in_decimal'] ?? null,
        $resourceAttributes['billing_period'] ?? null,
        $resourceAttributes['free_quantity'] ?? null,
        $resourceAttributes['free_quantity_in_decimal'] ?? null,
        $resourceAttributes['trial_end'] ?? null,
        $resourceAttributes['billing_cycles'] ?? null,
        $resourceAttributes['service_period_days'] ?? null,
        $resourceAttributes['charge_once'] ?? null,
        
        
        isset($resourceAttributes['item_type']) ? \Chargebee\ClassBasedEnums\ItemType::tryFromValue($resourceAttributes['item_type']) : null,
        
        isset($resourceAttributes['billing_period_unit']) ? \Chargebee\ClassBasedEnums\BillingPeriodUnit::tryFromValue($resourceAttributes['billing_period_unit']) : null,
        
        isset($resourceAttributes['charge_on_event']) ? \Chargebee\ClassBasedEnums\ChargeOnEvent::tryFromValue($resourceAttributes['charge_on_event']) : null,
        
        isset($resourceAttributes['charge_on_option']) ? \Chargebee\ClassBasedEnums\ChargeOnOption::tryFromValue($resourceAttributes['charge_on_option']) : null,
        
        isset($resourceAttributes['proration_type']) ? \Chargebee\ClassBasedEnums\ProrationType::tryFromValue($resourceAttributes['proration_type']) : null,
        
        isset($resourceAttributes['usage_accumulation_reset_frequency']) ? \Chargebee\ClassBasedEnums\UsageAccumulationResetFrequency::tryFromValue($resourceAttributes['usage_accumulation_reset_frequency']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['item_price_id' => $this->item_price_id,
        'quantity' => $this->quantity,
        'quantity_in_decimal' => $this->quantity_in_decimal,
        'metered_quantity' => $this->metered_quantity,
        'last_calculated_at' => $this->last_calculated_at,
        'unit_price' => $this->unit_price,
        'unit_price_in_decimal' => $this->unit_price_in_decimal,
        'amount' => $this->amount,
        'current_term_start' => $this->current_term_start,
        'current_term_end' => $this->current_term_end,
        'next_billing_at' => $this->next_billing_at,
        'amount_in_decimal' => $this->amount_in_decimal,
        'billing_period' => $this->billing_period,
        'free_quantity' => $this->free_quantity,
        'free_quantity_in_decimal' => $this->free_quantity_in_decimal,
        'trial_end' => $this->trial_end,
        'billing_cycles' => $this->billing_cycles,
        'service_period_days' => $this->service_period_days,
        'charge_once' => $this->charge_once,
        
        'item_type' => $this->item_type?->value,
        
        'billing_period_unit' => $this->billing_period_unit?->value,
        
        'charge_on_event' => $this->charge_on_event?->value,
        
        'charge_on_option' => $this->charge_on_option?->value,
        
        'proration_type' => $this->proration_type?->value,
        
        'usage_accumulation_reset_frequency' => $this->usage_accumulation_reset_frequency?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>