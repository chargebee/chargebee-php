<?php

namespace Chargebee\Resources\Ramp;

class ContractTerm  { 
    /**
    *
    * @var ?int $cancellation_cutoff_period
    */
    public ?int $cancellation_cutoff_period;
    
    /**
    *
    * @var ?int $renewal_billing_cycles
    */
    public ?int $renewal_billing_cycles;
    
    /**
    *
    * @var ?string $action_at_term_end
    */
    public ?string $action_at_term_end;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "cancellation_cutoff_period" , "renewal_billing_cycles" , "action_at_term_end"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?int $cancellation_cutoff_period,
        ?int $renewal_billing_cycles,
        ?string $action_at_term_end,
    )
    { 
        $this->cancellation_cutoff_period = $cancellation_cutoff_period;
        $this->renewal_billing_cycles = $renewal_billing_cycles;
        $this->action_at_term_end = $action_at_term_end;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['cancellation_cutoff_period'] ?? null,
        $resourceAttributes['renewal_billing_cycles'] ?? null,
        $resourceAttributes['action_at_term_end'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['cancellation_cutoff_period' => $this->cancellation_cutoff_period,
        'renewal_billing_cycles' => $this->renewal_billing_cycles,
        'action_at_term_end' => $this->action_at_term_end,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>