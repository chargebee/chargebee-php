<?php

namespace Chargebee\Resources\Invoice;

class ReferenceTransaction  { 
    /**
    *
    * @var ?int $applied_amount
    */
    public ?int $applied_amount;
    
    /**
    *
    * @var ?int $applied_at
    */
    public ?int $applied_at;
    
    /**
    *
    * @var ?string $txn_id
    */
    public ?string $txn_id;
    
    /**
    *
    * @var ?string $txn_status
    */
    public ?string $txn_status;
    
    /**
    *
    * @var ?int $txn_date
    */
    public ?int $txn_date;
    
    /**
    *
    * @var ?int $txn_amount
    */
    public ?int $txn_amount;
    
    /**
    *
    * @var ?string $txn_type
    */
    public ?string $txn_type;
    
    /**
    *
    * @var ?int $amount_capturable
    */
    public ?int $amount_capturable;
    
    /**
    *
    * @var ?string $authorization_reason
    */
    public ?string $authorization_reason;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "applied_amount" , "applied_at" , "txn_id" , "txn_status" , "txn_date" , "txn_amount" , "txn_type" , "amount_capturable" , "authorization_reason"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?int $applied_amount,
        ?int $applied_at,
        ?string $txn_id,
        ?string $txn_status,
        ?int $txn_date,
        ?int $txn_amount,
        ?string $txn_type,
        ?int $amount_capturable,
        ?string $authorization_reason,
    )
    { 
        $this->applied_amount = $applied_amount;
        $this->applied_at = $applied_at;
        $this->txn_id = $txn_id;
        $this->txn_status = $txn_status;
        $this->txn_date = $txn_date;
        $this->txn_amount = $txn_amount;
        $this->txn_type = $txn_type;
        $this->amount_capturable = $amount_capturable;
        $this->authorization_reason = $authorization_reason;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['applied_amount'] ?? null,
        $resourceAttributes['applied_at'] ?? null,
        $resourceAttributes['txn_id'] ?? null,
        $resourceAttributes['txn_status'] ?? null,
        $resourceAttributes['txn_date'] ?? null,
        $resourceAttributes['txn_amount'] ?? null,
        $resourceAttributes['txn_type'] ?? null,
        $resourceAttributes['amount_capturable'] ?? null,
        $resourceAttributes['authorization_reason'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['applied_amount' => $this->applied_amount,
        'applied_at' => $this->applied_at,
        'txn_id' => $this->txn_id,
        'txn_status' => $this->txn_status,
        'txn_date' => $this->txn_date,
        'txn_amount' => $this->txn_amount,
        'txn_type' => $this->txn_type,
        'amount_capturable' => $this->amount_capturable,
        'authorization_reason' => $this->authorization_reason,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>