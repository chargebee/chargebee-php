<?php

namespace Chargebee\Resources\RetrySegment;

class RetrySegment  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?string $name
    */
    public ?string $name;
    
    /**
    *
    * @var ?string $invoice_id
    */
    public ?string $invoice_id;
    
    /**
    *
    * @var ?bool $enabled
    */
    public ?bool $enabled;
    
    /**
    *
    * @var ?int $priority
    */
    public ?int $priority;
    
    /**
    *
    * @var mixed $criteria
    */
    public mixed $criteria;
    
    /**
    *
    * @var mixed $retry_settings
    */
    public mixed $retry_settings;
    
    /**
    *
    * @var ?\Chargebee\Resources\RetrySegment\Enums\ConditionLogic $condition_logic
    */
    public ?\Chargebee\Resources\RetrySegment\Enums\ConditionLogic $condition_logic;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "name" , "invoice_id" , "enabled" , "priority" , "criteria" , "retry_settings"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $name,
        ?string $invoice_id,
        ?bool $enabled,
        ?int $priority,
        mixed $criteria,
        mixed $retry_settings,
        ?\Chargebee\Resources\RetrySegment\Enums\ConditionLogic $condition_logic,
    )
    { 
        $this->id = $id;
        $this->name = $name;
        $this->invoice_id = $invoice_id;
        $this->enabled = $enabled;
        $this->priority = $priority;
        $this->criteria = $criteria;
        $this->retry_settings = $retry_settings;  
        $this->condition_logic = $condition_logic; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['name'] ?? null,
        $resourceAttributes['invoice_id'] ?? null,
        $resourceAttributes['enabled'] ?? null,
        $resourceAttributes['priority'] ?? null,
        $resourceAttributes['criteria'] ?? null,
        $resourceAttributes['retry_settings'] ?? null,
        
         
        isset($resourceAttributes['condition_logic']) ? \Chargebee\Resources\RetrySegment\Enums\ConditionLogic::tryFromValue($resourceAttributes['condition_logic']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'name' => $this->name,
        'invoice_id' => $this->invoice_id,
        'enabled' => $this->enabled,
        'priority' => $this->priority,
        'criteria' => $this->criteria,
        'retry_settings' => $this->retry_settings,
        
        'condition_logic' => $this->condition_logic?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>