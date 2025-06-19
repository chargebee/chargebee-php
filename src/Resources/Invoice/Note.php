<?php

namespace Chargebee\Resources\Invoice;

class Note  { 
    /**
    *
    * @var ?string $note
    */
    public ?string $note;
    
    /**
    *
    * @var ?string $entity_id
    */
    public ?string $entity_id;
    
    /**
    *
    * @var ?string $entity_type
    */
    public ?string $entity_type;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "note" , "entity_id" , "entity_type"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $note,
        ?string $entity_id,
        ?string $entity_type,
    )
    { 
        $this->note = $note;
        $this->entity_id = $entity_id;
        $this->entity_type = $entity_type;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['note'] ?? null,
        $resourceAttributes['entity_id'] ?? null,
        $resourceAttributes['entity_type'] ?? null,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['note' => $this->note,
        'entity_id' => $this->entity_id,
        'entity_type' => $this->entity_type,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>