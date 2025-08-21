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
    * @var ?string $status
    */
    public ?string $status;
    
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
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "status" , "amount" , "date"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $status,
        ?int $amount,
        ?int $date,
    )
    { 
        $this->id = $id;
        $this->status = $status;
        $this->amount = $amount;
        $this->date = $date;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['status'] ?? null,
        $resourceAttributes['amount'] ?? null,
        $resourceAttributes['date'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'status' => $this->status,
        'amount' => $this->amount,
        'date' => $this->date,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>