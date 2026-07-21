<?php

namespace Chargebee\Resources\Meter;

class Meter  { 
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
    * @var ?string $query
    */
    public ?string $query;
    
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
    * @var ?array<\Chargebee\Resources\ColumnDefinition\ColumnDefinition> $column_definitions
    */
    public ?array $column_definitions;
    
    /**
    *
    * @var ?array<\Chargebee\Resources\Feature\Feature> $features
    */
    public ?array $features;
    
    /**
    *
    * @var ?\Chargebee\Resources\Meter\Enums\Type $type
    */
    public ?\Chargebee\Resources\Meter\Enums\Type $type;
    
    /**
    *
    * @var ?\Chargebee\Resources\Meter\Enums\Status $status
    */
    public ?\Chargebee\Resources\Meter\Enums\Status $status;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "name" , "description" , "query" , "created_at" , "updated_at" , "column_definitions" , "features"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $name,
        ?string $description,
        ?string $query,
        ?int $created_at,
        ?int $updated_at,
        ?array $column_definitions,
        ?array $features,
        ?\Chargebee\Resources\Meter\Enums\Type $type,
        ?\Chargebee\Resources\Meter\Enums\Status $status,
    )
    { 
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->query = $query;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->column_definitions = $column_definitions;
        $this->features = $features;  
        $this->type = $type;
        $this->status = $status; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $column_definitions = array_map(fn (array $result): \Chargebee\Resources\ColumnDefinition\ColumnDefinition =>  \Chargebee\Resources\ColumnDefinition\ColumnDefinition::from(
            $result
        ), $resourceAttributes['column_definitions'] ?? []);
        
        $features = array_map(fn (array $result): \Chargebee\Resources\Feature\Feature =>  \Chargebee\Resources\Feature\Feature::from(
            $result
        ), $resourceAttributes['features'] ?? []);
        
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['name'] ?? null,
        $resourceAttributes['description'] ?? null,
        $resourceAttributes['query'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['updated_at'] ?? null,
        $column_definitions,
        $features,
        
         
        isset($resourceAttributes['type']) ? \Chargebee\Resources\Meter\Enums\Type::tryFromValue($resourceAttributes['type']) : null,
        
        isset($resourceAttributes['status']) ? \Chargebee\Resources\Meter\Enums\Status::tryFromValue($resourceAttributes['status']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'name' => $this->name,
        'description' => $this->description,
        'query' => $this->query,
        'created_at' => $this->created_at,
        'updated_at' => $this->updated_at,
        
        
        
        'type' => $this->type?->value,
        
        'status' => $this->status?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        
        if($this->column_definitions !== []){
            $data['column_definitions'] = array_map(
                fn (\Chargebee\Resources\ColumnDefinition\ColumnDefinition $column_definitions): array => $column_definitions->toArray(),
                $this->column_definitions
            );
        }
        if($this->features !== []){
            $data['features'] = array_map(
                fn (\Chargebee\Resources\Feature\Feature $features): array => $features->toArray(),
                $this->features
            );
        }

        
        return $data;
    }
}
?>