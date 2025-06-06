<?php

namespace Chargebee\Resources\CreditNote;

class LinkedRefund  { 
    /**
    *
    * @var ?string $txn_id
    */
    public ?string $txn_id;
    
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
    * @var ?string $refund_reason_code
    */
    public ?string $refund_reason_code;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "txn_id" , "applied_amount" , "applied_at" , "txn_status" , "txn_date" , "txn_amount" , "refund_reason_code"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $txn_id,
        ?int $applied_amount,
        ?int $applied_at,
        ?string $txn_status,
        ?int $txn_date,
        ?int $txn_amount,
        ?string $refund_reason_code,
    )
    { 
        $this->txn_id = $txn_id;
        $this->applied_amount = $applied_amount;
        $this->applied_at = $applied_at;
        $this->txn_status = $txn_status;
        $this->txn_date = $txn_date;
        $this->txn_amount = $txn_amount;
        $this->refund_reason_code = $refund_reason_code;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['txn_id'] ?? null,
        $resourceAttributes['applied_amount'] ?? null,
        $resourceAttributes['applied_at'] ?? null,
        $resourceAttributes['txn_status'] ?? null,
        $resourceAttributes['txn_date'] ?? null,
        $resourceAttributes['txn_amount'] ?? null,
        $resourceAttributes['refund_reason_code'] ?? null,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['txn_id' => $this->txn_id,
        'applied_amount' => $this->applied_amount,
        'applied_at' => $this->applied_at,
        'txn_status' => $this->txn_status,
        'txn_date' => $this->txn_date,
        'txn_amount' => $this->txn_amount,
        'refund_reason_code' => $this->refund_reason_code,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>