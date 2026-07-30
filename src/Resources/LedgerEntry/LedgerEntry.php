<?php

namespace Chargebee\Resources\LedgerEntry;

class LedgerEntry  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?string $subscription_id
    */
    public ?string $subscription_id;
    
    /**
    *
    * @var ?string $unit_id
    */
    public ?string $unit_id;
    
    /**
    *
    * @var ?string $amount
    */
    public ?string $amount;
    
    /**
    *
    * @var ?string $grant_block_start_balance
    */
    public ?string $grant_block_start_balance;
    
    /**
    *
    * @var ?string $grant_block_end_balance
    */
    public ?string $grant_block_end_balance;
    
    /**
    *
    * @var ?string $account_start_balance
    */
    public ?string $account_start_balance;
    
    /**
    *
    * @var ?string $account_end_balance
    */
    public ?string $account_end_balance;
    
    /**
    *
    * @var ?string $ledger_operation_id
    */
    public ?string $ledger_operation_id;
    
    /**
    *
    * @var ?string $grant_block_id
    */
    public ?string $grant_block_id;
    
    /**
    *
    * @var ?int $created_at
    */
    public ?int $created_at;
    
    /**
    *
    * @var ?int $modified_at
    */
    public ?int $modified_at;
    
    /**
    *
    * @var ?\Chargebee\Enums\Type $type
    */
    public ?\Chargebee\Enums\Type $type;
    
    /**
    *
    * @var ?\Chargebee\Resources\LedgerEntry\Enums\AccountType $account_type
    */
    public ?\Chargebee\Resources\LedgerEntry\Enums\AccountType $account_type;
    
    /**
    *
    * @var ?\Chargebee\Resources\LedgerEntry\Enums\UnitType $unit_type
    */
    public ?\Chargebee\Resources\LedgerEntry\Enums\UnitType $unit_type;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "subscription_id" , "unit_id" , "amount" , "grant_block_start_balance" , "grant_block_end_balance" , "account_start_balance" , "account_end_balance" , "ledger_operation_id" , "grant_block_id" , "created_at" , "modified_at"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $subscription_id,
        ?string $unit_id,
        ?string $amount,
        ?string $grant_block_start_balance,
        ?string $grant_block_end_balance,
        ?string $account_start_balance,
        ?string $account_end_balance,
        ?string $ledger_operation_id,
        ?string $grant_block_id,
        ?int $created_at,
        ?int $modified_at,
        ?\Chargebee\Enums\Type $type,
        ?\Chargebee\Resources\LedgerEntry\Enums\AccountType $account_type,
        ?\Chargebee\Resources\LedgerEntry\Enums\UnitType $unit_type,
    )
    { 
        $this->id = $id;
        $this->subscription_id = $subscription_id;
        $this->unit_id = $unit_id;
        $this->amount = $amount;
        $this->grant_block_start_balance = $grant_block_start_balance;
        $this->grant_block_end_balance = $grant_block_end_balance;
        $this->account_start_balance = $account_start_balance;
        $this->account_end_balance = $account_end_balance;
        $this->ledger_operation_id = $ledger_operation_id;
        $this->grant_block_id = $grant_block_id;
        $this->created_at = $created_at;
        $this->modified_at = $modified_at; 
        $this->type = $type; 
        $this->account_type = $account_type;
        $this->unit_type = $unit_type; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['subscription_id'] ?? null,
        $resourceAttributes['unit_id'] ?? null,
        $resourceAttributes['amount'] ?? null,
        $resourceAttributes['grant_block_start_balance'] ?? null,
        $resourceAttributes['grant_block_end_balance'] ?? null,
        $resourceAttributes['account_start_balance'] ?? null,
        $resourceAttributes['account_end_balance'] ?? null,
        $resourceAttributes['ledger_operation_id'] ?? null,
        $resourceAttributes['grant_block_id'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['modified_at'] ?? null,
        
        
        isset($resourceAttributes['type']) ? \Chargebee\Enums\Type::tryFromValue($resourceAttributes['type']) : null,
         
        isset($resourceAttributes['account_type']) ? \Chargebee\Resources\LedgerEntry\Enums\AccountType::tryFromValue($resourceAttributes['account_type']) : null,
        
        isset($resourceAttributes['unit_type']) ? \Chargebee\Resources\LedgerEntry\Enums\UnitType::tryFromValue($resourceAttributes['unit_type']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'subscription_id' => $this->subscription_id,
        'unit_id' => $this->unit_id,
        'amount' => $this->amount,
        'grant_block_start_balance' => $this->grant_block_start_balance,
        'grant_block_end_balance' => $this->grant_block_end_balance,
        'account_start_balance' => $this->account_start_balance,
        'account_end_balance' => $this->account_end_balance,
        'ledger_operation_id' => $this->ledger_operation_id,
        'grant_block_id' => $this->grant_block_id,
        'created_at' => $this->created_at,
        'modified_at' => $this->modified_at,
        
        'type' => $this->type?->value,
        
        'account_type' => $this->account_type?->value,
        
        'unit_type' => $this->unit_type?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>