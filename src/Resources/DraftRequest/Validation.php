<?php

namespace Chargebee\Resources\DraftRequest;

class Validation  { 
    /**
    *
    * @var ?string $category
    */
    public ?string $category;
    
    /**
    *
    * @var ?string $level
    */
    public ?string $level;
    
    /**
    *
    * @var ?string $message
    */
    public ?string $message;
    
    /**
    *
    * @var ?string $param_name
    */
    public ?string $param_name;
    
    /**
    *
    * @var ?string $type
    */
    public ?string $type;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "category" , "level" , "message" , "param_name" , "type"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $category,
        ?string $level,
        ?string $message,
        ?string $param_name,
        ?string $type,
    )
    { 
        $this->category = $category;
        $this->level = $level;
        $this->message = $message;
        $this->param_name = $param_name;
        $this->type = $type;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['category'] ?? null,
        $resourceAttributes['level'] ?? null,
        $resourceAttributes['message'] ?? null,
        $resourceAttributes['param_name'] ?? null,
        $resourceAttributes['type'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['category' => $this->category,
        'level' => $this->level,
        'message' => $this->message,
        'param_name' => $this->param_name,
        'type' => $this->type,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>