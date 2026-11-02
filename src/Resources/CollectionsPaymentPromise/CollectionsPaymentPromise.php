<?php

namespace Chargebee\Resources\CollectionsPaymentPromise;

class CollectionsPaymentPromise  { 
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
    * @var ?string $invoice_id
    */
    public ?string $invoice_id;
    
    /**
    *
    * @var ?string $reason
    */
    public ?string $reason;
    
    /**
    *
    * @var ?string $promised_by
    */
    public ?string $promised_by;
    
    /**
    *
    * @var ?int $promised_on
    */
    public ?int $promised_on;
    
    /**
    *
    * @var ?int $created_at
    */
    public ?int $created_at;
    
    /**
    *
    * @var ?int $updated_at
    */
    public ?int $updated_at;
    
    /**
    *
    * @var ?int $resource_version
    */
    public ?int $resource_version;
    
    /**
    *
    * @var ?\Chargebee\Resources\CollectionsPaymentPromise\Enums\Status $status
    */
    public ?\Chargebee\Resources\CollectionsPaymentPromise\Enums\Status $status;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "customer_id" , "invoice_id" , "reason" , "promised_by" , "promised_on" , "created_at" , "updated_at" , "resource_version"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $customer_id,
        ?string $invoice_id,
        ?string $reason,
        ?string $promised_by,
        ?int $promised_on,
        ?int $created_at,
        ?int $updated_at,
        ?int $resource_version,
        ?\Chargebee\Resources\CollectionsPaymentPromise\Enums\Status $status,
    )
    { 
        $this->id = $id;
        $this->customer_id = $customer_id;
        $this->invoice_id = $invoice_id;
        $this->reason = $reason;
        $this->promised_by = $promised_by;
        $this->promised_on = $promised_on;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->resource_version = $resource_version;  
        $this->status = $status; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['customer_id'] ?? null,
        $resourceAttributes['invoice_id'] ?? null,
        $resourceAttributes['reason'] ?? null,
        $resourceAttributes['promised_by'] ?? null,
        $resourceAttributes['promised_on'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['updated_at'] ?? null,
        $resourceAttributes['resource_version'] ?? null,
        
         
        isset($resourceAttributes['status']) ? \Chargebee\Resources\CollectionsPaymentPromise\Enums\Status::tryFromValue($resourceAttributes['status']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'customer_id' => $this->customer_id,
        'invoice_id' => $this->invoice_id,
        'reason' => $this->reason,
        'promised_by' => $this->promised_by,
        'promised_on' => $this->promised_on,
        'created_at' => $this->created_at,
        'updated_at' => $this->updated_at,
        'resource_version' => $this->resource_version,
        
        'status' => $this->status?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>