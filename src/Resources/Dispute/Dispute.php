<?php

namespace Chargebee\Resources\Dispute;

class Dispute  { 
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
    * @var ?string $transaction_id
    */
    public ?string $transaction_id;
    
    /**
    *
    * @var ?string $gateway_account_id
    */
    public ?string $gateway_account_id;
    
    /**
    *
    * @var ?string $id_at_gateway
    */
    public ?string $id_at_gateway;
    
    /**
    *
    * @var ?string $currency_code
    */
    public ?string $currency_code;
    
    /**
    *
    * @var ?int $amount
    */
    public ?int $amount;
    
    /**
    *
    * @var ?string $reason
    */
    public ?string $reason;
    
    /**
    *
    * @var ?bool $is_partial_dispute
    */
    public ?bool $is_partial_dispute;
    
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
    * @var ?int $updated_at
    */
    public ?int $updated_at;
    
    /**
    *
    * @var ?\Chargebee\Resources\Dispute\Enums\Status $status
    */
    public ?\Chargebee\Resources\Dispute\Enums\Status $status;
    
    /**
    *
    * @var ?\Chargebee\Resources\Dispute\Enums\Type $type
    */
    public ?\Chargebee\Resources\Dispute\Enums\Type $type;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "customer_id" , "transaction_id" , "gateway_account_id" , "id_at_gateway" , "currency_code" , "amount" , "reason" , "is_partial_dispute" , "created_at" , "resource_version" , "updated_at"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $customer_id,
        ?string $transaction_id,
        ?string $gateway_account_id,
        ?string $id_at_gateway,
        ?string $currency_code,
        ?int $amount,
        ?string $reason,
        ?bool $is_partial_dispute,
        ?int $created_at,
        ?int $resource_version,
        ?int $updated_at,
        ?\Chargebee\Resources\Dispute\Enums\Status $status,
        ?\Chargebee\Resources\Dispute\Enums\Type $type,
    )
    { 
        $this->id = $id;
        $this->customer_id = $customer_id;
        $this->transaction_id = $transaction_id;
        $this->gateway_account_id = $gateway_account_id;
        $this->id_at_gateway = $id_at_gateway;
        $this->currency_code = $currency_code;
        $this->amount = $amount;
        $this->reason = $reason;
        $this->is_partial_dispute = $is_partial_dispute;
        $this->created_at = $created_at;
        $this->resource_version = $resource_version;
        $this->updated_at = $updated_at;  
        $this->status = $status;
        $this->type = $type; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['customer_id'] ?? null,
        $resourceAttributes['transaction_id'] ?? null,
        $resourceAttributes['gateway_account_id'] ?? null,
        $resourceAttributes['id_at_gateway'] ?? null,
        $resourceAttributes['currency_code'] ?? null,
        $resourceAttributes['amount'] ?? null,
        $resourceAttributes['reason'] ?? null,
        $resourceAttributes['is_partial_dispute'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['resource_version'] ?? null,
        $resourceAttributes['updated_at'] ?? null,
        
         
        isset($resourceAttributes['status']) ? \Chargebee\Resources\Dispute\Enums\Status::tryFromValue($resourceAttributes['status']) : null,
        
        isset($resourceAttributes['type']) ? \Chargebee\Resources\Dispute\Enums\Type::tryFromValue($resourceAttributes['type']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'customer_id' => $this->customer_id,
        'transaction_id' => $this->transaction_id,
        'gateway_account_id' => $this->gateway_account_id,
        'id_at_gateway' => $this->id_at_gateway,
        'currency_code' => $this->currency_code,
        'amount' => $this->amount,
        'reason' => $this->reason,
        'is_partial_dispute' => $this->is_partial_dispute,
        'created_at' => $this->created_at,
        'resource_version' => $this->resource_version,
        'updated_at' => $this->updated_at,
        
        'status' => $this->status?->value,
        
        'type' => $this->type?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>