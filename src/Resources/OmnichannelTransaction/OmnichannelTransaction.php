<?php

namespace Chargebee\Resources\OmnichannelTransaction;

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
    *
    * @var ?array<LinkedOmnichannelSubscription> $linked_omnichannel_subscriptions
    */
    public ?array $linked_omnichannel_subscriptions;
    
    /**
    *
    * @var ?array<LinkedOmnichannelOneTimeOrder> $linked_omnichannel_one_time_orders
    */
    public ?array $linked_omnichannel_one_time_orders;
    
    /**
    *
    * @var ?\Chargebee\Resources\OmnichannelTransaction\Enums\Type $type
    */
    public ?\Chargebee\Resources\OmnichannelTransaction\Enums\Type $type;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "id_at_source" , "app_id" , "price_currency" , "price_units" , "price_nanos" , "transacted_at" , "created_at" , "resource_version" , "linked_omnichannel_subscriptions" , "linked_omnichannel_one_time_orders"  ];

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
        ?int $transacted_at,
        ?int $created_at,
        ?int $resource_version,
        ?array $linked_omnichannel_subscriptions,
        ?array $linked_omnichannel_one_time_orders,
        ?\Chargebee\Resources\OmnichannelTransaction\Enums\Type $type,
    )
    { 
        $this->id = $id;
        $this->id_at_source = $id_at_source;
        $this->app_id = $app_id;
        $this->price_currency = $price_currency;
        $this->price_units = $price_units;
        $this->price_nanos = $price_nanos;
        $this->transacted_at = $transacted_at;
        $this->created_at = $created_at;
        $this->resource_version = $resource_version;
        $this->linked_omnichannel_subscriptions = $linked_omnichannel_subscriptions;
        $this->linked_omnichannel_one_time_orders = $linked_omnichannel_one_time_orders;  
        $this->type = $type; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $linked_omnichannel_subscriptions = array_map(fn (array $result): LinkedOmnichannelSubscription =>  LinkedOmnichannelSubscription::from(
            $result
        ), $resourceAttributes['linked_omnichannel_subscriptions'] ?? []);
        
        $linked_omnichannel_one_time_orders = array_map(fn (array $result): LinkedOmnichannelOneTimeOrder =>  LinkedOmnichannelOneTimeOrder::from(
            $result
        ), $resourceAttributes['linked_omnichannel_one_time_orders'] ?? []);
        
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['id_at_source'] ?? null,
        $resourceAttributes['app_id'] ?? null,
        $resourceAttributes['price_currency'] ?? null,
        $resourceAttributes['price_units'] ?? null,
        $resourceAttributes['price_nanos'] ?? null,
        $resourceAttributes['transacted_at'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['resource_version'] ?? null,
        $linked_omnichannel_subscriptions,
        $linked_omnichannel_one_time_orders,
        
         
        isset($resourceAttributes['type']) ? \Chargebee\Resources\OmnichannelTransaction\Enums\Type::tryFromValue($resourceAttributes['type']) : null,
         
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
        'transacted_at' => $this->transacted_at,
        'created_at' => $this->created_at,
        'resource_version' => $this->resource_version,
        
        
        
        'type' => $this->type?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        
        if($this->linked_omnichannel_subscriptions !== []){
            $data['linked_omnichannel_subscriptions'] = array_map(
                fn (LinkedOmnichannelSubscription $linked_omnichannel_subscriptions): array => $linked_omnichannel_subscriptions->toArray(),
                $this->linked_omnichannel_subscriptions
            );
        }
        if($this->linked_omnichannel_one_time_orders !== []){
            $data['linked_omnichannel_one_time_orders'] = array_map(
                fn (LinkedOmnichannelOneTimeOrder $linked_omnichannel_one_time_orders): array => $linked_omnichannel_one_time_orders->toArray(),
                $this->linked_omnichannel_one_time_orders
            );
        }

        
        return $data;
    }
}
?>