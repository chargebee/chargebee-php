<?php

namespace Chargebee\Resources\Export;

class Export  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?string $operation_type
    */
    public ?string $operation_type;
    
    /**
    *
    * @var ?int $created_at
    */
    public ?int $created_at;
    
    /**
    *
    * @var ?Download $download
    */
    public ?Download $download;
    
    /**
    *
    * @var ?\Chargebee\Resources\Export\Enums\MimeType $mime_type
    */
    public ?\Chargebee\Resources\Export\Enums\MimeType $mime_type;
    
    /**
    *
    * @var ?\Chargebee\Resources\Export\Enums\Status $status
    */
    public ?\Chargebee\Resources\Export\Enums\Status $status;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "operation_type" , "created_at" , "download"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $operation_type,
        ?int $created_at,
        ?Download $download,
        ?\Chargebee\Resources\Export\Enums\MimeType $mime_type,
        ?\Chargebee\Resources\Export\Enums\Status $status,
    )
    { 
        $this->id = $id;
        $this->operation_type = $operation_type;
        $this->created_at = $created_at;
        $this->download = $download;  
        $this->mime_type = $mime_type;
        $this->status = $status;
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['operation_type'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        isset($resourceAttributes['download']) ? Download::from($resourceAttributes['download']) : null,
        
         
        isset($resourceAttributes['mime_type']) ? \Chargebee\Resources\Export\Enums\MimeType::tryFromValue($resourceAttributes['mime_type']) : null,
        
        isset($resourceAttributes['status']) ? \Chargebee\Resources\Export\Enums\Status::tryFromValue($resourceAttributes['status']) : null,
        
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['id' => $this->id,
        'operation_type' => $this->operation_type,
        'created_at' => $this->created_at,
        
        
        'mime_type' => $this->mime_type?->value,
        
        'status' => $this->status?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        if($this->download instanceof Download){
            $data['download'] = $this->download->toArray();
        }
        

        
        return $data;
    }
}
?>