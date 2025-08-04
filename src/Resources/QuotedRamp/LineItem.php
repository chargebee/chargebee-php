<?php

namespace Chargebee\Resources\QuotedRamp;

class LineItem  { 
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
    * @var ?int $start_date
    */
    public ?int $start_date;
    
    /**
    *
    * @var ?int $end_date
    */
    public ?int $end_date;
    
    /**
    *
    * @var ?string $ramp_tier_id
    */
    public ?string $ramp_tier_id;
    
    /**
    *
    * @var ?int $discount_per_billing_cycle
    */
    public ?int $discount_per_billing_cycle;
    
    /**
    *
    * @var ?string $discount_per_billing_cycle_in_decimal
    */
    public ?string $discount_per_billing_cycle_in_decimal;
    
    /**
    *
    * @var ?int $item_level_discount_per_billing_cycle
    */
    public ?int $item_level_discount_per_billing_cycle;
    
    /**
    *
    * @var ?string $item_level_discount_per_billing_cycle_in_decimal
    */
    public ?string $item_level_discount_per_billing_cycle_in_decimal;
    
    /**
    *
    * @var ?int $amount_per_billing_cycle
    */
    public ?int $amount_per_billing_cycle;
    
    /**
    *
    * @var ?string $amount_per_billing_cycle_in_decimal
    */
    public ?string $amount_per_billing_cycle_in_decimal;
    
    /**
    *
    * @var ?int $net_amount_per_billing_cycle
    */
    public ?int $net_amount_per_billing_cycle;
    
    /**
    *
    * @var ?string $net_amount_per_billing_cycle_in_decimal
    */
    public ?string $net_amount_per_billing_cycle_in_decimal;
    
