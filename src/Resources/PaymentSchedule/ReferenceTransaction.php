<?php

namespace Chargebee\Resources\PaymentSchedule;

class ReferenceTransaction  { 
    /**
    *
    * @var ?string $schedule_entry_id
    */
    public ?string $schedule_entry_id;
    
    /**
    *
    * @var ?int $applied_amount
    */
    public ?int $applied_amount;
    
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
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "schedule_entry_id" , "applied_amount" , "txn_id" , "txn_status" , "txn_date" , "txn_amount"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $schedule_entry_id,
        ?int $applied_amount,
        ?string $txn_id,
        ?string $txn_status,
        ?int $txn_date,
        ?int $txn_amount,
    )
    { 
        $this->schedule_entry_id = $schedule_entry_id;
        $this->applied_amount = $applied_amount;
        $this->txn_id = $txn_id;
        $this->txn_status = $txn_status;
        $this->txn_date = $txn_date;
        $this->txn_amount = $txn_amount;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['schedule_entry_id'] ?? null,
        $resourceAttributes['applied_amount'] ?? null,
        $resourceAttributes['txn_id'] ?? null,
        $resourceAttributes['txn_status'] ?? null,
        $resourceAttributes['txn_date'] ?? null,
        $resourceAttributes['txn_amount'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['schedule_entry_id' => $this->schedule_entry_id,
        'applied_amount' => $this->applied_amount,
        'txn_id' => $this->txn_id,
        'txn_status' => $this->txn_status,
        'txn_date' => $this->txn_date,
        'txn_amount' => $this->txn_amount,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>