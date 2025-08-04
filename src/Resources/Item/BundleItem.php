<?php

namespace Chargebee\Resources\Item;

class BundleItem  { 
    /**
    *
    * @var ?string $item_id
    */
    public ?string $item_id;
    
    /**
    *
    * @var ?int $quantity
    */
    public ?int $quantity;
    
    /**
    *
    * @var ?float $price_allocation
    */
    public ?float $price_allocation;
    
    /**
    *
    * @var ?\Chargebee\ClassBasedEnums\ItemType $item_type
    */
    public ?\Chargebee\ClassBasedEnums\ItemType $item_type;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "item_id" , "quantity" , "price_allocation"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $item_id,
        ?int $quantity,
        ?float $price_allocation,
        ?\Chargebee\ClassBasedEnums\ItemType $item_type,
    )
    { 
        $this->item_id = $item_id;
        $this->quantity = $quantity;
        $this->price_allocation = $price_allocation; 
        $this->item_type = $item_type; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['item_id'] ?? null,
        $resourceAttributes['quantity'] ?? null,
        $resourceAttributes['price_allocation'] ?? null,
        
        
        isset($resourceAttributes['item_type']) ? \Chargebee\ClassBasedEnums\ItemType::tryFromValue($resourceAttributes['item_type']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['item_id' => $this->item_id,
        'quantity' => $this->quantity,
        'price_allocation' => $this->price_allocation,
        
        'item_type' => $this->item_type?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>