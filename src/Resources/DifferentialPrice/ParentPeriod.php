<?php

namespace Chargebee\Resources\DifferentialPrice;

class ParentPeriod  { 
    /**
    *
    * @var ?string $period_unit
    */
    public ?string $period_unit;
    
    /**
    *
    * @var mixed $period
    */
    public mixed $period;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "period_unit" , "period"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $period_unit,
        mixed $period,
    )
    { 
        $this->period_unit = $period_unit;
        $this->period = $period;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['period_unit'] ?? null,
        $resourceAttributes['period'] ?? null,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['period_unit' => $this->period_unit,
        'period' => $this->period,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>