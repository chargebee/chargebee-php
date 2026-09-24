<?php

namespace Chargebee\Resources\ApplyRule;

class Rule  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?int $version
    */
    public ?int $version;
    
    /**
    *
    * @var ?string $name
    */
    public ?string $name;
    
    /**
    *
    * @var ?string $description
    */
    public ?string $description;
    
    /**
    *
    * @var ?bool $evaluation_result
    */
    public ?bool $evaluation_result;
    
    /**
    *
    * @var ?string $error_message
    */
    public ?string $error_message;
    
    /**
    *
    * @var mixed $actions
    */
    public mixed $actions;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "version" , "name" , "description" , "evaluation_result" , "error_message" , "actions"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?int $version,
        ?string $name,
        ?string $description,
        ?bool $evaluation_result,
        ?string $error_message,
        mixed $actions,
    )
    { 
        $this->id = $id;
        $this->version = $version;
        $this->name = $name;
        $this->description = $description;
        $this->evaluation_result = $evaluation_result;
        $this->error_message = $error_message;
        $this->actions = $actions;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['version'] ?? null,
        $resourceAttributes['name'] ?? null,
        $resourceAttributes['description'] ?? null,
        $resourceAttributes['evaluation_result'] ?? null,
        $resourceAttributes['error_message'] ?? null,
        $resourceAttributes['actions'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'version' => $this->version,
        'name' => $this->name,
        'description' => $this->description,
        'evaluation_result' => $this->evaluation_result,
        'error_message' => $this->error_message,
        'actions' => $this->actions,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>