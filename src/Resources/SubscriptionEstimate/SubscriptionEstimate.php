<?php

namespace Chargebee\Resources\SubscriptionEstimate;

class SubscriptionEstimate  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?string $currency_code
    */
    public ?string $currency_code;
    
    /**
    *
    * @var ?int $next_billing_at
    */
    public ?int $next_billing_at;
    
    /**
    *
    * @var ?int $pause_date
    */
    public ?int $pause_date;
    
    /**
    *
    * @var ?int $resume_date
    */
    public ?int $resume_date;
    
    /**
    *
    * @var ?ShippingAddress $shipping_address
    */
    public ?ShippingAddress $shipping_address;
    
    /**
    *
    * @var ?ContractTerm $contract_term
    */
    public ?ContractTerm $contract_term;
    
    /**
    *
    * @var ?\Chargebee\Enums\TrialEndAction $trial_end_action
    */
    public ?\Chargebee\Enums\TrialEndAction $trial_end_action;
    
    /**
    *
    * @var ?\Chargebee\Resources\SubscriptionEstimate\Enums\Status $status
    */
    public ?\Chargebee\Resources\SubscriptionEstimate\Enums\Status $status;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "currency_code" , "next_billing_at" , "pause_date" , "resume_date" , "shipping_address" , "contract_term"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $currency_code,
        ?int $next_billing_at,
        ?int $pause_date,
        ?int $resume_date,
        ?ShippingAddress $shipping_address,
        ?ContractTerm $contract_term,
        ?\Chargebee\Enums\TrialEndAction $trial_end_action,
        ?\Chargebee\Resources\SubscriptionEstimate\Enums\Status $status,
    )
    { 
        $this->id = $id;
        $this->currency_code = $currency_code;
        $this->next_billing_at = $next_billing_at;
        $this->pause_date = $pause_date;
        $this->resume_date = $resume_date;
        $this->shipping_address = $shipping_address;
        $this->contract_term = $contract_term; 
        $this->trial_end_action = $trial_end_action; 
        $this->status = $status; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['currency_code'] ?? null,
        $resourceAttributes['next_billing_at'] ?? null,
        $resourceAttributes['pause_date'] ?? null,
        $resourceAttributes['resume_date'] ?? null,
        isset($resourceAttributes['shipping_address']) ? ShippingAddress::from($resourceAttributes['shipping_address']) : null,
        isset($resourceAttributes['contract_term']) ? ContractTerm::from($resourceAttributes['contract_term']) : null,
        
        
        isset($resourceAttributes['trial_end_action']) ? \Chargebee\Enums\TrialEndAction::tryFromValue($resourceAttributes['trial_end_action']) : null,
         
        isset($resourceAttributes['status']) ? \Chargebee\Resources\SubscriptionEstimate\Enums\Status::tryFromValue($resourceAttributes['status']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'currency_code' => $this->currency_code,
        'next_billing_at' => $this->next_billing_at,
        'pause_date' => $this->pause_date,
        'resume_date' => $this->resume_date,
        
        
        
        'trial_end_action' => $this->trial_end_action?->value,
        
        'status' => $this->status?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        if($this->shipping_address instanceof ShippingAddress){
            $data['shipping_address'] = $this->shipping_address->toArray();
        }
        if($this->contract_term instanceof ContractTerm){
            $data['contract_term'] = $this->contract_term->toArray();
        }
        

        
        return $data;
    }
}
?>