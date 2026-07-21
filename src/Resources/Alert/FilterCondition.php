<?php

namespace Chargebee\Resources\Alert;

class FilterCondition  { 
    /**
    *
    * @var ?string $field
    */
    public ?string $field;
    
    /**
    *
    * @var ?string $operator
    */
    public ?string $operator;
    
    /**
    *
    * @var ?string $value
    */
    public ?string $value;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "field" , "operator" , "value"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $field,
        ?string $operator,
        ?string $value,
    )
    { 
        $this->field = $field;
        $this->operator = $operator;
        $this->value = $value;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['field'] ?? null,
        $resourceAttributes['operator'] ?? null,
        $resourceAttributes['value'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['field' => $this->field,
        'operator' => $this->operator,
        'value' => $this->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>