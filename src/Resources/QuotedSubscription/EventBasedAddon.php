<?php

namespace Chargebee\Resources\QuotedSubscription;

class EventBasedAddon  { 
    /**
    *
    * @var string $id
    */
    public string $id;
    
    /**
    *
    * @var int $quantity
    */
    public int $quantity;
    
    /**
    *
    * @var int $unit_price
    */
    public int $unit_price;
    
    /**
    *
    * @var ?int $service_period_in_days
    */
    public ?int $service_period_in_days;
    
    /**
    *
    * @var string $on_event
    */
    public string $on_event;
    
    /**
    *
    * @var bool $charge_once
    */
    public bool $charge_once;
    
    /**
    *
    * @var ?string $quantity_in_decimal
    */
    public ?string $quantity_in_decimal;
    
    /**
    *
    * @var ?string $unit_price_in_decimal
    */
    public ?string $unit_price_in_decimal;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "quantity" , "unit_price" , "service_period_in_days" , "on_event" , "charge_once" , "quantity_in_decimal" , "unit_price_in_decimal"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        string $id,
        int $quantity,
        int $unit_price,
        ?int $service_period_in_days,
        string $on_event,
        bool $charge_once,
        ?string $quantity_in_decimal,
        ?string $unit_price_in_decimal,
    )
    { 
        $this->id = $id;
        $this->quantity = $quantity;
        $this->unit_price = $unit_price;
        $this->service_period_in_days = $service_period_in_days;
        $this->on_event = $on_event;
        $this->charge_once = $charge_once;
        $this->quantity_in_decimal = $quantity_in_decimal;
        $this->unit_price_in_decimal = $unit_price_in_decimal;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ,
        $resourceAttributes['quantity'] ,
        $resourceAttributes['unit_price'] ,
        $resourceAttributes['service_period_in_days'] ?? null,
        $resourceAttributes['on_event'] ,
        $resourceAttributes['charge_once'] ,
        $resourceAttributes['quantity_in_decimal'] ?? null,
        $resourceAttributes['unit_price_in_decimal'] ?? null,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['id' => $this->id,
        'quantity' => $this->quantity,
        'unit_price' => $this->unit_price,
        'service_period_in_days' => $this->service_period_in_days,
        'on_event' => $this->on_event,
        'charge_once' => $this->charge_once,
        'quantity_in_decimal' => $this->quantity_in_decimal,
        'unit_price_in_decimal' => $this->unit_price_in_decimal,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>