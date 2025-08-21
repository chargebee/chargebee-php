<?php

namespace Chargebee\Resources\Feature;

class Level  { 
    /**
    *
    * @var ?string $name
    */
    public ?string $name;
    
    /**
    *
    * @var ?string $value
    */
    public ?string $value;
    
    /**
    *
    * @var ?int $level
    */
    public ?int $level;
    
    /**
    *
    * @var ?bool $is_unlimited
    */
    public ?bool $is_unlimited;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "name" , "value" , "level" , "is_unlimited"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $name,
        ?string $value,
        ?int $level,
        ?bool $is_unlimited,
    )
    { 
        $this->name = $name;
        $this->value = $value;
        $this->level = $level;
        $this->is_unlimited = $is_unlimited;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['name'] ?? null,
        $resourceAttributes['value'] ?? null,
        $resourceAttributes['level'] ?? null,
        $resourceAttributes['is_unlimited'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['name' => $this->name,
        'value' => $this->value,
        'level' => $this->level,
        'is_unlimited' => $this->is_unlimited,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>