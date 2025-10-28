<?php

namespace Chargebee\Resources\InvoiceEstimate;

class Discount  { 
    /**
    *
    * @var ?int $amount
    */
    public ?int $amount;
    
    /**
    *
    * @var ?string $description
    */
    public ?string $description;
    
    /**
    *
    * @var ?string $line_item_id
    */
    public ?string $line_item_id;
    
    /**
    *
    * @var ?string $entity_type
    */
    public ?string $entity_type;
    
    /**
    *
    * @var ?string $discount_type
    */
    public ?string $discount_type;
    
    /**
    *
    * @var ?string $entity_id
    */
    public ?string $entity_id;
    
    /**
    *
    * @var ?string $coupon_set_code
    */
    public ?string $coupon_set_code;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "amount" , "description" , "line_item_id" , "entity_type" , "discount_type" , "entity_id" , "coupon_set_code"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?int $amount,
        ?string $description,
        ?string $line_item_id,
        ?string $entity_type,
        ?string $discount_type,
        ?string $entity_id,
        ?string $coupon_set_code,
    )
    { 
        $this->amount = $amount;
        $this->description = $description;
        $this->line_item_id = $line_item_id;
        $this->entity_type = $entity_type;
        $this->discount_type = $discount_type;
        $this->entity_id = $entity_id;
        $this->coupon_set_code = $coupon_set_code;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['amount'] ?? null,
        $resourceAttributes['description'] ?? null,
        $resourceAttributes['line_item_id'] ?? null,
        $resourceAttributes['entity_type'] ?? null,
        $resourceAttributes['discount_type'] ?? null,
        $resourceAttributes['entity_id'] ?? null,
        $resourceAttributes['coupon_set_code'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['amount' => $this->amount,
        'description' => $this->description,
        'line_item_id' => $this->line_item_id,
        'entity_type' => $this->entity_type,
        'discount_type' => $this->discount_type,
        'entity_id' => $this->entity_id,
        'coupon_set_code' => $this->coupon_set_code,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>