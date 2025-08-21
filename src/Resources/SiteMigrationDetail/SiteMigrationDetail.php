<?php

namespace Chargebee\Resources\SiteMigrationDetail;

class SiteMigrationDetail  { 
    /**
    *
    * @var ?string $entity_id
    */
    public ?string $entity_id;
    
    /**
    *
    * @var ?string $other_site_name
    */
    public ?string $other_site_name;
    
    /**
    *
    * @var ?string $entity_id_at_other_site
    */
    public ?string $entity_id_at_other_site;
    
    /**
    *
    * @var ?int $migrated_at
    */
    public ?int $migrated_at;
    
    /**
    *
    * @var ?\Chargebee\Enums\EntityType $entity_type
    */
    public ?\Chargebee\Enums\EntityType $entity_type;
    
    /**
    *
    * @var ?\Chargebee\Resources\SiteMigrationDetail\Enums\Status $status
    */
    public ?\Chargebee\Resources\SiteMigrationDetail\Enums\Status $status;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "entity_id" , "other_site_name" , "entity_id_at_other_site" , "migrated_at"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $entity_id,
        ?string $other_site_name,
        ?string $entity_id_at_other_site,
        ?int $migrated_at,
        ?\Chargebee\Enums\EntityType $entity_type,
        ?\Chargebee\Resources\SiteMigrationDetail\Enums\Status $status,
    )
    { 
        $this->entity_id = $entity_id;
        $this->other_site_name = $other_site_name;
        $this->entity_id_at_other_site = $entity_id_at_other_site;
        $this->migrated_at = $migrated_at; 
        $this->entity_type = $entity_type; 
        $this->status = $status; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['entity_id'] ?? null,
        $resourceAttributes['other_site_name'] ?? null,
        $resourceAttributes['entity_id_at_other_site'] ?? null,
        $resourceAttributes['migrated_at'] ?? null,
        
        
        isset($resourceAttributes['entity_type']) ? \Chargebee\Enums\EntityType::tryFromValue($resourceAttributes['entity_type']) : null,
         
        isset($resourceAttributes['status']) ? \Chargebee\Resources\SiteMigrationDetail\Enums\Status::tryFromValue($resourceAttributes['status']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['entity_id' => $this->entity_id,
        'other_site_name' => $this->other_site_name,
        'entity_id_at_other_site' => $this->entity_id_at_other_site,
        'migrated_at' => $this->migrated_at,
        
        'entity_type' => $this->entity_type?->value,
        
        'status' => $this->status?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>