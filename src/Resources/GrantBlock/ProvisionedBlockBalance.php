<?php

namespace Chargebee\Resources\GrantBlock;

class ProvisionedBlockBalance  { 
    /**
    *
    * @var ?string $granted_amount
    */
    public ?string $granted_amount;
    
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
    *
    * @var ?string $used_amount
    */
    public ?string $used_amount;
    
    /**
    *
    * @var ?string $expired_amount
    */
    public ?string $expired_amount;
    
    /**
    *
    * @var ?string $rolled_over_amount
    */
    public ?string $rolled_over_amount;
    
    /**
    *
    * @var ?string $voided_amount
    */
    public ?string $voided_amount;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "granted_amount" , "total_balance" , "usable_balance" , "hold_amount" , "used_amount" , "expired_amount" , "rolled_over_amount" , "voided_amount"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $granted_amount,
        ?string $total_balance,
        ?string $usable_balance,
        ?string $hold_amount,
        ?string $used_amount,
        ?string $expired_amount,
        ?string $rolled_over_amount,
        ?string $voided_amount,
    )
    { 
        $this->granted_amount = $granted_amount;
        $this->total_balance = $total_balance;
        $this->usable_balance = $usable_balance;
        $this->hold_amount = $hold_amount;
        $this->used_amount = $used_amount;
        $this->expired_amount = $expired_amount;
        $this->rolled_over_amount = $rolled_over_amount;
        $this->voided_amount = $voided_amount;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['granted_amount'] ?? null,
        $resourceAttributes['total_balance'] ?? null,
        $resourceAttributes['usable_balance'] ?? null,
        $resourceAttributes['hold_amount'] ?? null,
        $resourceAttributes['used_amount'] ?? null,
        $resourceAttributes['expired_amount'] ?? null,
        $resourceAttributes['rolled_over_amount'] ?? null,
        $resourceAttributes['voided_amount'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['granted_amount' => $this->granted_amount,
        'total_balance' => $this->total_balance,
        'usable_balance' => $this->usable_balance,
        'hold_amount' => $this->hold_amount,
        'used_amount' => $this->used_amount,
        'expired_amount' => $this->expired_amount,
        'rolled_over_amount' => $this->rolled_over_amount,
        'voided_amount' => $this->voided_amount,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>