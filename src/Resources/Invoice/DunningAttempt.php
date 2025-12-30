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
    * @var ?string $dunning_type
    */
    public ?string $dunning_type;
    
    /**
    *
    * @var ?int $created_at
    */
    public ?int $created_at;
    
    /**
    *
    * @var ?string $txn_status
    */
    public ?string $txn_status;
    
    /**
    *
    * @var ?int $txn_amount
    */
    public ?int $txn_amount;
    
    /**
    *
    * @var ?string $retry_engine
    */
    public ?string $retry_engine;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "attempt" , "transaction_id" , "dunning_type" , "created_at" , "txn_status" , "txn_amount" , "retry_engine"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?int $attempt,
        ?string $transaction_id,
        ?string $dunning_type,
        ?int $created_at,
        ?string $txn_status,
        ?int $txn_amount,
        ?string $retry_engine,
    )
    { 
        $this->attempt = $attempt;
        $this->transaction_id = $transaction_id;
        $this->dunning_type = $dunning_type;
        $this->created_at = $created_at;
        $this->txn_status = $txn_status;
        $this->txn_amount = $txn_amount;
        $this->retry_engine = $retry_engine;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['attempt'] ?? null,
        $resourceAttributes['transaction_id'] ?? null,
        $resourceAttributes['dunning_type'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['txn_status'] ?? null,
        $resourceAttributes['txn_amount'] ?? null,
        $resourceAttributes['retry_engine'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['attempt' => $this->attempt,
        'transaction_id' => $this->transaction_id,
        'dunning_type' => $this->dunning_type,
        'created_at' => $this->created_at,
        'txn_status' => $this->txn_status,
        'txn_amount' => $this->txn_amount,
        'retry_engine' => $this->retry_engine,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>