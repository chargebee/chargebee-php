<?php

namespace Chargebee\Resources\MeteredFeature;

class MeteredFeature  { 
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
    * @var ?\Chargebee\Enums\Type $type
    */
    public ?\Chargebee\Enums\Type $type;
    
    /**
    *
    * @var ?\Chargebee\Enums\Status $status
    */
    public ?\Chargebee\Enums\Status $status;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "name" , "description" , "query" , "column_definitions" , "features"  ];

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
        ?array $column_definitions,
        ?array $features,
        ?\Chargebee\Enums\Type $type,
        ?\Chargebee\Enums\Status $status,
    )
    { 
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->query = $query;
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
        $column_definitions,
        $features,
        
        
        isset($resourceAttributes['type']) ? \Chargebee\Enums\Type::tryFromValue($resourceAttributes['type']) : null,
        
        isset($resourceAttributes['status']) ? \Chargebee\Enums\Status::tryFromValue($resourceAttributes['status']) : null,
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'name' => $this->name,
        'description' => $this->description,
        'query' => $this->query,
        
        
        
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