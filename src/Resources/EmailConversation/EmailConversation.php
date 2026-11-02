<?php

namespace Chargebee\Resources\EmailConversation;

class EmailConversation  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?string $customer_id
    */
    public ?string $customer_id;
    
    /**
    *
    * @var ?string $mailbox_id
    */
    public ?string $mailbox_id;
    
    /**
    *
    * @var ?string $subject
    */
    public ?string $subject;
    
    /**
    *
    * @var ?string $last_message_preview
    */
    public ?string $last_message_preview;
    
    /**
    *
    * @var ?int $message_count
    */
    public ?int $message_count;
    
    /**
    *
    * @var ?string $status
    */
    public ?string $status;
    
    /**
    *
    * @var ?int $last_message_at
    */
    public ?int $last_message_at;
    
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
    protected static array $knownFields = [ "id" , "customer_id" , "mailbox_id" , "subject" , "last_message_preview" , "message_count" , "status" , "last_message_at" , "created_at" , "updated_at" , "resource_version"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $customer_id,
        ?string $mailbox_id,
        ?string $subject,
        ?string $last_message_preview,
        ?int $message_count,
        ?string $status,
        ?int $last_message_at,
        ?int $created_at,
        ?int $updated_at,
        ?int $resource_version,
    )
    { 
        $this->id = $id;
        $this->customer_id = $customer_id;
        $this->mailbox_id = $mailbox_id;
        $this->subject = $subject;
        $this->last_message_preview = $last_message_preview;
        $this->message_count = $message_count;
        $this->status = $status;
        $this->last_message_at = $last_message_at;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->resource_version = $resource_version;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['customer_id'] ?? null,
        $resourceAttributes['mailbox_id'] ?? null,
        $resourceAttributes['subject'] ?? null,
        $resourceAttributes['last_message_preview'] ?? null,
        $resourceAttributes['message_count'] ?? null,
        $resourceAttributes['status'] ?? null,
        $resourceAttributes['last_message_at'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['updated_at'] ?? null,
        $resourceAttributes['resource_version'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'customer_id' => $this->customer_id,
        'mailbox_id' => $this->mailbox_id,
        'subject' => $this->subject,
        'last_message_preview' => $this->last_message_preview,
        'message_count' => $this->message_count,
        'status' => $this->status,
        'last_message_at' => $this->last_message_at,
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