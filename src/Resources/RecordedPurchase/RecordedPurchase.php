<?php

namespace Chargebee\Resources\RecordedPurchase;

class RecordedPurchase  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?string $customer_id
    */
    public ?string $customer_id;
    
    /**
    *
    * @var ?string $app_id
    */
    public ?string $app_id;
    
    /**
    *
    * @var ?string $omnichannel_transaction_id
    */
    public ?string $omnichannel_transaction_id;
    
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
    * @var ?ErrorDetail $error_detail
    */
    public ?ErrorDetail $error_detail;
    
    /**
    *
    * @var ?\Chargebee\Resources\RecordedPurchase\Enums\Source $source
    */
    public ?\Chargebee\Resources\RecordedPurchase\Enums\Source $source;
    
    /**
    *
    * @var ?\Chargebee\Resources\RecordedPurchase\Enums\Status $status
    */
    public ?\Chargebee\Resources\RecordedPurchase\Enums\Status $status;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "customer_id" , "app_id" , "omnichannel_transaction_id" , "created_at" , "resource_version" , "linked_omnichannel_subscriptions" , "error_detail"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $customer_id,
        ?string $app_id,
        ?string $omnichannel_transaction_id,
        ?int $created_at,
        ?int $resource_version,
        ?array $linked_omnichannel_subscriptions,
        ?ErrorDetail $error_detail,
        ?\Chargebee\Resources\RecordedPurchase\Enums\Source $source,
        ?\Chargebee\Resources\RecordedPurchase\Enums\Status $status,
    )
    { 
        $this->id = $id;
        $this->customer_id = $customer_id;
        $this->app_id = $app_id;
        $this->omnichannel_transaction_id = $omnichannel_transaction_id;
        $this->created_at = $created_at;
        $this->resource_version = $resource_version;
        $this->linked_omnichannel_subscriptions = $linked_omnichannel_subscriptions;
        $this->error_detail = $error_detail;  
        $this->source = $source;
        $this->status = $status;
    }

    public static function from(array $resourceAttributes): self
    { 
        $linked_omnichannel_subscriptions = array_map(fn (array $result): LinkedOmnichannelSubscription =>  LinkedOmnichannelSubscription::from(
            $result
        ), $resourceAttributes['linked_omnichannel_subscriptions'] ?? []);
        
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['customer_id'] ?? null,
        $resourceAttributes['app_id'] ?? null,
        $resourceAttributes['omnichannel_transaction_id'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['resource_version'] ?? null,
        $linked_omnichannel_subscriptions,
        isset($resourceAttributes['error_detail']) ? ErrorDetail::from($resourceAttributes['error_detail']) : null,
        
         
        isset($resourceAttributes['source']) ? \Chargebee\Resources\RecordedPurchase\Enums\Source::tryFromValue($resourceAttributes['source']) : null,
        
        isset($resourceAttributes['status']) ? \Chargebee\Resources\RecordedPurchase\Enums\Status::tryFromValue($resourceAttributes['status']) : null,
        
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['id' => $this->id,
        'customer_id' => $this->customer_id,
        'app_id' => $this->app_id,
        'omnichannel_transaction_id' => $this->omnichannel_transaction_id,
        'created_at' => $this->created_at,
        'resource_version' => $this->resource_version,
        
        
        
        'source' => $this->source?->value,
        
        'status' => $this->status?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        if($this->error_detail instanceof ErrorDetail){
            $data['error_detail'] = $this->error_detail->toArray();
        }
        
        if($this->linked_omnichannel_subscriptions !== []){
            $data['linked_omnichannel_subscriptions'] = array_map(
                fn (LinkedOmnichannelSubscription $linked_omnichannel_subscriptions): array => $linked_omnichannel_subscriptions->toArray(),
                $this->linked_omnichannel_subscriptions
            );
        }

        
        return $data;
    }
}
?>