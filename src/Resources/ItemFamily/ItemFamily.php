<?php

namespace Chargebee\Resources\ItemFamily;

use Chargebee\ValueObjects\SupportsCustomFields;
class ItemFamily  extends SupportsCustomFields  { 
    /**
    *
    * @var string $id
    */
    public string $id;
    
    /**
    *
    * @var string $name
    */
    public string $name;
    
    /**
    *
    * @var ?string $description
    */
    public ?string $description;
    
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
    * @var ?string $business_entity_id
    */
    public ?string $business_entity_id;
    
    /**
    *
    * @var bool $deleted
    */
    public bool $deleted;
    
    /**
    *
    * @var ?\Chargebee\Enums\Channel $channel
    */
    public ?\Chargebee\Enums\Channel $channel;
    
    /**
    *
    * @var ?\Chargebee\Resources\ItemFamily\Enums\Status $status
    */
    public ?\Chargebee\Resources\ItemFamily\Enums\Status $status;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "name" , "description" , "resource_version" , "updated_at" , "business_entity_id" , "deleted"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        string $id,
        string $name,
        ?string $description,
        ?int $resource_version,
        ?int $updated_at,
        ?string $business_entity_id,
        bool $deleted,
        ?\Chargebee\Enums\Channel $channel,
        ?\Chargebee\Resources\ItemFamily\Enums\Status $status,
    )
    { 
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->resource_version = $resource_version;
        $this->updated_at = $updated_at;
        $this->business_entity_id = $business_entity_id;
        $this->deleted = $deleted; 
        $this->channel = $channel; 
        $this->status = $status;
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ,
        $resourceAttributes['name'] ,
        $resourceAttributes['description'] ?? null,
        $resourceAttributes['resource_version'] ?? null,
        $resourceAttributes['updated_at'] ?? null,
        $resourceAttributes['business_entity_id'] ?? null,
        $resourceAttributes['deleted'] ,
        
        
        isset($resourceAttributes['channel']) ? \Chargebee\Enums\Channel::tryFromValue($resourceAttributes['channel']) : null,
         
        isset($resourceAttributes['status']) ? \Chargebee\Resources\ItemFamily\Enums\Status::tryFromValue($resourceAttributes['status']) : null,
        
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
        'resource_version' => $this->resource_version,
        'updated_at' => $this->updated_at,
        'business_entity_id' => $this->business_entity_id,
        'deleted' => $this->deleted,
        
        'channel' => $this->channel?->value,
        
        'status' => $this->status?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        foreach($this->_data as $keys => $value){
            if (!in_array($keys, $this::$knownFields)) {
                $data[$keys] = $value;
            }
        } 
        return $data;
    }
}
?>