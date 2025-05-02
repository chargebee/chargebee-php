<?php

namespace Chargebee\Resources\Order;

class ResentOrder  { 
    /**
    *
    * @var ?string $order_id
    */
    public ?string $order_id;
    
    /**
    *
    * @var ?string $reason
    */
    public ?string $reason;
    
    /**
    *
    * @var ?int $amount
    */
    public ?int $amount;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "order_id" , "reason" , "amount"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $order_id,
        ?string $reason,
        ?int $amount,
    )
    { 
        $this->order_id = $order_id;
        $this->reason = $reason;
        $this->amount = $amount;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['order_id'] ?? null,
        $resourceAttributes['reason'] ?? null,
        $resourceAttributes['amount'] ?? null,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['order_id' => $this->order_id,
        'reason' => $this->reason,
        'amount' => $this->amount,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>