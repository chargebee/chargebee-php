<?php

namespace Chargebee\Resources\Coupon;

class ItemConstraint  { 
    /**
    *
    * @var ?string $item_type
    */
    public ?string $item_type;
    
    /**
    *
    * @var ?string $constraint
    */
    public ?string $constraint;
    
    /**
    *
    * @var mixed $item_price_ids
    */
    public mixed $item_price_ids;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "item_type" , "constraint" , "item_price_ids"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $item_type,
        ?string $constraint,
        mixed $item_price_ids,
    )
    { 
        $this->item_type = $item_type;
        $this->constraint = $constraint;
        $this->item_price_ids = $item_price_ids;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['item_type'] ?? null,
        $resourceAttributes['constraint'] ?? null,
        $resourceAttributes['item_price_ids'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['item_type' => $this->item_type,
        'constraint' => $this->constraint,
        'item_price_ids' => $this->item_price_ids,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>