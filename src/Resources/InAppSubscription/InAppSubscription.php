<?php

namespace Chargebee\Resources\InAppSubscription;

class InAppSubscription  { 
    /**
    *
    * @var ?string $app_id
    */
    public ?string $app_id;
    
    /**
    *
    * @var ?string $subscription_id
    */
    public ?string $subscription_id;
    
    /**
    *
    * @var ?string $customer_id
    */
    public ?string $customer_id;
    
    /**
    *
    * @var ?string $plan_id
    */
    public ?string $plan_id;
    
    /**
    *
    * @var ?string $invoice_id
    */
    public ?string $invoice_id;
    
    /**
    *
    * @var ?\Chargebee\Resources\InAppSubscription\Enums\StoreStatus $store_status
    */
    public ?\Chargebee\Resources\InAppSubscription\Enums\StoreStatus $store_status;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "app_id" , "subscription_id" , "customer_id" , "plan_id" , "invoice_id"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $app_id,
        ?string $subscription_id,
        ?string $customer_id,
        ?string $plan_id,
        ?string $invoice_id,
        ?\Chargebee\Resources\InAppSubscription\Enums\StoreStatus $store_status,
    )
    { 
        $this->app_id = $app_id;
        $this->subscription_id = $subscription_id;
        $this->customer_id = $customer_id;
        $this->plan_id = $plan_id;
        $this->invoice_id = $invoice_id;  
        $this->store_status = $store_status;
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['app_id'] ?? null,
        $resourceAttributes['subscription_id'] ?? null,
        $resourceAttributes['customer_id'] ?? null,
        $resourceAttributes['plan_id'] ?? null,
        $resourceAttributes['invoice_id'] ?? null,
        
         
        isset($resourceAttributes['store_status']) ? \Chargebee\Resources\InAppSubscription\Enums\StoreStatus::tryFromValue($resourceAttributes['store_status']) : null,
        
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['app_id' => $this->app_id,
        'subscription_id' => $this->subscription_id,
        'customer_id' => $this->customer_id,
        'plan_id' => $this->plan_id,
        'invoice_id' => $this->invoice_id,
        
        'store_status' => $this->store_status?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>