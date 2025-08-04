<?php

namespace Chargebee\Resources\DifferentialPrice;

class ParentPeriod  { 
    /**
    *
    * @var mixed $period
    */
    public mixed $period;
    
    /**
    *
    * @var ?\Chargebee\Resources\DifferentialPrice\ClassBasedEnums\ParentPeriodPeriodUnit $period_unit
    */
    public ?\Chargebee\Resources\DifferentialPrice\ClassBasedEnums\ParentPeriodPeriodUnit $period_unit;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "period"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        mixed $period,
        ?\Chargebee\Resources\DifferentialPrice\ClassBasedEnums\ParentPeriodPeriodUnit $period_unit,
    )
    { 
        $this->period = $period;  
        $this->period_unit = $period_unit;
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['period'] ?? null,
        
         
        isset($resourceAttributes['period_unit']) ? \Chargebee\Resources\DifferentialPrice\ClassBasedEnums\ParentPeriodPeriodUnit::tryFromValue($resourceAttributes['period_unit']) : null,
        
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['period' => $this->period,
        
        'period_unit' => $this->period_unit?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>