<?php

namespace Chargebee\Resources\OmnichannelSubscription;

class OmnichannelTransaction  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?string $id_at_source
    */
    public ?string $id_at_source;
    
    /**
    *
    * @var ?string $app_id
    */
    public ?string $app_id;
    
    /**
    *
    * @var ?string $price_currency
    */
    public ?string $price_currency;
    
    /**
    *
    * @var ?int $price_units
    */
    public ?int $price_units;
    
    /**
    *
    * @var ?int $price_nanos
    */
    public ?int $price_nanos;
    
    /**
    *
    * @var ?string $type
    */
    public ?string $type;
    
    /**
    *
    * @var ?int $transacted_at
    */
    public ?int $transacted_at;
    
    /**
    *
    * @var ?int $created_at
    */
    public ?int $created_at;
    
    /**
    *
    * @var ?int $resource_version
    */
    public ?int $resource_version;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "id_at_source" , "app_id" , "price_currency" , "price_units" , "price_nanos" , "type" , "transacted_at" , "created_at" , "resource_version"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $id_at_source,
        ?string $app_id,
        ?string $price_currency,
        ?int $price_units,
        ?int $price_nanos,
        ?string $type,
        ?int $transacted_at,
        ?int $created_at,
        ?int $resource_version,
    )
    { 
        $this->id = $id;
        $this->id_at_source = $id_at_source;
        $this->app_id = $app_id;
        $this->price_currency = $price_currency;
        $this->price_units = $price_units;
        $this->price_nanos = $price_nanos;
        $this->type = $type;
        $this->transacted_at = $transacted_at;
        $this->created_at = $created_at;
        $this->resource_version = $resource_version;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['id_at_source'] ?? null,
        $resourceAttributes['app_id'] ?? null,
        $resourceAttributes['price_currency'] ?? null,
        $resourceAttributes['price_units'] ?? null,
        $resourceAttributes['price_nanos'] ?? null,
        $resourceAttributes['type'] ?? null,
        $resourceAttributes['transacted_at'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['resource_version'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'id_at_source' => $this->id_at_source,
        'app_id' => $this->app_id,
        'price_currency' => $this->price_currency,
        'price_units' => $this->price_units,
        'price_nanos' => $this->price_nanos,
        'type' => $this->type,
        'transacted_at' => $this->transacted_at,
        'created_at' => $this->created_at,
        'resource_version' => $this->resource_version,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>