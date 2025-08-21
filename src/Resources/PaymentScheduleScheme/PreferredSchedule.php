<?php

namespace Chargebee\Resources\PaymentScheduleScheme;

class PreferredSchedule  { 
    /**
    *
    * @var ?int $period
    */
    public ?int $period;
    
    /**
    *
    * @var ?float $amount_percentage
    */
    public ?float $amount_percentage;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "period" , "amount_percentage"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?int $period,
        ?float $amount_percentage,
    )
    { 
        $this->period = $period;
        $this->amount_percentage = $amount_percentage;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['period'] ?? null,
        $resourceAttributes['amount_percentage'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['period' => $this->period,
        'amount_percentage' => $this->amount_percentage,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>