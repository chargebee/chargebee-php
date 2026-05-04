<?php

namespace Chargebee\Resources\FilterCondition;

class FilterCondition  { 
    /**
    *
    * @var ?string $value
    */
    public ?string $value;
    
    /**
    *
    * @var ?\Chargebee\Resources\FilterCondition\Enums\Field $field
    */
    public ?\Chargebee\Resources\FilterCondition\Enums\Field $field;
    
    /**
    *
    * @var ?\Chargebee\Resources\FilterCondition\Enums\Operator $operator
    */
    public ?\Chargebee\Resources\FilterCondition\Enums\Operator $operator;
    
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
        ?\Chargebee\Resources\FilterCondition\Enums\Field $field,
        ?\Chargebee\Resources\FilterCondition\Enums\Operator $operator,
    )
    { 
        $this->value = $value;  
        $this->field = $field;
        $this->operator = $operator; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['value'] ?? null,
        
         
        isset($resourceAttributes['field']) ? \Chargebee\Resources\FilterCondition\Enums\Field::tryFromValue($resourceAttributes['field']) : null,
        
        isset($resourceAttributes['operator']) ? \Chargebee\Resources\FilterCondition\Enums\Operator::tryFromValue($resourceAttributes['operator']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['value' => $this->value,
        
        'field' => $this->field?->value,
        
        'operator' => $this->operator?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>