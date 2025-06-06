<?php

namespace Chargebee\Resources\CreditNote;

class LineItemDiscount  { 
    /**
    *
    * @var ?string $line_item_id
    */
    public ?string $line_item_id;
    
    /**
    *
    * @var ?string $discount_type
    */
    public ?string $discount_type;
    
    /**
    *
    * @var ?string $coupon_id
    */
    public ?string $coupon_id;
    
    /**
    *
    * @var ?string $entity_id
    */
    public ?string $entity_id;
    
    /**
    *
    * @var ?int $discount_amount
    */
    public ?int $discount_amount;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "line_item_id" , "discount_type" , "coupon_id" , "entity_id" , "discount_amount"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $line_item_id,
        ?string $discount_type,
        ?string $coupon_id,
        ?string $entity_id,
        ?int $discount_amount,
    )
    { 
        $this->line_item_id = $line_item_id;
        $this->discount_type = $discount_type;
        $this->coupon_id = $coupon_id;
        $this->entity_id = $entity_id;
        $this->discount_amount = $discount_amount;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['line_item_id'] ?? null,
        $resourceAttributes['discount_type'] ?? null,
        $resourceAttributes['coupon_id'] ?? null,
        $resourceAttributes['entity_id'] ?? null,
        $resourceAttributes['discount_amount'] ?? null,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['line_item_id' => $this->line_item_id,
        'discount_type' => $this->discount_type,
        'coupon_id' => $this->coupon_id,
        'entity_id' => $this->entity_id,
        'discount_amount' => $this->discount_amount,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>