    /**
    *
    * @var ?\Chargebee\ClassBasedEnums\ItemType $item_type
    */
    public ?\Chargebee\ClassBasedEnums\ItemType $item_type;
    
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
    * @var ?\Chargebee\ClassBasedEnums\BillingPeriodUnit $billing_period_unit
    */
    public ?\Chargebee\ClassBasedEnums\BillingPeriodUnit $billing_period_unit;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "item_price_id" , "quantity" , "quantity_in_decimal" , "metered_quantity" , "unit_price" , "unit_price_in_decimal" , "amount" , "amount_in_decimal" , "billing_period" , "free_quantity" , "free_quantity_in_decimal" , "billing_cycles" , "service_period_days" , "charge_once" , "start_date" , "end_date" , "ramp_tier_id" , "discount_per_billing_cycle" , "discount_per_billing_cycle_in_decimal" , "item_level_discount_per_billing_cycle" , "item_level_discount_per_billing_cycle_in_decimal" , "amount_per_billing_cycle" , "amount_per_billing_cycle_in_decimal" , "net_amount_per_billing_cycle" , "net_amount_per_billing_cycle_in_decimal"  ];

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
        ?int $unit_price,
        ?string $unit_price_in_decimal,
        ?int $amount,
        ?string $amount_in_decimal,
        ?int $billing_period,
        ?int $free_quantity,
        ?string $free_quantity_in_decimal,
        ?int $billing_cycles,
        ?int $service_period_days,
        ?bool $charge_once,
        ?int $start_date,
        ?int $end_date,
        ?string $ramp_tier_id,
        ?int $discount_per_billing_cycle,
        ?string $discount_per_billing_cycle_in_decimal,
        ?int $item_level_discount_per_billing_cycle,
        ?string $item_level_discount_per_billing_cycle_in_decimal,
        ?int $amount_per_billing_cycle,
        ?string $amount_per_billing_cycle_in_decimal,
        ?int $net_amount_per_billing_cycle,
        ?string $net_amount_per_billing_cycle_in_decimal,
        ?\Chargebee\ClassBasedEnums\ItemType $item_type,
        ?\Chargebee\ClassBasedEnums\ChargeOnEvent $charge_on_event,
        ?\Chargebee\ClassBasedEnums\ChargeOnOption $charge_on_option,
        ?\Chargebee\ClassBasedEnums\BillingPeriodUnit $billing_period_unit,
    )
    { 
        $this->item_price_id = $item_price_id;
        $this->quantity = $quantity;
        $this->quantity_in_decimal = $quantity_in_decimal;
        $this->metered_quantity = $metered_quantity;
        $this->unit_price = $unit_price;
        $this->unit_price_in_decimal = $unit_price_in_decimal;
        $this->amount = $amount;
        $this->amount_in_decimal = $amount_in_decimal;
        $this->billing_period = $billing_period;
        $this->free_quantity = $free_quantity;
        $this->free_quantity_in_decimal = $free_quantity_in_decimal;
        $this->billing_cycles = $billing_cycles;
        $this->service_period_days = $service_period_days;
        $this->charge_once = $charge_once;
        $this->start_date = $start_date;
        $this->end_date = $end_date;
        $this->ramp_tier_id = $ramp_tier_id;
        $this->discount_per_billing_cycle = $discount_per_billing_cycle;
        $this->discount_per_billing_cycle_in_decimal = $discount_per_billing_cycle_in_decimal;
        $this->item_level_discount_per_billing_cycle = $item_level_discount_per_billing_cycle;
        $this->item_level_discount_per_billing_cycle_in_decimal = $item_level_discount_per_billing_cycle_in_decimal;
        $this->amount_per_billing_cycle = $amount_per_billing_cycle;
        $this->amount_per_billing_cycle_in_decimal = $amount_per_billing_cycle_in_decimal;
        $this->net_amount_per_billing_cycle = $net_amount_per_billing_cycle;
        $this->net_amount_per_billing_cycle_in_decimal = $net_amount_per_billing_cycle_in_decimal; 
        $this->item_type = $item_type;
        $this->charge_on_event = $charge_on_event;
        $this->charge_on_option = $charge_on_option; 
        $this->billing_period_unit = $billing_period_unit;
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['item_price_id'] ?? null,
        $resourceAttributes['quantity'] ?? null,
        $resourceAttributes['quantity_in_decimal'] ?? null,
        $resourceAttributes['metered_quantity'] ?? null,
        $resourceAttributes['unit_price'] ?? null,
        $resourceAttributes['unit_price_in_decimal'] ?? null,
        $resourceAttributes['amount'] ?? null,
        $resourceAttributes['amount_in_decimal'] ?? null,
        $resourceAttributes['billing_period'] ?? null,
        $resourceAttributes['free_quantity'] ?? null,
        $resourceAttributes['free_quantity_in_decimal'] ?? null,
        $resourceAttributes['billing_cycles'] ?? null,
        $resourceAttributes['service_period_days'] ?? null,
        $resourceAttributes['charge_once'] ?? null,
        $resourceAttributes['start_date'] ?? null,
        $resourceAttributes['end_date'] ?? null,
        $resourceAttributes['ramp_tier_id'] ?? null,
        $resourceAttributes['discount_per_billing_cycle'] ?? null,
        $resourceAttributes['discount_per_billing_cycle_in_decimal'] ?? null,
        $resourceAttributes['item_level_discount_per_billing_cycle'] ?? null,
        $resourceAttributes['item_level_discount_per_billing_cycle_in_decimal'] ?? null,
        $resourceAttributes['amount_per_billing_cycle'] ?? null,
        $resourceAttributes['amount_per_billing_cycle_in_decimal'] ?? null,
        $resourceAttributes['net_amount_per_billing_cycle'] ?? null,
        $resourceAttributes['net_amount_per_billing_cycle_in_decimal'] ?? null,
        
        
        isset($resourceAttributes['item_type']) ? \Chargebee\ClassBasedEnums\ItemType::tryFromValue($resourceAttributes['item_type']) : null,
        
        isset($resourceAttributes['charge_on_event']) ? \Chargebee\ClassBasedEnums\ChargeOnEvent::tryFromValue($resourceAttributes['charge_on_event']) : null,
        
        isset($resourceAttributes['charge_on_option']) ? \Chargebee\ClassBasedEnums\ChargeOnOption::tryFromValue($resourceAttributes['charge_on_option']) : null,
         
        isset($resourceAttributes['billing_period_unit']) ? \Chargebee\ClassBasedEnums\BillingPeriodUnit::tryFromValue($resourceAttributes['billing_period_unit']) : null,
        
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['item_price_id' => $this->item_price_id,
        'quantity' => $this->quantity,
        'quantity_in_decimal' => $this->quantity_in_decimal,
        'metered_quantity' => $this->metered_quantity,
        'unit_price' => $this->unit_price,
        'unit_price_in_decimal' => $this->unit_price_in_decimal,
        'amount' => $this->amount,
        'amount_in_decimal' => $this->amount_in_decimal,
        'billing_period' => $this->billing_period,
        'free_quantity' => $this->free_quantity,
        'free_quantity_in_decimal' => $this->free_quantity_in_decimal,
        'billing_cycles' => $this->billing_cycles,
        'service_period_days' => $this->service_period_days,
        'charge_once' => $this->charge_once,
        'start_date' => $this->start_date,
        'end_date' => $this->end_date,
        'ramp_tier_id' => $this->ramp_tier_id,
        'discount_per_billing_cycle' => $this->discount_per_billing_cycle,
        'discount_per_billing_cycle_in_decimal' => $this->discount_per_billing_cycle_in_decimal,
        'item_level_discount_per_billing_cycle' => $this->item_level_discount_per_billing_cycle,
        'item_level_discount_per_billing_cycle_in_decimal' => $this->item_level_discount_per_billing_cycle_in_decimal,
        'amount_per_billing_cycle' => $this->amount_per_billing_cycle,
        'amount_per_billing_cycle_in_decimal' => $this->amount_per_billing_cycle_in_decimal,
        'net_amount_per_billing_cycle' => $this->net_amount_per_billing_cycle,
        'net_amount_per_billing_cycle_in_decimal' => $this->net_amount_per_billing_cycle_in_decimal,
        
        'item_type' => $this->item_type?->value,
        
        'charge_on_event' => $this->charge_on_event?->value,
        
        'charge_on_option' => $this->charge_on_option?->value,
        
        'billing_period_unit' => $this->billing_period_unit?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>