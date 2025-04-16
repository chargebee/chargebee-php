<?php

namespace Chargebee\Resources\Invoice;

class Note  { 
    /**
    *
    * @var string $entity_type
    */
    public string $entity_type;
    
    /**
    *
    * @var string $note
    */
    public string $note;
    
    /**
    *
    * @var ?string $entity_id
    */
    public ?string $entity_id;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "entity_type" , "note" , "entity_id"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        string $entity_type,
        string $note,
        ?string $entity_id,
    )
    { 
        $this->entity_type = $entity_type;
        $this->note = $note;
        $this->entity_id = $entity_id;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['entity_type'] ,
        $resourceAttributes['note'] ,
        $resourceAttributes['entity_id'] ?? null,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['entity_type' => $this->entity_type,
        'note' => $this->note,
        'entity_id' => $this->entity_id,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>