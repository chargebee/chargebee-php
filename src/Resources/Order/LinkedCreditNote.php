<?php

namespace Chargebee\Resources\Order;

class LinkedCreditNote  { 
    /**
    *
    * @var ?int $amount
    */
    public ?int $amount;
    
    /**
    *
    * @var ?string $type
    */
    public ?string $type;
    
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
    * @var ?int $amount_adjusted
    */
    public ?int $amount_adjusted;
    
    /**
    *
    * @var ?int $amount_refunded
    */
    public ?int $amount_refunded;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "amount" , "type" , "id" , "status" , "amount_adjusted" , "amount_refunded"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?int $amount,
        ?string $type,
        ?string $id,
        ?string $status,
        ?int $amount_adjusted,
        ?int $amount_refunded,
    )
    { 
        $this->amount = $amount;
        $this->type = $type;
        $this->id = $id;
        $this->status = $status;
        $this->amount_adjusted = $amount_adjusted;
        $this->amount_refunded = $amount_refunded;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['amount'] ?? null,
        $resourceAttributes['type'] ?? null,
        $resourceAttributes['id'] ?? null,
        $resourceAttributes['status'] ?? null,
        $resourceAttributes['amount_adjusted'] ?? null,
        $resourceAttributes['amount_refunded'] ?? null,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['amount' => $this->amount,
        'type' => $this->type,
        'id' => $this->id,
        'status' => $this->status,
        'amount_adjusted' => $this->amount_adjusted,
        'amount_refunded' => $this->amount_refunded,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>