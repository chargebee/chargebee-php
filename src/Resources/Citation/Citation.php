<?php

namespace Chargebee\Resources\Citation;

class Citation  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?string $param_name
    */
    public ?string $param_name;
    
    /**
    *
    * @var ?string $author_name
    */
    public ?string $author_name;
    
    /**
    *
    * @var ?int $created_at
    */
    public ?int $created_at;
    
    /**
    *
    * @var ?Content $content
    */
    public ?Content $content;
    
    /**
    *
    * @var ?\Chargebee\Resources\Citation\Enums\ConfidenceLevel $confidence_level
    */
    public ?\Chargebee\Resources\Citation\Enums\ConfidenceLevel $confidence_level;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "param_name" , "author_name" , "created_at" , "content"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $param_name,
        ?string $author_name,
        ?int $created_at,
        ?Content $content,
        ?\Chargebee\Resources\Citation\Enums\ConfidenceLevel $confidence_level,
    )
    { 
        $this->id = $id;
        $this->param_name = $param_name;
        $this->author_name = $author_name;
        $this->created_at = $created_at;
        $this->content = $content;  
        $this->confidence_level = $confidence_level; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['param_name'] ?? null,
        $resourceAttributes['author_name'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        isset($resourceAttributes['content']) ? Content::from($resourceAttributes['content']) : null,
        
         
        isset($resourceAttributes['confidence_level']) ? \Chargebee\Resources\Citation\Enums\ConfidenceLevel::tryFromValue($resourceAttributes['confidence_level']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'param_name' => $this->param_name,
        'author_name' => $this->author_name,
        'created_at' => $this->created_at,
        
        
        'confidence_level' => $this->confidence_level?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        if($this->content instanceof Content){
            $data['content'] = $this->content->toArray();
        }
        

        
        return $data;
    }
}
?>