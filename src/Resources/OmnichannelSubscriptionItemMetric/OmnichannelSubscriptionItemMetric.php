<?php

namespace Chargebee\Resources\OmnichannelSubscriptionItemMetric;

class OmnichannelSubscriptionItemMetric  { 
    /**
    *
    * @var ?string $customer_id
    */
    public ?string $customer_id;
    
    /**
    *
    * @var ?string $omnichannel_subscription_id
    */
    public ?string $omnichannel_subscription_id;
    
    /**
    *
    * @var ?string $omnichannel_subscription_item_id
    */
    public ?string $omnichannel_subscription_item_id;
    
    /**
    *
    * @var ?string $item_id_at_source
    */
    public ?string $item_id_at_source;
    
    /**
    *
    * @var ?string $mrr_currency
    */
    public ?string $mrr_currency;
    
    /**
    *
    * @var ?int $mrr_units
    */
    public ?int $mrr_units;
    
    /**
    *
    * @var ?int $mrr_nanos
    */
    public ?int $mrr_nanos;
    
    /**
    *
    * @var ?int $effective_from
    */
    public ?int $effective_from;
    
    /**
    *
    * @var ?int $calculated_at
    */
    public ?int $calculated_at;
    
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
    protected static array $knownFields = [ "customer_id" , "omnichannel_subscription_id" , "omnichannel_subscription_item_id" , "item_id_at_source" , "mrr_currency" , "mrr_units" , "mrr_nanos" , "effective_from" , "calculated_at" , "created_at" , "resource_version"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $customer_id,
        ?string $omnichannel_subscription_id,
        ?string $omnichannel_subscription_item_id,
        ?string $item_id_at_source,
        ?string $mrr_currency,
        ?int $mrr_units,
        ?int $mrr_nanos,
        ?int $effective_from,
        ?int $calculated_at,
        ?int $created_at,
        ?int $resource_version,
    )
    { 
        $this->customer_id = $customer_id;
        $this->omnichannel_subscription_id = $omnichannel_subscription_id;
        $this->omnichannel_subscription_item_id = $omnichannel_subscription_item_id;
        $this->item_id_at_source = $item_id_at_source;
        $this->mrr_currency = $mrr_currency;
        $this->mrr_units = $mrr_units;
        $this->mrr_nanos = $mrr_nanos;
        $this->effective_from = $effective_from;
        $this->calculated_at = $calculated_at;
        $this->created_at = $created_at;
        $this->resource_version = $resource_version;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['customer_id'] ?? null,
        $resourceAttributes['omnichannel_subscription_id'] ?? null,
        $resourceAttributes['omnichannel_subscription_item_id'] ?? null,
        $resourceAttributes['item_id_at_source'] ?? null,
        $resourceAttributes['mrr_currency'] ?? null,
        $resourceAttributes['mrr_units'] ?? null,
        $resourceAttributes['mrr_nanos'] ?? null,
        $resourceAttributes['effective_from'] ?? null,
        $resourceAttributes['calculated_at'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['resource_version'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['customer_id' => $this->customer_id,
        'omnichannel_subscription_id' => $this->omnichannel_subscription_id,
        'omnichannel_subscription_item_id' => $this->omnichannel_subscription_item_id,
        'item_id_at_source' => $this->item_id_at_source,
        'mrr_currency' => $this->mrr_currency,
        'mrr_units' => $this->mrr_units,
        'mrr_nanos' => $this->mrr_nanos,
        'effective_from' => $this->effective_from,
        'calculated_at' => $this->calculated_at,
        'created_at' => $this->created_at,
        'resource_version' => $this->resource_version,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>