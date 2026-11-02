<?php

namespace Chargebee\Resources\EmailMessage;

class EmailMessage  { 
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
    * @var ?string $message_type
    */
    public ?string $message_type;
    
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
    *
    * @var ?string $mailbox_id
    */
    public ?string $mailbox_id;
    
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
    * @var ?string $from_email
    */
    public ?string $from_email;
    
    /**
    *
    * @var ?array<string> $to_emails
    */
    public ?array $to_emails;
    
    /**
    *
    * @var ?array<string> $cc_emails
    */
    public ?array $cc_emails;
    
    /**
    *
    * @var ?array<Attachment> $attachments
    */
    public ?array $attachments;
    
    /**
    *
    * @var ?\Chargebee\Resources\EmailMessage\Enums\AuthorType $author_type
    */
    public ?\Chargebee\Resources\EmailMessage\Enums\AuthorType $author_type;
    
    /**
    *
    * @var ?\Chargebee\Resources\EmailMessage\Enums\SendStatus $send_status
    */
    public ?\Chargebee\Resources\EmailMessage\Enums\SendStatus $send_status;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "email_conversation_id" , "message_type" , "content_html" , "content_text" , "created_at" , "updated_at" , "resource_version" , "mailbox_id" , "author_id" , "author_name" , "from_email" , "to_emails" , "cc_emails" , "attachments"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $email_conversation_id,
        ?string $message_type,
        ?string $content_html,
        ?string $content_text,
        ?int $created_at,
        ?int $updated_at,
        ?int $resource_version,
        ?string $mailbox_id,
        ?string $author_id,
        ?string $author_name,
        ?string $from_email,
        ?array $to_emails,
        ?array $cc_emails,
        ?array $attachments,
        ?\Chargebee\Resources\EmailMessage\Enums\AuthorType $author_type,
        ?\Chargebee\Resources\EmailMessage\Enums\SendStatus $send_status,
    )
    { 
        $this->id = $id;
        $this->email_conversation_id = $email_conversation_id;
        $this->message_type = $message_type;
        $this->content_html = $content_html;
        $this->content_text = $content_text;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->resource_version = $resource_version;
        $this->mailbox_id = $mailbox_id;
        $this->author_id = $author_id;
        $this->author_name = $author_name;
        $this->from_email = $from_email;
        $this->to_emails = $to_emails;
        $this->cc_emails = $cc_emails;
        $this->attachments = $attachments;  
        $this->author_type = $author_type;
        $this->send_status = $send_status; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $attachments = array_map(fn (array $result): Attachment =>  Attachment::from(
            $result
        ), $resourceAttributes['attachments'] ?? []);
        
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['email_conversation_id'] ?? null,
        $resourceAttributes['message_type'] ?? null,
        $resourceAttributes['content_html'] ?? null,
        $resourceAttributes['content_text'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['updated_at'] ?? null,
        $resourceAttributes['resource_version'] ?? null,
        $resourceAttributes['mailbox_id'] ?? null,
        $resourceAttributes['author_id'] ?? null,
        $resourceAttributes['author_name'] ?? null,
        $resourceAttributes['from_email'] ?? null,
        $resourceAttributes['to_emails'] ?? null,
        $resourceAttributes['cc_emails'] ?? null,
        $attachments,
        
         
        isset($resourceAttributes['author_type']) ? \Chargebee\Resources\EmailMessage\Enums\AuthorType::tryFromValue($resourceAttributes['author_type']) : null,
        
        isset($resourceAttributes['send_status']) ? \Chargebee\Resources\EmailMessage\Enums\SendStatus::tryFromValue($resourceAttributes['send_status']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'email_conversation_id' => $this->email_conversation_id,
        'message_type' => $this->message_type,
        'content_html' => $this->content_html,
        'content_text' => $this->content_text,
        'created_at' => $this->created_at,
        'updated_at' => $this->updated_at,
        'resource_version' => $this->resource_version,
        'mailbox_id' => $this->mailbox_id,
        'author_id' => $this->author_id,
        'author_name' => $this->author_name,
        'from_email' => $this->from_email,
        'to_emails' => $this->to_emails,
        'cc_emails' => $this->cc_emails,
        
        
        'author_type' => $this->author_type?->value,
        
        'send_status' => $this->send_status?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        
        if($this->attachments !== []){
            $data['attachments'] = array_map(
                fn (Attachment $attachments): array => $attachments->toArray(),
                $this->attachments
            );
        }

        
        return $data;
    }
}
?>