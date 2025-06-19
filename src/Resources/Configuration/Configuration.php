<?php

namespace Chargebee\Resources\Configuration;

class Configuration  { 
    /**
    *
    * @var ?string $domain
    */
    public ?string $domain;
    
    /**
    *
    * @var ?\Chargebee\Enums\ProductCatalogVersion $product_catalog_version
    */
    public ?\Chargebee\Enums\ProductCatalogVersion $product_catalog_version;
    
    /**
    *
    * @var ?\Chargebee\Enums\ChargebeeResponseSchemaType $chargebee_response_schema_type
    */
    public ?\Chargebee\Enums\ChargebeeResponseSchemaType $chargebee_response_schema_type;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "domain"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $domain,
        ?\Chargebee\Enums\ProductCatalogVersion $product_catalog_version,
        ?\Chargebee\Enums\ChargebeeResponseSchemaType $chargebee_response_schema_type,
    )
    { 
        $this->domain = $domain; 
        $this->product_catalog_version = $product_catalog_version;
        $this->chargebee_response_schema_type = $chargebee_response_schema_type; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['domain'] ?? null,
        
        
        isset($resourceAttributes['product_catalog_version']) ? \Chargebee\Enums\ProductCatalogVersion::tryFromValue($resourceAttributes['product_catalog_version']) : null,
        
        isset($resourceAttributes['chargebee_response_schema_type']) ? \Chargebee\Enums\ChargebeeResponseSchemaType::tryFromValue($resourceAttributes['chargebee_response_schema_type']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['domain' => $this->domain,
        
        'product_catalog_version' => $this->product_catalog_version?->value,
        
        'chargebee_response_schema_type' => $this->chargebee_response_schema_type?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>