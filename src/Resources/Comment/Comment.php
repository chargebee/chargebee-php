<?php

namespace Chargebee\Resources\Comment;

class Comment  { 
    /**
    *
    * @var string $id
    */
    public string $id;
    
    /**
    *
    * @var ?string $added_by
    */
    public ?string $added_by;
    
    /**
    *
    * @var string $notes
    */
    public string $notes;
    
    /**
    *
    * @var int $created_at
    */
    public int $created_at;
    
    /**
    *
    * @var string $entity_id
    */
    public string $entity_id;
    
    /**
    *
    * @var \Chargebee\Enums\EntityType $entity_type
    */
    public \Chargebee\Enums\EntityType $entity_type;
    
    /**
    *
    * @var \Chargebee\Resources\Comment\Enums\Type $type
    */
    public \Chargebee\Resources\Comment\Enums\Type $type;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "added_by" , "notes" , "created_at" , "entity_id"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        string $id,
        ?string $added_by,
        string $notes,
        int $created_at,
        string $entity_id,
        \Chargebee\Enums\EntityType $entity_type,
        \Chargebee\Resources\Comment\Enums\Type $type,
    )
    { 
        $this->id = $id;
        $this->added_by = $added_by;
        $this->notes = $notes;
        $this->created_at = $created_at;
        $this->entity_id = $entity_id; 
        $this->entity_type = $entity_type; 
        $this->type = $type;
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ,
        $resourceAttributes['added_by'] ?? null,
        $resourceAttributes['notes'] ,
        $resourceAttributes['created_at'] ,
        $resourceAttributes['entity_id'] ,
        
        
        isset($resourceAttributes['entity_type']) ? \Chargebee\Enums\EntityType::tryFromValue($resourceAttributes['entity_type']) : null,
         
        isset($resourceAttributes['type']) ? \Chargebee\Resources\Comment\Enums\Type::tryFromValue($resourceAttributes['type']) : null,
        
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['id' => $this->id,
        'added_by' => $this->added_by,
        'notes' => $this->notes,
        'created_at' => $this->created_at,
        'entity_id' => $this->entity_id,
        
        'entity_type' => $this->entity_type?->value,
        
        'type' => $this->type?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>