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
    * @var ?float $price_allocation
    */
    public ?float $price_allocation;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "item_id" , "item_type" , "quantity" , "price_allocation"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $item_id,
        ?string $item_type,
        ?int $quantity,
        ?float $price_allocation,
    )
    { 
        $this->item_id = $item_id;
        $this->item_type = $item_type;
        $this->quantity = $quantity;
        $this->price_allocation = $price_allocation;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['item_id'] ?? null,
        $resourceAttributes['item_type'] ?? null,
        $resourceAttributes['quantity'] ?? null,
        $resourceAttributes['price_allocation'] ?? null,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['item_id' => $this->item_id,
        'item_type' => $this->item_type,
        'quantity' => $this->quantity,
        'price_allocation' => $this->price_allocation,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>