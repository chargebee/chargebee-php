<?php

namespace Chargebee\Resources\Plan;

class AttachedAddon  { 
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
    * @var ?int $billing_cycles
    */
    public ?int $billing_cycles;
    
    /**
    *
    * @var ?string $type
    */
    public ?string $type;
    
    /**
    *
    * @var ?string $quantity_in_decimal
    */
    public ?string $quantity_in_decimal;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "quantity" , "billing_cycles" , "type" , "quantity_in_decimal"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?int $quantity,
        ?int $billing_cycles,
        ?string $type,
        ?string $quantity_in_decimal,
    )
    { 
        $this->id = $id;
        $this->quantity = $quantity;
        $this->billing_cycles = $billing_cycles;
        $this->type = $type;
        $this->quantity_in_decimal = $quantity_in_decimal;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['quantity'] ?? null,
        $resourceAttributes['billing_cycles'] ?? null,
        $resourceAttributes['type'] ?? null,
        $resourceAttributes['quantity_in_decimal'] ?? null,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['id' => $this->id,
        'quantity' => $this->quantity,
        'billing_cycles' => $this->billing_cycles,
        'type' => $this->type,
        'quantity_in_decimal' => $this->quantity_in_decimal,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>