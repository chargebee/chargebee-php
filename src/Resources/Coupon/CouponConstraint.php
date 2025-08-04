<?php

namespace Chargebee\Resources\Coupon;

class CouponConstraint  { 
    /**
    *
    * @var ?string $value
    */
    public ?string $value;
    
    /**
    *
    * @var ?\Chargebee\Resources\Coupon\ClassBasedEnums\CouponConstraintEntityType $entity_type
    */
    public ?\Chargebee\Resources\Coupon\ClassBasedEnums\CouponConstraintEntityType $entity_type;
    
    /**
    *
    * @var ?\Chargebee\Resources\Coupon\ClassBasedEnums\CouponConstraintType $type
    */
    public ?\Chargebee\Resources\Coupon\ClassBasedEnums\CouponConstraintType $type;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "value"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $value,
        ?\Chargebee\Resources\Coupon\ClassBasedEnums\CouponConstraintEntityType $entity_type,
        ?\Chargebee\Resources\Coupon\ClassBasedEnums\CouponConstraintType $type,
    )
    { 
        $this->value = $value;  
        $this->entity_type = $entity_type;
        $this->type = $type;
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['value'] ?? null,
        
         
        isset($resourceAttributes['entity_type']) ? \Chargebee\Resources\Coupon\ClassBasedEnums\CouponConstraintEntityType::tryFromValue($resourceAttributes['entity_type']) : null,
        
        isset($resourceAttributes['type']) ? \Chargebee\Resources\Coupon\ClassBasedEnums\CouponConstraintType::tryFromValue($resourceAttributes['type']) : null,
        
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['value' => $this->value,
        
        'entity_type' => $this->entity_type?->value,
        
        'type' => $this->type?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>