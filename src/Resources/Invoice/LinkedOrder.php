<?php

namespace Chargebee\Resources\Invoice;

class LinkedOrder  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?string $document_number
    */
    public ?string $document_number;
    
    /**
    *
    * @var ?string $reference_id
    */
    public ?string $reference_id;
    
    /**
    *
    * @var ?string $fulfillment_status
    */
    public ?string $fulfillment_status;
    
    /**
    *
    * @var ?string $batch_id
    */
    public ?string $batch_id;
    
    /**
    *
    * @var ?int $created_at
    */
    public ?int $created_at;
    
    /**
    *
    * @var ?\Chargebee\Resources\Invoice\ClassBasedEnums\LinkedOrderStatus $status
    */
    public ?\Chargebee\Resources\Invoice\ClassBasedEnums\LinkedOrderStatus $status;
    
    /**
    *
    * @var ?\Chargebee\Resources\Invoice\ClassBasedEnums\LinkedOrderOrderType $order_type
    */
    public ?\Chargebee\Resources\Invoice\ClassBasedEnums\LinkedOrderOrderType $order_type;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "document_number" , "reference_id" , "fulfillment_status" , "batch_id" , "created_at"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $document_number,
        ?string $reference_id,
        ?string $fulfillment_status,
        ?string $batch_id,
        ?int $created_at,
        ?\Chargebee\Resources\Invoice\ClassBasedEnums\LinkedOrderStatus $status,
        ?\Chargebee\Resources\Invoice\ClassBasedEnums\LinkedOrderOrderType $order_type,
    )
    { 
        $this->id = $id;
        $this->document_number = $document_number;
        $this->reference_id = $reference_id;
        $this->fulfillment_status = $fulfillment_status;
        $this->batch_id = $batch_id;
        $this->created_at = $created_at;  
        $this->status = $status;
        $this->order_type = $order_type;
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['document_number'] ?? null,
        $resourceAttributes['reference_id'] ?? null,
        $resourceAttributes['fulfillment_status'] ?? null,
        $resourceAttributes['batch_id'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        
         
        isset($resourceAttributes['status']) ? \Chargebee\Resources\Invoice\ClassBasedEnums\LinkedOrderStatus::tryFromValue($resourceAttributes['status']) : null,
        
        isset($resourceAttributes['order_type']) ? \Chargebee\Resources\Invoice\ClassBasedEnums\LinkedOrderOrderType::tryFromValue($resourceAttributes['order_type']) : null,
        
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['id' => $this->id,
        'document_number' => $this->document_number,
        'reference_id' => $this->reference_id,
        'fulfillment_status' => $this->fulfillment_status,
        'batch_id' => $this->batch_id,
        'created_at' => $this->created_at,
        
        'status' => $this->status?->value,
        
        'order_type' => $this->order_type?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>