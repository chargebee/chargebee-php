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
    * @var ?bool $charge_once
    */
    public ?bool $charge_once;
    
    /**
    *
    * @var ?string $quantity_in_decimal
    */
    public ?string $quantity_in_decimal;
    
    /**
    *
    * @var ?\Chargebee\ClassBasedEnums\OnEvent $on_event
    */
    public ?\Chargebee\ClassBasedEnums\OnEvent $on_event;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "quantity" , "charge_once" , "quantity_in_decimal"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?int $quantity,
        ?bool $charge_once,
        ?string $quantity_in_decimal,
        ?\Chargebee\ClassBasedEnums\OnEvent $on_event,
    )
    { 
        $this->id = $id;
        $this->quantity = $quantity;
        $this->charge_once = $charge_once;
        $this->quantity_in_decimal = $quantity_in_decimal; 
        $this->on_event = $on_event; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['quantity'] ?? null,
        $resourceAttributes['charge_once'] ?? null,
        $resourceAttributes['quantity_in_decimal'] ?? null,
        
        
        isset($resourceAttributes['on_event']) ? \Chargebee\ClassBasedEnums\OnEvent::tryFromValue($resourceAttributes['on_event']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['id' => $this->id,
        'quantity' => $this->quantity,
        'charge_once' => $this->charge_once,
        'quantity_in_decimal' => $this->quantity_in_decimal,
        
        'on_event' => $this->on_event?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>