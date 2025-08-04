<?php

namespace Chargebee\Resources\Invoice;

class DunningAttempt  { 
    /**
    *
    * @var ?int $attempt
    */
    public ?int $attempt;
    
    /**
    *
    * @var ?string $transaction_id
    */
    public ?string $transaction_id;
    
    /**
    *
    * @var ?int $created_at
    */
    public ?int $created_at;
    
    /**
    *
    * @var ?int $txn_amount
    */
    public ?int $txn_amount;
    
    /**
    *
    * @var ?\Chargebee\ClassBasedEnums\DunningType $dunning_type
    */
    public ?\Chargebee\ClassBasedEnums\DunningType $dunning_type;
    
    /**
    *
    * @var ?\Chargebee\Resources\Transaction\ClassBasedEnums\Status $txn_status
    */
    public ?\Chargebee\Resources\Transaction\ClassBasedEnums\Status $txn_status;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "attempt" , "transaction_id" , "created_at" , "txn_amount"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?int $attempt,
        ?string $transaction_id,
        ?int $created_at,
        ?int $txn_amount,
        ?\Chargebee\ClassBasedEnums\DunningType $dunning_type,
        ?\Chargebee\Resources\Transaction\ClassBasedEnums\Status $txn_status,
    )
    { 
        $this->attempt = $attempt;
        $this->transaction_id = $transaction_id;
        $this->created_at = $created_at;
        $this->txn_amount = $txn_amount; 
        $this->dunning_type = $dunning_type; 
        $this->txn_status = $txn_status;
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['attempt'] ?? null,
        $resourceAttributes['transaction_id'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['txn_amount'] ?? null,
        
        
        isset($resourceAttributes['dunning_type']) ? \Chargebee\ClassBasedEnums\DunningType::tryFromValue($resourceAttributes['dunning_type']) : null,
         
        isset($resourceAttributes['txn_status']) ? \Chargebee\Resources\Transaction\ClassBasedEnums\Status::tryFromValue($resourceAttributes['txn_status']) : null,
        
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['attempt' => $this->attempt,
        'transaction_id' => $this->transaction_id,
        'created_at' => $this->created_at,
        'txn_amount' => $this->txn_amount,
        
        'dunning_type' => $this->dunning_type?->value,
        
        'txn_status' => $this->txn_status?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>