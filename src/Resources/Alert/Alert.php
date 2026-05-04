<?php

namespace Chargebee\Resources\Alert;

class Alert  { 
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
    * @var ?string $description
    */
    public ?string $description;
    
    /**
    *
    * @var ?string $metered_feature_id
    */
    public ?string $metered_feature_id;
    
    /**
    *
    * @var ?string $subscription_id
    */
    public ?string $subscription_id;
    
    /**
    *
    * @var ?string $meta
    */
    public ?string $meta;
    
    /**
    *
    * @var ?int $created_at
    */
    public ?int $created_at;
    
    /**
    *
    * @var ?int $updated_at
    */
    public ?int $updated_at;
    
    /**
    *
    * @var ?\Chargebee\Enums\Type $type
    */
    public ?\Chargebee\Enums\Type $type;
    
    /**
    *
    * @var ?\Chargebee\Resources\Alert\Enums\Status $status
    */
    public ?\Chargebee\Resources\Alert\Enums\Status $status;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "name" , "description" , "metered_feature_id" , "subscription_id" , "meta" , "created_at" , "updated_at"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $name,
        ?string $description,
        ?string $metered_feature_id,
        ?string $subscription_id,
        ?string $meta,
        ?int $created_at,
        ?int $updated_at,
        ?\Chargebee\Enums\Type $type,
        ?\Chargebee\Resources\Alert\Enums\Status $status,
    )
    { 
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->metered_feature_id = $metered_feature_id;
        $this->subscription_id = $subscription_id;
        $this->meta = $meta;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at; 
        $this->type = $type; 
        $this->status = $status; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['name'] ?? null,
        $resourceAttributes['description'] ?? null,
        $resourceAttributes['metered_feature_id'] ?? null,
        $resourceAttributes['subscription_id'] ?? null,
        $resourceAttributes['meta'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['updated_at'] ?? null,
        
        
        isset($resourceAttributes['type']) ? \Chargebee\Enums\Type::tryFromValue($resourceAttributes['type']) : null,
         
        isset($resourceAttributes['status']) ? \Chargebee\Resources\Alert\Enums\Status::tryFromValue($resourceAttributes['status']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'name' => $this->name,
        'description' => $this->description,
        'metered_feature_id' => $this->metered_feature_id,
        'subscription_id' => $this->subscription_id,
        'meta' => $this->meta,
        'created_at' => $this->created_at,
        'updated_at' => $this->updated_at,
        
        'type' => $this->type?->value,
        
        'status' => $this->status?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>