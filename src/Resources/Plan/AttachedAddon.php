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
    * @var ?string $quantity_in_decimal
    */
    public ?string $quantity_in_decimal;
    
    /**
    *
    * @var ?\Chargebee\Resources\Plan\ClassBasedEnums\AttachedAddonType $type
    */
    public ?\Chargebee\Resources\Plan\ClassBasedEnums\AttachedAddonType $type;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "quantity" , "billing_cycles" , "quantity_in_decimal"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?int $quantity,
        ?int $billing_cycles,
        ?string $quantity_in_decimal,
        ?\Chargebee\Resources\Plan\ClassBasedEnums\AttachedAddonType $type,
    )
    { 
        $this->id = $id;
        $this->quantity = $quantity;
        $this->billing_cycles = $billing_cycles;
        $this->quantity_in_decimal = $quantity_in_decimal;  
        $this->type = $type;
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['quantity'] ?? null,
        $resourceAttributes['billing_cycles'] ?? null,
        $resourceAttributes['quantity_in_decimal'] ?? null,
        
         
        isset($resourceAttributes['type']) ? \Chargebee\Resources\Plan\ClassBasedEnums\AttachedAddonType::tryFromValue($resourceAttributes['type']) : null,
        
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['id' => $this->id,
        'quantity' => $this->quantity,
        'billing_cycles' => $this->billing_cycles,
        'quantity_in_decimal' => $this->quantity_in_decimal,
        
        'type' => $this->type?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>