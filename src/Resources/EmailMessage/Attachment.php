<?php

namespace Chargebee\Resources\EmailMessage;

class Attachment  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?string $email_message_id
    */
    public ?string $email_message_id;
    
    /**
    *
    * @var ?string $file_name
    */
    public ?string $file_name;
    
    /**
    *
    * @var ?string $content_type
    */
    public ?string $content_type;
    
    /**
    *
    * @var ?int $size_bytes
    */
    public ?int $size_bytes;
    
    /**
    *
    * @var ?string $content_disposition
    */
    public ?string $content_disposition;
    
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
    * @var ?int $resource_version
    */
    public ?int $resource_version;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "email_message_id" , "file_name" , "content_type" , "size_bytes" , "content_disposition" , "created_at" , "updated_at" , "resource_version"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $email_message_id,
        ?string $file_name,
        ?string $content_type,
        ?int $size_bytes,
        ?string $content_disposition,
        ?int $created_at,
        ?int $updated_at,
        ?int $resource_version,
    )
    { 
        $this->id = $id;
        $this->email_message_id = $email_message_id;
        $this->file_name = $file_name;
        $this->content_type = $content_type;
        $this->size_bytes = $size_bytes;
        $this->content_disposition = $content_disposition;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->resource_version = $resource_version;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['email_message_id'] ?? null,
        $resourceAttributes['file_name'] ?? null,
        $resourceAttributes['content_type'] ?? null,
        $resourceAttributes['size_bytes'] ?? null,
        $resourceAttributes['content_disposition'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['updated_at'] ?? null,
        $resourceAttributes['resource_version'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'email_message_id' => $this->email_message_id,
        'file_name' => $this->file_name,
        'content_type' => $this->content_type,
        'size_bytes' => $this->size_bytes,
        'content_disposition' => $this->content_disposition,
        'created_at' => $this->created_at,
        'updated_at' => $this->updated_at,
        'resource_version' => $this->resource_version,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>