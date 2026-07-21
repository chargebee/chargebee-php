<?php

namespace Chargebee\Resources\LedgerOperation;

class LedgerOperation  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?string $amount
    */
    public ?string $amount;
    
    /**
    *
    * @var ?string $provisioned_start_balance
    */
    public ?string $provisioned_start_balance;
    
    /**
    *
    * @var ?string $provisioned_end_balance
    */
    public ?string $provisioned_end_balance;
    
    /**
    *
    * @var ?string $overdraft_start_balance
    */
    public ?string $overdraft_start_balance;
    
    /**
    *
    * @var ?string $overdraft_end_balance
    */
    public ?string $overdraft_end_balance;
    
    /**
    *
    * @var ?string $parent_ledger_operation_id
    */
    public ?string $parent_ledger_operation_id;
    
    /**
    *
    * @var ?int $ledger_operation_timestamp
    */
    public ?int $ledger_operation_timestamp;
    
    /**
    *
    * @var ?int $auto_release_timestamp
    */
    public ?int $auto_release_timestamp;
    
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
    * @var mixed $metadata
    */
    public mixed $metadata;
    
    /**
    *
    * @var ?\Chargebee\Resources\LedgerOperation\Enums\Type $type
    */
    public ?\Chargebee\Resources\LedgerOperation\Enums\Type $type;
    
    /**
    *
    * @var ?\Chargebee\Resources\LedgerOperation\Enums\UnitType $unit_type
    */
    public ?\Chargebee\Resources\LedgerOperation\Enums\UnitType $unit_type;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "amount" , "provisioned_start_balance" , "provisioned_end_balance" , "overdraft_start_balance" , "overdraft_end_balance" , "parent_ledger_operation_id" , "ledger_operation_timestamp" , "auto_release_timestamp" , "created_at" , "modified_at" , "subscription_id" , "unit_id" , "metadata"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $amount,
        ?string $provisioned_start_balance,
        ?string $provisioned_end_balance,
        ?string $overdraft_start_balance,
        ?string $overdraft_end_balance,
        ?string $parent_ledger_operation_id,
        ?int $ledger_operation_timestamp,
        ?int $auto_release_timestamp,
        ?int $created_at,
        ?int $modified_at,
        ?string $subscription_id,
        ?string $unit_id,
        mixed $metadata,
        ?\Chargebee\Resources\LedgerOperation\Enums\Type $type,
        ?\Chargebee\Resources\LedgerOperation\Enums\UnitType $unit_type,
    )
    { 
        $this->id = $id;
        $this->amount = $amount;
        $this->provisioned_start_balance = $provisioned_start_balance;
        $this->provisioned_end_balance = $provisioned_end_balance;
        $this->overdraft_start_balance = $overdraft_start_balance;
        $this->overdraft_end_balance = $overdraft_end_balance;
        $this->parent_ledger_operation_id = $parent_ledger_operation_id;
        $this->ledger_operation_timestamp = $ledger_operation_timestamp;
        $this->auto_release_timestamp = $auto_release_timestamp;
        $this->created_at = $created_at;
        $this->modified_at = $modified_at;
        $this->subscription_id = $subscription_id;
        $this->unit_id = $unit_id;
        $this->metadata = $metadata;  
        $this->type = $type;
        $this->unit_type = $unit_type; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['amount'] ?? null,
        $resourceAttributes['provisioned_start_balance'] ?? null,
        $resourceAttributes['provisioned_end_balance'] ?? null,
        $resourceAttributes['overdraft_start_balance'] ?? null,
        $resourceAttributes['overdraft_end_balance'] ?? null,
        $resourceAttributes['parent_ledger_operation_id'] ?? null,
        $resourceAttributes['ledger_operation_timestamp'] ?? null,
        $resourceAttributes['auto_release_timestamp'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['modified_at'] ?? null,
        $resourceAttributes['subscription_id'] ?? null,
        $resourceAttributes['unit_id'] ?? null,
        $resourceAttributes['metadata'] ?? null,
        
         
        isset($resourceAttributes['type']) ? \Chargebee\Resources\LedgerOperation\Enums\Type::tryFromValue($resourceAttributes['type']) : null,
        
        isset($resourceAttributes['unit_type']) ? \Chargebee\Resources\LedgerOperation\Enums\UnitType::tryFromValue($resourceAttributes['unit_type']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'amount' => $this->amount,
        'provisioned_start_balance' => $this->provisioned_start_balance,
        'provisioned_end_balance' => $this->provisioned_end_balance,
        'overdraft_start_balance' => $this->overdraft_start_balance,
        'overdraft_end_balance' => $this->overdraft_end_balance,
        'parent_ledger_operation_id' => $this->parent_ledger_operation_id,
        'ledger_operation_timestamp' => $this->ledger_operation_timestamp,
        'auto_release_timestamp' => $this->auto_release_timestamp,
        'created_at' => $this->created_at,
        'modified_at' => $this->modified_at,
        'subscription_id' => $this->subscription_id,
        'unit_id' => $this->unit_id,
        'metadata' => $this->metadata,
        
        'type' => $this->type?->value,
        
        'unit_type' => $this->unit_type?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>