<?php

namespace Chargebee\Resources\GroupByAttribute;

class GroupByAttribute  { 
    /**
    *
    * @var ?string $attribute_name
    */
    public ?string $attribute_name;
    
    /**
    *
    * @var ?int $rank
    */
    public ?int $rank;
    
    /**
    *
    * @var ?int $coverage_percent
    */
    public ?int $coverage_percent;
    
    /**
    *
    * @var ?int $cardinality
    */
    public ?int $cardinality;
    
    /**
    *
    * @var ?int $remaining_value_count
    */
    public ?int $remaining_value_count;
    
    /**
    *
    * @var ?bool $warning
    */
    public ?bool $warning;
    
    /**
    *
    * @var ?array<string> $sample_values
    */
    public ?array $sample_values;
    
    /**
    *
    * @var array<\Chargebee\Enums\WarningReason>
    */
    public  array $warning_reasons;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "attribute_name" , "rank" , "coverage_percent" , "cardinality" , "remaining_value_count" , "warning" , "sample_values"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $attribute_name,
        ?int $rank,
        ?int $coverage_percent,
        ?int $cardinality,
        ?int $remaining_value_count,
        ?bool $warning,
        ?array $sample_values,
        ?array $warning_reasons,
        
    )
    { 
        $this->attribute_name = $attribute_name;
        $this->rank = $rank;
        $this->coverage_percent = $coverage_percent;
        $this->cardinality = $cardinality;
        $this->remaining_value_count = $remaining_value_count;
        $this->warning = $warning;
        $this->sample_values = $sample_values;   
        $this->warning_reasons = $warning_reasons;
        
    }

    public static function from(array $resourceAttributes): self
    { 
        $warningReasons  = [];
        if (!empty($resourceAttributes['warning_reasons']) && is_array($resourceAttributes['warning_reasons'])) {
            foreach ($resourceAttributes['warning_reasons'] as $enumValue) {
                $enabledEvents[] = \Chargebee\Enums\WarningReason::tryFromValue($enumValue);
            }
        }
    
        $returnData = new self( $resourceAttributes['attribute_name'] ?? null,
        $resourceAttributes['rank'] ?? null,
        $resourceAttributes['coverage_percent'] ?? null,
        $resourceAttributes['cardinality'] ?? null,
        $resourceAttributes['remaining_value_count'] ?? null,
        $resourceAttributes['warning'] ?? null,
        $resourceAttributes['sample_values'] ?? null,
        
          
            $warningReasons,
        
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $warningReasons = [];
        foreach ($this->warning_reasons as $enumValue) {
            if ($enumValue instanceof \Chargebee\Enums\WarningReason) {
                $warningReasons[] = $enumValue->value;
            }
        }
        
        $data = array_filter(['attribute_name' => $this->attribute_name,
        'rank' => $this->rank,
        'coverage_percent' => $this->coverage_percent,
        'cardinality' => $this->cardinality,
        'remaining_value_count' => $this->remaining_value_count,
        'warning' => $this->warning,
        'sample_values' => $this->sample_values,
        
        'warning_reasons' => $warningReasons,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>