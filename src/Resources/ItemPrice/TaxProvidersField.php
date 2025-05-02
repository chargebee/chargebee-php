<?php

namespace Chargebee\Resources\ItemPrice;

class TaxProvidersField  { 
    /**
    *
    * @var ?string $provider_name
    */
    public ?string $provider_name;
    
    /**
    *
    * @var ?string $field_id
    */
    public ?string $field_id;
    
    /**
    *
    * @var ?string $field_value
    */
    public ?string $field_value;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "provider_name" , "field_id" , "field_value"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $provider_name,
        ?string $field_id,
        ?string $field_value,
    )
    { 
        $this->provider_name = $provider_name;
        $this->field_id = $field_id;
        $this->field_value = $field_value;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['provider_name'] ?? null,
        $resourceAttributes['field_id'] ?? null,
        $resourceAttributes['field_value'] ?? null,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['provider_name' => $this->provider_name,
        'field_id' => $this->field_id,
        'field_value' => $this->field_value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>