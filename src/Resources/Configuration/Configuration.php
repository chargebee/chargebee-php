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
    )
    { 
        $this->domain = $domain; 
        $this->product_catalog_version = $product_catalog_version; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['domain'] ?? null,
        
        
        isset($resourceAttributes['product_catalog_version']) ? \Chargebee\Enums\ProductCatalogVersion::tryFromValue($resourceAttributes['product_catalog_version']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['domain' => $this->domain,
        
        'product_catalog_version' => $this->product_catalog_version?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>