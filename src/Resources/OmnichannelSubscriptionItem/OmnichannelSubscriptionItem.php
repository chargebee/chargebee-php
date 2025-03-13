<?php

namespace Chargebee\Resources\OmnichannelSubscriptionItem;

class OmnichannelSubscriptionItem  { 
    /**
    *
    * @var string $id
    */
    public string $id;
    
    /**
    *
    * @var string $item_id_at_source
    */
    public string $item_id_at_source;
    
    /**
    *
    * @var ?int $current_term_start
    */
    public ?int $current_term_start;
    
    /**
    *
    * @var ?int $current_term_end
    */
    public ?int $current_term_end;
    
    /**
    *
    * @var ?int $expired_at
    */
    public ?int $expired_at;
    
    /**
    *
    * @var ?int $cancelled_at
    */
    public ?int $cancelled_at;
    
    /**
    *
    * @var ?int $grace_period_expires_at
    */
    public ?int $grace_period_expires_at;
    
    /**
    *
    * @var bool $has_scheduled_changes
    */
    public bool $has_scheduled_changes;
    
    /**
    *
    * @var ?int $resource_version
    */
    public ?int $resource_version;
    
    /**
    *
    * @var \Chargebee\Resources\OmnichannelSubscriptionItem\Enums\Status $status
    */
    public \Chargebee\Resources\OmnichannelSubscriptionItem\Enums\Status $status;
    
    /**
    *
    * @var ?\Chargebee\Resources\OmnichannelSubscriptionItem\Enums\AutoRenewStatus $auto_renew_status
    */
    public ?\Chargebee\Resources\OmnichannelSubscriptionItem\Enums\AutoRenewStatus $auto_renew_status;
    
    /**
    *
    * @var ?\Chargebee\Resources\OmnichannelSubscriptionItem\Enums\ExpirationReason $expiration_reason
    */
    public ?\Chargebee\Resources\OmnichannelSubscriptionItem\Enums\ExpirationReason $expiration_reason;
    
    /**
    *
    * @var ?\Chargebee\Resources\OmnichannelSubscriptionItem\Enums\CancellationReason $cancellation_reason
    */
    public ?\Chargebee\Resources\OmnichannelSubscriptionItem\Enums\CancellationReason $cancellation_reason;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "item_id_at_source" , "current_term_start" , "current_term_end" , "expired_at" , "cancelled_at" , "grace_period_expires_at" , "has_scheduled_changes" , "resource_version"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        string $id,
        string $item_id_at_source,
        ?int $current_term_start,
        ?int $current_term_end,
        ?int $expired_at,
        ?int $cancelled_at,
        ?int $grace_period_expires_at,
        bool $has_scheduled_changes,
        ?int $resource_version,
        \Chargebee\Resources\OmnichannelSubscriptionItem\Enums\Status $status,
        ?\Chargebee\Resources\OmnichannelSubscriptionItem\Enums\AutoRenewStatus $auto_renew_status,
        ?\Chargebee\Resources\OmnichannelSubscriptionItem\Enums\ExpirationReason $expiration_reason,
        ?\Chargebee\Resources\OmnichannelSubscriptionItem\Enums\CancellationReason $cancellation_reason,
    )
    { 
        $this->id = $id;
        $this->item_id_at_source = $item_id_at_source;
        $this->current_term_start = $current_term_start;
        $this->current_term_end = $current_term_end;
        $this->expired_at = $expired_at;
        $this->cancelled_at = $cancelled_at;
        $this->grace_period_expires_at = $grace_period_expires_at;
        $this->has_scheduled_changes = $has_scheduled_changes;
        $this->resource_version = $resource_version;  
        $this->status = $status;
        $this->auto_renew_status = $auto_renew_status;
        $this->expiration_reason = $expiration_reason;
        $this->cancellation_reason = $cancellation_reason;
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ,
        $resourceAttributes['item_id_at_source'] ,
        $resourceAttributes['current_term_start'] ?? null,
        $resourceAttributes['current_term_end'] ?? null,
        $resourceAttributes['expired_at'] ?? null,
        $resourceAttributes['cancelled_at'] ?? null,
        $resourceAttributes['grace_period_expires_at'] ?? null,
        $resourceAttributes['has_scheduled_changes'] ,
        $resourceAttributes['resource_version'] ?? null,
        
         
        isset($resourceAttributes['status']) ? \Chargebee\Resources\OmnichannelSubscriptionItem\Enums\Status::tryFromValue($resourceAttributes['status']) : null,
        
        isset($resourceAttributes['auto_renew_status']) ? \Chargebee\Resources\OmnichannelSubscriptionItem\Enums\AutoRenewStatus::tryFromValue($resourceAttributes['auto_renew_status']) : null,
        
        isset($resourceAttributes['expiration_reason']) ? \Chargebee\Resources\OmnichannelSubscriptionItem\Enums\ExpirationReason::tryFromValue($resourceAttributes['expiration_reason']) : null,
        
        isset($resourceAttributes['cancellation_reason']) ? \Chargebee\Resources\OmnichannelSubscriptionItem\Enums\CancellationReason::tryFromValue($resourceAttributes['cancellation_reason']) : null,
        
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['id' => $this->id,
        'item_id_at_source' => $this->item_id_at_source,
        'current_term_start' => $this->current_term_start,
        'current_term_end' => $this->current_term_end,
        'expired_at' => $this->expired_at,
        'cancelled_at' => $this->cancelled_at,
        'grace_period_expires_at' => $this->grace_period_expires_at,
        'has_scheduled_changes' => $this->has_scheduled_changes,
        'resource_version' => $this->resource_version,
        
        'status' => $this->status?->value,
        
        'auto_renew_status' => $this->auto_renew_status?->value,
        
        'expiration_reason' => $this->expiration_reason?->value,
        
        'cancellation_reason' => $this->cancellation_reason?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>