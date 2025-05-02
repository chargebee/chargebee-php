<?php

namespace Chargebee\Resources\Plan;

class EventBasedAddon  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?int $quantity
    */
    public ?int $quantity;
    
    /**
    *
    * @var ?string $on_event
    */
    public ?string $on_event;
    
    /**
    *
    * @var ?bool $charge_once
    */
    public ?bool $charge_once;
    
    /**
    *
    * @var ?string $quantity_in_decimal
    */
    public ?string $quantity_in_decimal;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "quantity" , "on_event" , "charge_once" , "quantity_in_decimal"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?int $quantity,
        ?string $on_event,
        ?bool $charge_once,
        ?string $quantity_in_decimal,
    )
    { 
        $this->id = $id;
        $this->quantity = $quantity;
        $this->on_event = $on_event;
        $this->charge_once = $charge_once;
        $this->quantity_in_decimal = $quantity_in_decimal;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['quantity'] ?? null,
        $resourceAttributes['on_event'] ?? null,
        $resourceAttributes['charge_once'] ?? null,
        $resourceAttributes['quantity_in_decimal'] ?? null,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['id' => $this->id,
        'quantity' => $this->quantity,
        'on_event' => $this->on_event,
        'charge_once' => $this->charge_once,
        'quantity_in_decimal' => $this->quantity_in_decimal,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>