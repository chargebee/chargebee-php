<?php

namespace Chargebee\Resources\PrivateNote;

class PrivateNote  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?string $email_conversation_id
    */
    public ?string $email_conversation_id;
    
    /**
    *
    * @var ?string $author_id
    */
    public ?string $author_id;
    
    /**
    *
    * @var ?string $author_name
    */
    public ?string $author_name;
    
    /**
    *
    * @var ?string $content_html
    */
    public ?string $content_html;
    
    /**
    *
    * @var ?string $content_text
    */
    public ?string $content_text;
    
    /**
    *
    * @var ?string $meta_data
    */
    public ?string $meta_data;
    
    /**
    *
    * @var ?int $created_at
    */
    public ?int $created_at;
    
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
    * @var ?\Chargebee\Resources\PrivateNote\Enums\AuthorType $author_type
    */
    public ?\Chargebee\Resources\PrivateNote\Enums\AuthorType $author_type;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "email_conversation_id" , "author_id" , "author_name" , "content_html" , "content_text" , "meta_data" , "created_at" , "resource_version" , "updated_at"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $email_conversation_id,
        ?string $author_id,
        ?string $author_name,
        ?string $content_html,
        ?string $content_text,
        ?string $meta_data,
        ?int $created_at,
        ?int $resource_version,
        ?int $updated_at,
        ?\Chargebee\Resources\PrivateNote\Enums\AuthorType $author_type,
    )
    { 
        $this->id = $id;
        $this->email_conversation_id = $email_conversation_id;
        $this->author_id = $author_id;
        $this->author_name = $author_name;
        $this->content_html = $content_html;
        $this->content_text = $content_text;
        $this->meta_data = $meta_data;
        $this->created_at = $created_at;
        $this->resource_version = $resource_version;
        $this->updated_at = $updated_at;  
        $this->author_type = $author_type; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['email_conversation_id'] ?? null,
        $resourceAttributes['author_id'] ?? null,
        $resourceAttributes['author_name'] ?? null,
        $resourceAttributes['content_html'] ?? null,
        $resourceAttributes['content_text'] ?? null,
        $resourceAttributes['meta_data'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['resource_version'] ?? null,
        $resourceAttributes['updated_at'] ?? null,
        
         
        isset($resourceAttributes['author_type']) ? \Chargebee\Resources\PrivateNote\Enums\AuthorType::tryFromValue($resourceAttributes['author_type']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'email_conversation_id' => $this->email_conversation_id,
        'author_id' => $this->author_id,
        'author_name' => $this->author_name,
        'content_html' => $this->content_html,
        'content_text' => $this->content_text,
        'meta_data' => $this->meta_data,
        'created_at' => $this->created_at,
        'resource_version' => $this->resource_version,
        'updated_at' => $this->updated_at,
        
        'author_type' => $this->author_type?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>