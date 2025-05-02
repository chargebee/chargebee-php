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
    * @var ?string $status
    */
    public ?string $status;
    
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
    * @var ?string $action_at_term_end
    */
    public ?string $action_at_term_end;
    
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
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "status" , "contract_start" , "contract_end" , "billing_cycle" , "action_at_term_end" , "total_contract_value" , "total_contract_value_before_tax" , "cancellation_cutoff_period" , "created_at" , "subscription_id" , "remaining_billing_cycles"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $status,
        ?int $contract_start,
        ?int $contract_end,
        ?int $billing_cycle,
        ?string $action_at_term_end,
        ?int $total_contract_value,
        ?int $total_contract_value_before_tax,
        ?int $cancellation_cutoff_period,
        ?int $created_at,
        ?string $subscription_id,
        ?int $remaining_billing_cycles,
    )
    { 
        $this->id = $id;
        $this->status = $status;
        $this->contract_start = $contract_start;
        $this->contract_end = $contract_end;
        $this->billing_cycle = $billing_cycle;
        $this->action_at_term_end = $action_at_term_end;
        $this->total_contract_value = $total_contract_value;
        $this->total_contract_value_before_tax = $total_contract_value_before_tax;
        $this->cancellation_cutoff_period = $cancellation_cutoff_period;
        $this->created_at = $created_at;
        $this->subscription_id = $subscription_id;
        $this->remaining_billing_cycles = $remaining_billing_cycles;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['status'] ?? null,
        $resourceAttributes['contract_start'] ?? null,
        $resourceAttributes['contract_end'] ?? null,
        $resourceAttributes['billing_cycle'] ?? null,
        $resourceAttributes['action_at_term_end'] ?? null,
        $resourceAttributes['total_contract_value'] ?? null,
        $resourceAttributes['total_contract_value_before_tax'] ?? null,
        $resourceAttributes['cancellation_cutoff_period'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['subscription_id'] ?? null,
        $resourceAttributes['remaining_billing_cycles'] ?? null,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['id' => $this->id,
        'status' => $this->status,
        'contract_start' => $this->contract_start,
        'contract_end' => $this->contract_end,
        'billing_cycle' => $this->billing_cycle,
        'action_at_term_end' => $this->action_at_term_end,
        'total_contract_value' => $this->total_contract_value,
        'total_contract_value_before_tax' => $this->total_contract_value_before_tax,
        'cancellation_cutoff_period' => $this->cancellation_cutoff_period,
        'created_at' => $this->created_at,
        'subscription_id' => $this->subscription_id,
        'remaining_billing_cycles' => $this->remaining_billing_cycles,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>