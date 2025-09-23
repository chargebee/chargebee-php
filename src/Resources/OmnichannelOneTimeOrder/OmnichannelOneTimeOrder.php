<?php

namespace Chargebee\Resources\OmnichannelOneTimeOrder;

class OmnichannelOneTimeOrder  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
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
    * @var ?string $id_at_source
    */
    public ?string $id_at_source;
    
    /**
    *
    * @var ?string $origin
    */
    public ?string $origin;
    
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
    * @var ?array<\Chargebee\Resources\OmnichannelOneTimeOrderItem\OmnichannelOneTimeOrderItem> $omnichannel_one_time_order_items
    */
    public ?array $omnichannel_one_time_order_items;
    
    /**
    *
    * @var ?\Chargebee\Resources\OmnichannelTransaction\OmnichannelTransaction $purchase_transaction
    */
    public ?\Chargebee\Resources\OmnichannelTransaction\OmnichannelTransaction $purchase_transaction;
    
    /**
    *
    * @var ?\Chargebee\Resources\OmnichannelOneTimeOrder\Enums\Source $source
    */
    public ?\Chargebee\Resources\OmnichannelOneTimeOrder\Enums\Source $source;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "app_id" , "customer_id" , "id_at_source" , "origin" , "created_at" , "resource_version" , "omnichannel_one_time_order_items" , "purchase_transaction"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $app_id,
        ?string $customer_id,
        ?string $id_at_source,
        ?string $origin,
        ?int $created_at,
        ?int $resource_version,
        ?array $omnichannel_one_time_order_items,
        ?\Chargebee\Resources\OmnichannelTransaction\OmnichannelTransaction $purchase_transaction,
        ?\Chargebee\Resources\OmnichannelOneTimeOrder\Enums\Source $source,
    )
    { 
        $this->id = $id;
        $this->app_id = $app_id;
        $this->customer_id = $customer_id;
        $this->id_at_source = $id_at_source;
        $this->origin = $origin;
        $this->created_at = $created_at;
        $this->resource_version = $resource_version;
        $this->omnichannel_one_time_order_items = $omnichannel_one_time_order_items;
        $this->purchase_transaction = $purchase_transaction;  
        $this->source = $source; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $omnichannel_one_time_order_items = array_map(fn (array $result): \Chargebee\Resources\OmnichannelOneTimeOrderItem\OmnichannelOneTimeOrderItem =>  \Chargebee\Resources\OmnichannelOneTimeOrderItem\OmnichannelOneTimeOrderItem::from(
            $result
        ), $resourceAttributes['omnichannel_one_time_order_items'] ?? []);
        
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['app_id'] ?? null,
        $resourceAttributes['customer_id'] ?? null,
        $resourceAttributes['id_at_source'] ?? null,
        $resourceAttributes['origin'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['resource_version'] ?? null,
        $omnichannel_one_time_order_items,
        isset($resourceAttributes['purchase_transaction']) ? \Chargebee\Resources\OmnichannelTransaction\OmnichannelTransaction::from($resourceAttributes['purchase_transaction']) : null,
        
         
        isset($resourceAttributes['source']) ? \Chargebee\Resources\OmnichannelOneTimeOrder\Enums\Source::tryFromValue($resourceAttributes['source']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'app_id' => $this->app_id,
        'customer_id' => $this->customer_id,
        'id_at_source' => $this->id_at_source,
        'origin' => $this->origin,
        'created_at' => $this->created_at,
        'resource_version' => $this->resource_version,
        
        
        
        'source' => $this->source?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        if($this->purchase_transaction instanceof \Chargebee\Resources\OmnichannelTransaction\OmnichannelTransaction){
            $data['purchase_transaction'] = $this->purchase_transaction->toArray();
        }
        
        if($this->omnichannel_one_time_order_items !== []){
            $data['omnichannel_one_time_order_items'] = array_map(
                fn (\Chargebee\Resources\OmnichannelOneTimeOrderItem\OmnichannelOneTimeOrderItem $omnichannel_one_time_order_items): array => $omnichannel_one_time_order_items->toArray(),
                $this->omnichannel_one_time_order_items
            );
        }

        
        return $data;
    }
}
?>