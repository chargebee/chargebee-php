<?php

namespace Chargebee\Resources\LedgerAccountBalance;

class ProvisionedBalance  { 
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
    * @var ?string $hold_amount
    */
    public ?string $hold_amount;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "total_balance" , "usable_balance" , "hold_amount"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $total_balance,
        ?string $usable_balance,
        ?string $hold_amount,
    )
    { 
        $this->total_balance = $total_balance;
        $this->usable_balance = $usable_balance;
        $this->hold_amount = $hold_amount;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['total_balance'] ?? null,
        $resourceAttributes['usable_balance'] ?? null,
        $resourceAttributes['hold_amount'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['total_balance' => $this->total_balance,
        'usable_balance' => $this->usable_balance,
        'hold_amount' => $this->hold_amount,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>