<?php

namespace Chargebee\Resources\Coupon;

class CouponConstraint  { 
    /**
    *
    * @var ?string $entity_type
    */
    public ?string $entity_type;
    
    /**
    *
    * @var ?string $type
    */
    public ?string $type;
    
    /**
    *
    * @var ?string $value
    */
    public ?string $value;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "entity_type" , "type" , "value"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $entity_type,
        ?string $type,
        ?string $value,
    )
    { 
        $this->entity_type = $entity_type;
        $this->type = $type;
        $this->value = $value;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['entity_type'] ?? null,
        $resourceAttributes['type'] ?? null,
        $resourceAttributes['value'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['entity_type' => $this->entity_type,
        'type' => $this->type,
        'value' => $this->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>