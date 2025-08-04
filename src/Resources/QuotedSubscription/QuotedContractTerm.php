<?php

namespace Chargebee\Resources\QuotedSubscription;

class QuotedContractTerm  { 
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
    * @var ?int $cancellation_cutoff_period
    */
    public ?int $cancellation_cutoff_period;
    
    /**
    *
    * @var ?\Chargebee\Resources\QuotedSubscription\ClassBasedEnums\QuotedContractTermActionAtTermEnd $action_at_term_end
    */
    public ?\Chargebee\Resources\QuotedSubscription\ClassBasedEnums\QuotedContractTermActionAtTermEnd $action_at_term_end;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "contract_start" , "contract_end" , "billing_cycle" , "total_contract_value" , "cancellation_cutoff_period"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?int $contract_start,
        ?int $contract_end,
        ?int $billing_cycle,
        ?int $total_contract_value,
        ?int $cancellation_cutoff_period,
        ?\Chargebee\Resources\QuotedSubscription\ClassBasedEnums\QuotedContractTermActionAtTermEnd $action_at_term_end,
    )
    { 
        $this->contract_start = $contract_start;
        $this->contract_end = $contract_end;
        $this->billing_cycle = $billing_cycle;
        $this->total_contract_value = $total_contract_value;
        $this->cancellation_cutoff_period = $cancellation_cutoff_period;  
        $this->action_at_term_end = $action_at_term_end;
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['contract_start'] ?? null,
        $resourceAttributes['contract_end'] ?? null,
        $resourceAttributes['billing_cycle'] ?? null,
        $resourceAttributes['total_contract_value'] ?? null,
        $resourceAttributes['cancellation_cutoff_period'] ?? null,
        
         
        isset($resourceAttributes['action_at_term_end']) ? \Chargebee\Resources\QuotedSubscription\ClassBasedEnums\QuotedContractTermActionAtTermEnd::tryFromValue($resourceAttributes['action_at_term_end']) : null,
        
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['contract_start' => $this->contract_start,
        'contract_end' => $this->contract_end,
        'billing_cycle' => $this->billing_cycle,
        'total_contract_value' => $this->total_contract_value,
        'cancellation_cutoff_period' => $this->cancellation_cutoff_period,
        
        'action_at_term_end' => $this->action_at_term_end?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>