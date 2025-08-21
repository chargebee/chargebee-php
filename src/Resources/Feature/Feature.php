<?php

namespace Chargebee\Resources\Feature;

use Chargebee\ValueObjects\SupportsCustomFields;
class Feature  extends SupportsCustomFields  { 
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
    * @var ?string $unit
    */
    public ?string $unit;
    
    /**
    *
    * @var ?int $resource_version
    */
    public ?int $resource_version;
    
    /**
    *
    * @var ?int $updated_at
    */
    public ?int $updated_at;
    
    /**
    *
    * @var ?int $created_at
    */
    public ?int $created_at;
    
    /**
    *
    * @var ?array<Level> $levels
    */
    public ?array $levels;
    
    /**
    *
    * @var ?\Chargebee\Resources\Feature\Enums\Status $status
    */
    public ?\Chargebee\Resources\Feature\Enums\Status $status;
    
    /**
    *
    * @var ?\Chargebee\Resources\Feature\Enums\Type $type
    */
    public ?\Chargebee\Resources\Feature\Enums\Type $type;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "name" , "description" , "unit" , "resource_version" , "updated_at" , "created_at" , "levels"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $name,
        ?string $description,
        ?string $unit,
        ?int $resource_version,
        ?int $updated_at,
        ?int $created_at,
        ?array $levels,
        ?\Chargebee\Resources\Feature\Enums\Status $status,
        ?\Chargebee\Resources\Feature\Enums\Type $type,
    )
    { 
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->unit = $unit;
        $this->resource_version = $resource_version;
        $this->updated_at = $updated_at;
        $this->created_at = $created_at;
        $this->levels = $levels;  
        $this->status = $status;
        $this->type = $type; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $levels = array_map(fn (array $result): Level =>  Level::from(
            $result
        ), $resourceAttributes['levels'] ?? []);
        
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['name'] ?? null,
        $resourceAttributes['description'] ?? null,
        $resourceAttributes['unit'] ?? null,
        $resourceAttributes['resource_version'] ?? null,
        $resourceAttributes['updated_at'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $levels,
        
         
        isset($resourceAttributes['status']) ? \Chargebee\Resources\Feature\Enums\Status::tryFromValue($resourceAttributes['status']) : null,
        
        isset($resourceAttributes['type']) ? \Chargebee\Resources\Feature\Enums\Type::tryFromValue($resourceAttributes['type']) : null,
         
        );
       foreach ($resourceAttributes as $key => $value) {
            if (!in_array($key, $returnData::$knownFields, true)) {
                $returnData->__set($key, $value);
            }
        } 
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'name' => $this->name,
        'description' => $this->description,
        'unit' => $this->unit,
        'resource_version' => $this->resource_version,
        'updated_at' => $this->updated_at,
        'created_at' => $this->created_at,
        
        
        'status' => $this->status?->value,
        
        'type' => $this->type?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        
        if($this->levels !== []){
            $data['levels'] = array_map(
                fn (Level $levels): array => $levels->toArray(),
                $this->levels
            );
        }

        foreach($this->_data as $keys => $value){
            if (!in_array($keys, $this::$knownFields)) {
                $data[$keys] = $value;
            }
        } 
        return $data;
    }
}
?>