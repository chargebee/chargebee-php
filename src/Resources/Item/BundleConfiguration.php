<?php

namespace Chargebee\Resources\Item;

class BundleConfiguration  { 
    /**
    *
    * @var ?\Chargebee\Resources\Item\ClassBasedEnums\BundleConfigurationType $type
    */
    public ?\Chargebee\Resources\Item\ClassBasedEnums\BundleConfigurationType $type;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?\Chargebee\Resources\Item\ClassBasedEnums\BundleConfigurationType $type,
    )
    {   
        $this->type = $type;
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( 
         
        isset($resourceAttributes['type']) ? \Chargebee\Resources\Item\ClassBasedEnums\BundleConfigurationType::tryFromValue($resourceAttributes['type']) : null,
        
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter([
        'type' => $this->type?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>