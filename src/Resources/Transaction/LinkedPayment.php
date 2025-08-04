<?php

namespace Chargebee\Resources\Transaction;

class LinkedPayment  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?int $amount
    */
    public ?int $amount;
    
    /**
    *
    * @var ?int $date
    */
    public ?int $date;
    
    /**
    *
    * @var ?\Chargebee\Resources\Transaction\ClassBasedEnums\LinkedPaymentStatus $status
    */
    public ?\Chargebee\Resources\Transaction\ClassBasedEnums\LinkedPaymentStatus $status;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "amount" , "date"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?int $amount,
        ?int $date,
        ?\Chargebee\Resources\Transaction\ClassBasedEnums\LinkedPaymentStatus $status,
    )
    { 
        $this->id = $id;
        $this->amount = $amount;
        $this->date = $date;  
        $this->status = $status;
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['amount'] ?? null,
        $resourceAttributes['date'] ?? null,
        
         
        isset($resourceAttributes['status']) ? \Chargebee\Resources\Transaction\ClassBasedEnums\LinkedPaymentStatus::tryFromValue($resourceAttributes['status']) : null,
        
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['id' => $this->id,
        'amount' => $this->amount,
        'date' => $this->date,
        
        'status' => $this->status?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>