<?php

namespace Chargebee\Resources\BillingConfiguration;

class BillingConfiguration  { 
    /**
    *
    * @var ?bool $is_calendar_billing_enabled
    */
    public ?bool $is_calendar_billing_enabled;
    
    /**
    *
    * @var ?array<BillingDate> $billing_dates
    */
    public ?array $billing_dates;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "is_calendar_billing_enabled" , "billing_dates"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?bool $is_calendar_billing_enabled,
        ?array $billing_dates,
    )
    { 
        $this->is_calendar_billing_enabled = $is_calendar_billing_enabled;
        $this->billing_dates = $billing_dates;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $billing_dates = array_map(fn (array $result): BillingDate =>  BillingDate::from(
            $result
        ), $resourceAttributes['billing_dates'] ?? []);
        
        $returnData = new self( $resourceAttributes['is_calendar_billing_enabled'] ?? null,
        $billing_dates,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['is_calendar_billing_enabled' => $this->is_calendar_billing_enabled,
        
        
        ], function ($value) {
            return $value !== null;
        });

        
        
        if($this->billing_dates !== []){
            $data['billing_dates'] = array_map(
                fn (BillingDate $billing_dates): array => $billing_dates->toArray(),
                $this->billing_dates
            );
        }

        
        return $data;
    }
}
?>