<?php

namespace Chargebee\Resources\ColumnDefinition;

class ColumnDefinition  { 
    /**
    *
    * @var ?string $column_name
    */
    public ?string $column_name;
    
    /**
    *
    * @var ?\Chargebee\Resources\ColumnDefinition\Enums\DataType $data_type
    */
    public ?\Chargebee\Resources\ColumnDefinition\Enums\DataType $data_type;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "column_name"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $column_name,
        ?\Chargebee\Resources\ColumnDefinition\Enums\DataType $data_type,
    )
    { 
        $this->column_name = $column_name;  
        $this->data_type = $data_type; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['column_name'] ?? null,
        
         
        isset($resourceAttributes['data_type']) ? \Chargebee\Resources\ColumnDefinition\Enums\DataType::tryFromValue($resourceAttributes['data_type']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['column_name' => $this->column_name,
        
        'data_type' => $this->data_type?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>