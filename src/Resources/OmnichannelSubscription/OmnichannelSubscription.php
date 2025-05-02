<?php

namespace Chargebee\Resources\OmnichannelSubscription;

class OmnichannelSubscription  { 
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
    * @var ?string $customer_id
    */
    public ?string $customer_id;
    
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
    * @var ?array<\Chargebee\Resources\OmnichannelSubscriptionItem\OmnichannelSubscriptionItem> $omnichannel_subscription_items
    */
    public ?array $omnichannel_subscription_items;
    
    /**
    *
    * @var ?OmnichannelTransaction $initial_purchase_transaction
    */
    public ?OmnichannelTransaction $initial_purchase_transaction;
    
    /**
    *
    * @var ?\Chargebee\Resources\OmnichannelSubscription\Enums\Source $source
    */
    public ?\Chargebee\Resources\OmnichannelSubscription\Enums\Source $source;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "id_at_source" , "app_id" , "customer_id" , "created_at" , "resource_version" , "omnichannel_subscription_items" , "initial_purchase_transaction"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $id_at_source,
        ?string $app_id,
        ?string $customer_id,
        ?int $created_at,
        ?int $resource_version,
        ?array $omnichannel_subscription_items,
        ?OmnichannelTransaction $initial_purchase_transaction,
        ?\Chargebee\Resources\OmnichannelSubscription\Enums\Source $source,
    )
    { 
        $this->id = $id;
        $this->id_at_source = $id_at_source;
        $this->app_id = $app_id;
        $this->customer_id = $customer_id;
        $this->created_at = $created_at;
        $this->resource_version = $resource_version;
        $this->omnichannel_subscription_items = $omnichannel_subscription_items;
        $this->initial_purchase_transaction = $initial_purchase_transaction;  
        $this->source = $source;
    }

    public static function from(array $resourceAttributes): self
    { 
        $omnichannel_subscription_items = array_map(fn (array $result): \Chargebee\Resources\OmnichannelSubscriptionItem\OmnichannelSubscriptionItem =>  \Chargebee\Resources\OmnichannelSubscriptionItem\OmnichannelSubscriptionItem::from(
            $result
        ), $resourceAttributes['omnichannel_subscription_items'] ?? []);
        
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['id_at_source'] ?? null,
        $resourceAttributes['app_id'] ?? null,
        $resourceAttributes['customer_id'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['resource_version'] ?? null,
        $omnichannel_subscription_items,
        isset($resourceAttributes['initial_purchase_transaction']) ? OmnichannelTransaction::from($resourceAttributes['initial_purchase_transaction']) : null,
        
         
        isset($resourceAttributes['source']) ? \Chargebee\Resources\OmnichannelSubscription\Enums\Source::tryFromValue($resourceAttributes['source']) : null,
        
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['id' => $this->id,
        'id_at_source' => $this->id_at_source,
        'app_id' => $this->app_id,
        'customer_id' => $this->customer_id,
        'created_at' => $this->created_at,
        'resource_version' => $this->resource_version,
        
        
        
        'source' => $this->source?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        if($this->initial_purchase_transaction instanceof OmnichannelTransaction){
            $data['initial_purchase_transaction'] = $this->initial_purchase_transaction->toArray();
        }
        
        if($this->omnichannel_subscription_items !== []){
            $data['omnichannel_subscription_items'] = array_map(
                fn (\Chargebee\Resources\OmnichannelSubscriptionItem\OmnichannelSubscriptionItem $omnichannel_subscription_items): array => $omnichannel_subscription_items->toArray(),
                $this->omnichannel_subscription_items
            );
        }

        
        return $data;
    }
}
?>