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
    * @var ?int $alarm_triggered_at
    */
    public ?int $alarm_triggered_at;
    
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
    *
    * @var ?\Chargebee\Resources\Alert\Enums\Scope $scope
    */
    public ?\Chargebee\Resources\Alert\Enums\Scope $scope;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "name" , "description" , "metered_feature_id" , "subscription_id" , "alarm_triggered_at" , "meta" , "created_at" , "updated_at"  ];

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
        ?int $alarm_triggered_at,
        ?string $meta,
        ?int $created_at,
        ?int $updated_at,
        ?\Chargebee\Enums\Type $type,
        ?\Chargebee\Resources\Alert\Enums\Status $status,
        ?\Chargebee\Resources\Alert\Enums\Scope $scope,
    )
    { 
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->metered_feature_id = $metered_feature_id;
        $this->subscription_id = $subscription_id;
        $this->alarm_triggered_at = $alarm_triggered_at;
        $this->meta = $meta;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at; 
        $this->type = $type; 
        $this->status = $status;
        $this->scope = $scope; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['name'] ?? null,
        $resourceAttributes['description'] ?? null,
        $resourceAttributes['metered_feature_id'] ?? null,
        $resourceAttributes['subscription_id'] ?? null,
        $resourceAttributes['alarm_triggered_at'] ?? null,
        $resourceAttributes['meta'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['updated_at'] ?? null,
        
        
        isset($resourceAttributes['type']) ? \Chargebee\Enums\Type::tryFromValue($resourceAttributes['type']) : null,
         
        isset($resourceAttributes['status']) ? \Chargebee\Resources\Alert\Enums\Status::tryFromValue($resourceAttributes['status']) : null,
        
        isset($resourceAttributes['scope']) ? \Chargebee\Resources\Alert\Enums\Scope::tryFromValue($resourceAttributes['scope']) : null,
         
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
        'alarm_triggered_at' => $this->alarm_triggered_at,
        'meta' => $this->meta,
        'created_at' => $this->created_at,
        'updated_at' => $this->updated_at,
        
        'type' => $this->type?->value,
        
        'status' => $this->status?->value,
        
        'scope' => $this->scope?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>