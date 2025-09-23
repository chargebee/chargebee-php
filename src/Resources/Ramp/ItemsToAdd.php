<?php

namespace Chargebee\Resources\Ramp;

class ItemsToAdd  { 
    /**
    *
    * @var ?string $item_price_id
    */
    public ?string $item_price_id;
    
    /**
    *
    * @var ?string $item_type
    */
    public ?string $item_type;
    
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
    * @var ?string $metered_quantity
    */
    public ?string $metered_quantity;
    
    /**
    *
    * @var ?bool $charge_once
    */
    public ?bool $charge_once;
    
    /**
    *
    * @var ?string $charge_on_option
    */
    public ?string $charge_on_option;
    
    /**
    *
    * @var ?string $charge_on_event
    */
    public ?string $charge_on_event;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "item_price_id" , "item_type" , "quantity" , "quantity_in_decimal" , "unit_price" , "unit_price_in_decimal" , "amount" , "amount_in_decimal" , "free_quantity" , "free_quantity_in_decimal" , "billing_cycles" , "service_period_days" , "metered_quantity" , "charge_once" , "charge_on_option" , "charge_on_event"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $item_price_id,
        ?string $item_type,
        ?int $quantity,
        ?string $quantity_in_decimal,
        ?int $unit_price,
        ?string $unit_price_in_decimal,
        ?int $amount,
        ?string $amount_in_decimal,
        ?int $free_quantity,
        ?string $free_quantity_in_decimal,
        ?int $billing_cycles,
        ?int $service_period_days,
        ?string $metered_quantity,
        ?bool $charge_once,
        ?string $charge_on_option,
        ?string $charge_on_event,
    )
    { 
        $this->item_price_id = $item_price_id;
        $this->item_type = $item_type;
        $this->quantity = $quantity;
        $this->quantity_in_decimal = $quantity_in_decimal;
        $this->unit_price = $unit_price;
        $this->unit_price_in_decimal = $unit_price_in_decimal;
        $this->amount = $amount;
        $this->amount_in_decimal = $amount_in_decimal;
        $this->free_quantity = $free_quantity;
        $this->free_quantity_in_decimal = $free_quantity_in_decimal;
        $this->billing_cycles = $billing_cycles;
        $this->service_period_days = $service_period_days;
        $this->metered_quantity = $metered_quantity;
        $this->charge_once = $charge_once;
        $this->charge_on_option = $charge_on_option;
        $this->charge_on_event = $charge_on_event;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['item_price_id'] ?? null,
        $resourceAttributes['item_type'] ?? null,
        $resourceAttributes['quantity'] ?? null,
        $resourceAttributes['quantity_in_decimal'] ?? null,
        $resourceAttributes['unit_price'] ?? null,
        $resourceAttributes['unit_price_in_decimal'] ?? null,
        $resourceAttributes['amount'] ?? null,
        $resourceAttributes['amount_in_decimal'] ?? null,
        $resourceAttributes['free_quantity'] ?? null,
        $resourceAttributes['free_quantity_in_decimal'] ?? null,
        $resourceAttributes['billing_cycles'] ?? null,
        $resourceAttributes['service_period_days'] ?? null,
        $resourceAttributes['metered_quantity'] ?? null,
        $resourceAttributes['charge_once'] ?? null,
        $resourceAttributes['charge_on_option'] ?? null,
        $resourceAttributes['charge_on_event'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['item_price_id' => $this->item_price_id,
        'item_type' => $this->item_type,
        'quantity' => $this->quantity,
        'quantity_in_decimal' => $this->quantity_in_decimal,
        'unit_price' => $this->unit_price,
        'unit_price_in_decimal' => $this->unit_price_in_decimal,
        'amount' => $this->amount,
        'amount_in_decimal' => $this->amount_in_decimal,
        'free_quantity' => $this->free_quantity,
        'free_quantity_in_decimal' => $this->free_quantity_in_decimal,
        'billing_cycles' => $this->billing_cycles,
        'service_period_days' => $this->service_period_days,
        'metered_quantity' => $this->metered_quantity,
        'charge_once' => $this->charge_once,
        'charge_on_option' => $this->charge_on_option,
        'charge_on_event' => $this->charge_on_event,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>