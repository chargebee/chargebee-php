<?php

namespace Chargebee\Resources\Subscription;

class BillingOverride  { 
    /**
    *
    * @var ?int $max_excess_payment_usage
    */
    public ?int $max_excess_payment_usage;
    
    /**
    *
    * @var ?int $max_refundable_credits_usage
    */
    public ?int $max_refundable_credits_usage;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "max_excess_payment_usage" , "max_refundable_credits_usage"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?int $max_excess_payment_usage,
        ?int $max_refundable_credits_usage,
    )
    { 
        $this->max_excess_payment_usage = $max_excess_payment_usage;
        $this->max_refundable_credits_usage = $max_refundable_credits_usage;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['max_excess_payment_usage'] ?? null,
        $resourceAttributes['max_refundable_credits_usage'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['max_excess_payment_usage' => $this->max_excess_payment_usage,
        'max_refundable_credits_usage' => $this->max_refundable_credits_usage,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>