<?php

namespace Chargebee\Resources\Subscription;

class ContractTerm  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?int $contract_start
    */
    public ?int $contract_start;
    
    /**
    *
    * @var ?int $contract_end
    */
    public ?int $contract_end;
    
    /**
    *
    * @var ?int $billing_cycle
    */
    public ?int $billing_cycle;
    
    /**
    *
    * @var ?int $total_contract_value
    */
    public ?int $total_contract_value;
    
    /**
    *
    * @var ?int $total_contract_value_before_tax
    */
    public ?int $total_contract_value_before_tax;
    
    /**
    *
    * @var ?int $cancellation_cutoff_period
    */
    public ?int $cancellation_cutoff_period;
    
    /**
    *
    * @var ?int $created_at
    */
    public ?int $created_at;
    
    /**
    *
    * @var ?string $subscription_id
    */
    public ?string $subscription_id;
    
    /**
    *
    * @var ?int $remaining_billing_cycles
    */
    public ?int $remaining_billing_cycles;
    
    /**
    *
    * @var ?\Chargebee\Resources\Subscription\ClassBasedEnums\ContractTermStatus $status
    */
    public ?\Chargebee\Resources\Subscription\ClassBasedEnums\ContractTermStatus $status;
    
    /**
    *
    * @var ?\Chargebee\Resources\Subscription\ClassBasedEnums\ContractTermActionAtTermEnd $action_at_term_end
    */
    public ?\Chargebee\Resources\Subscription\ClassBasedEnums\ContractTermActionAtTermEnd $action_at_term_end;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "contract_start" , "contract_end" , "billing_cycle" , "total_contract_value" , "total_contract_value_before_tax" , "cancellation_cutoff_period" , "created_at" , "subscription_id" , "remaining_billing_cycles"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?int $contract_start,
        ?int $contract_end,
        ?int $billing_cycle,
        ?int $total_contract_value,
        ?int $total_contract_value_before_tax,
        ?int $cancellation_cutoff_period,
        ?int $created_at,
        ?string $subscription_id,
        ?int $remaining_billing_cycles,
        ?\Chargebee\Resources\Subscription\ClassBasedEnums\ContractTermStatus $status,
        ?\Chargebee\Resources\Subscription\ClassBasedEnums\ContractTermActionAtTermEnd $action_at_term_end,
    )
    { 
        $this->id = $id;
        $this->contract_start = $contract_start;
        $this->contract_end = $contract_end;
        $this->billing_cycle = $billing_cycle;
        $this->total_contract_value = $total_contract_value;
        $this->total_contract_value_before_tax = $total_contract_value_before_tax;
        $this->cancellation_cutoff_period = $cancellation_cutoff_period;
        $this->created_at = $created_at;
        $this->subscription_id = $subscription_id;
        $this->remaining_billing_cycles = $remaining_billing_cycles;  
        $this->status = $status;
        $this->action_at_term_end = $action_at_term_end;
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['contract_start'] ?? null,
        $resourceAttributes['contract_end'] ?? null,
        $resourceAttributes['billing_cycle'] ?? null,
        $resourceAttributes['total_contract_value'] ?? null,
        $resourceAttributes['total_contract_value_before_tax'] ?? null,
        $resourceAttributes['cancellation_cutoff_period'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['subscription_id'] ?? null,
        $resourceAttributes['remaining_billing_cycles'] ?? null,
        
         
        isset($resourceAttributes['status']) ? \Chargebee\Resources\Subscription\ClassBasedEnums\ContractTermStatus::tryFromValue($resourceAttributes['status']) : null,
        
        isset($resourceAttributes['action_at_term_end']) ? \Chargebee\Resources\Subscription\ClassBasedEnums\ContractTermActionAtTermEnd::tryFromValue($resourceAttributes['action_at_term_end']) : null,
        
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['id' => $this->id,
        'contract_start' => $this->contract_start,
        'contract_end' => $this->contract_end,
        'billing_cycle' => $this->billing_cycle,
        'total_contract_value' => $this->total_contract_value,
        'total_contract_value_before_tax' => $this->total_contract_value_before_tax,
        'cancellation_cutoff_period' => $this->cancellation_cutoff_period,
        'created_at' => $this->created_at,
        'subscription_id' => $this->subscription_id,
        'remaining_billing_cycles' => $this->remaining_billing_cycles,
        
        'status' => $this->status?->value,
        
        'action_at_term_end' => $this->action_at_term_end?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>