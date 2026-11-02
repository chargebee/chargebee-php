<?php

namespace Chargebee\Resources\CollectionsDispute;

class CollectionsDispute  { 
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
    * @var ?string $line_item_id
    */
    public ?string $line_item_id;
    
    /**
    *
    * @var ?string $currency_code
    */
    public ?string $currency_code;
    
    /**
    *
    * @var ?int $billed_amount
    */
    public ?int $billed_amount;
    
    /**
    *
    * @var ?int $claimed_deduction
    */
    public ?int $claimed_deduction;
    
    /**
    *
    * @var ?string $dispute_reason_code
    */
    public ?string $dispute_reason_code;
    
    /**
    *
    * @var ?string $resolved_reason_code
    */
    public ?string $resolved_reason_code;
    
    /**
    *
    * @var ?string $reason
    */
    public ?string $reason;
    
    /**
    *
    * @var ?int $opened_at
    */
    public ?int $opened_at;
    
    /**
    *
    * @var ?int $resolved_at
    */
    public ?int $resolved_at;
    
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
    * @var ?int $undisputed_amount
    */
    public ?int $undisputed_amount;
    
    /**
    *
    * @var ?\Chargebee\Resources\CollectionsDispute\Enums\Status $status
    */
    public ?\Chargebee\Resources\CollectionsDispute\Enums\Status $status;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "customer_id" , "invoice_id" , "line_item_id" , "currency_code" , "billed_amount" , "claimed_deduction" , "dispute_reason_code" , "resolved_reason_code" , "reason" , "opened_at" , "resolved_at" , "created_at" , "updated_at" , "resource_version" , "undisputed_amount"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $customer_id,
        ?string $invoice_id,
        ?string $line_item_id,
        ?string $currency_code,
        ?int $billed_amount,
        ?int $claimed_deduction,
        ?string $dispute_reason_code,
        ?string $resolved_reason_code,
        ?string $reason,
        ?int $opened_at,
        ?int $resolved_at,
        ?int $created_at,
        ?int $updated_at,
        ?int $resource_version,
        ?int $undisputed_amount,
        ?\Chargebee\Resources\CollectionsDispute\Enums\Status $status,
    )
    { 
        $this->id = $id;
        $this->customer_id = $customer_id;
        $this->invoice_id = $invoice_id;
        $this->line_item_id = $line_item_id;
        $this->currency_code = $currency_code;
        $this->billed_amount = $billed_amount;
        $this->claimed_deduction = $claimed_deduction;
        $this->dispute_reason_code = $dispute_reason_code;
        $this->resolved_reason_code = $resolved_reason_code;
        $this->reason = $reason;
        $this->opened_at = $opened_at;
        $this->resolved_at = $resolved_at;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->resource_version = $resource_version;
        $this->undisputed_amount = $undisputed_amount;  
        $this->status = $status; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['customer_id'] ?? null,
        $resourceAttributes['invoice_id'] ?? null,
        $resourceAttributes['line_item_id'] ?? null,
        $resourceAttributes['currency_code'] ?? null,
        $resourceAttributes['billed_amount'] ?? null,
        $resourceAttributes['claimed_deduction'] ?? null,
        $resourceAttributes['dispute_reason_code'] ?? null,
        $resourceAttributes['resolved_reason_code'] ?? null,
        $resourceAttributes['reason'] ?? null,
        $resourceAttributes['opened_at'] ?? null,
        $resourceAttributes['resolved_at'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['updated_at'] ?? null,
        $resourceAttributes['resource_version'] ?? null,
        $resourceAttributes['undisputed_amount'] ?? null,
        
         
        isset($resourceAttributes['status']) ? \Chargebee\Resources\CollectionsDispute\Enums\Status::tryFromValue($resourceAttributes['status']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'customer_id' => $this->customer_id,
        'invoice_id' => $this->invoice_id,
        'line_item_id' => $this->line_item_id,
        'currency_code' => $this->currency_code,
        'billed_amount' => $this->billed_amount,
        'claimed_deduction' => $this->claimed_deduction,
        'dispute_reason_code' => $this->dispute_reason_code,
        'resolved_reason_code' => $this->resolved_reason_code,
        'reason' => $this->reason,
        'opened_at' => $this->opened_at,
        'resolved_at' => $this->resolved_at,
        'created_at' => $this->created_at,
        'updated_at' => $this->updated_at,
        'resource_version' => $this->resource_version,
        'undisputed_amount' => $this->undisputed_amount,
        
        'status' => $this->status?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>