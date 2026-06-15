<?php

namespace Chargebee\Resources\LedgerAccountBalance;

class OverdraftBalance  { 
    /**
    *
    * @var ?bool $is_unlimited
    */
    public ?bool $is_unlimited;
    
    /**
    *
    * @var ?string $limit
    */
    public ?string $limit;
    
    /**
    *
    * @var ?string $total_balance
    */
    public ?string $total_balance;
    
    /**
    *
    * @var ?string $usable_balance
    */
    public ?string $usable_balance;
    
    /**
    *
    * @var ?string $used_amount
    */
    public ?string $used_amount;
    
    /**
    *
    * @var ?string $hold_amount
    */
    public ?string $hold_amount;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "is_unlimited" , "limit" , "total_balance" , "usable_balance" , "used_amount" , "hold_amount"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?bool $is_unlimited,
        ?string $limit,
        ?string $total_balance,
        ?string $usable_balance,
        ?string $used_amount,
        ?string $hold_amount,
    )
    { 
        $this->is_unlimited = $is_unlimited;
        $this->limit = $limit;
        $this->total_balance = $total_balance;
        $this->usable_balance = $usable_balance;
        $this->used_amount = $used_amount;
        $this->hold_amount = $hold_amount;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['is_unlimited'] ?? null,
        $resourceAttributes['limit'] ?? null,
        $resourceAttributes['total_balance'] ?? null,
        $resourceAttributes['usable_balance'] ?? null,
        $resourceAttributes['used_amount'] ?? null,
        $resourceAttributes['hold_amount'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['is_unlimited' => $this->is_unlimited,
        'limit' => $this->limit,
        'total_balance' => $this->total_balance,
        'usable_balance' => $this->usable_balance,
        'used_amount' => $this->used_amount,
        'hold_amount' => $this->hold_amount,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>