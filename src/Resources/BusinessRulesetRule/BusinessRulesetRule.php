<?php

namespace Chargebee\Resources\BusinessRulesetRule;

class BusinessRulesetRule  { 
    /**
    *
    * @var ?string $rule_id
    */
    public ?string $rule_id;
    
    /**
    *
    * @var ?int $priority
    */
    public ?int $priority;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "rule_id" , "priority"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $rule_id,
        ?int $priority,
    )
    { 
        $this->rule_id = $rule_id;
        $this->priority = $priority;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['rule_id'] ?? null,
        $resourceAttributes['priority'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['rule_id' => $this->rule_id,
        'priority' => $this->priority,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>