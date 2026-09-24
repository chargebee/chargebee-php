<?php

namespace Chargebee\Resources\EmailLog;

class EmailLog  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?string $template_name
    */
    public ?string $template_name;
    
    /**
    *
    * @var ?string $from_address
    */
    public ?string $from_address;
    
    /**
    *
    * @var ?string $to_address
    */
    public ?string $to_address;
    
    /**
    *
    * @var ?string $subject
    */
    public ?string $subject;
    
    /**
    *
    * @var ?int $sent_on
    */
    public ?int $sent_on;
    
    /**
    *
    * @var ?string $customer_id
    */
    public ?string $customer_id;
    
    /**
    *
    * @var ?string $site_id
    */
    public ?string $site_id;
    
    /**
    *
    * @var ?string $business_entity_id
    */
    public ?string $business_entity_id;
    
    /**
    *
    * @var ?string $brand_id
    */
    public ?string $brand_id;
    
    /**
    *
    * @var ?string $error_message
    */
    public ?string $error_message;
    
    /**
    *
    * @var ?\Chargebee\Enums\Status $status
    */
    public ?\Chargebee\Enums\Status $status;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "template_name" , "from_address" , "to_address" , "subject" , "sent_on" , "customer_id" , "site_id" , "business_entity_id" , "brand_id" , "error_message"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $template_name,
        ?string $from_address,
        ?string $to_address,
        ?string $subject,
        ?int $sent_on,
        ?string $customer_id,
        ?string $site_id,
        ?string $business_entity_id,
        ?string $brand_id,
        ?string $error_message,
        ?\Chargebee\Enums\Status $status,
    )
    { 
        $this->id = $id;
        $this->template_name = $template_name;
        $this->from_address = $from_address;
        $this->to_address = $to_address;
        $this->subject = $subject;
        $this->sent_on = $sent_on;
        $this->customer_id = $customer_id;
        $this->site_id = $site_id;
        $this->business_entity_id = $business_entity_id;
        $this->brand_id = $brand_id;
        $this->error_message = $error_message; 
        $this->status = $status;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['template_name'] ?? null,
        $resourceAttributes['from_address'] ?? null,
        $resourceAttributes['to_address'] ?? null,
        $resourceAttributes['subject'] ?? null,
        $resourceAttributes['sent_on'] ?? null,
        $resourceAttributes['customer_id'] ?? null,
        $resourceAttributes['site_id'] ?? null,
        $resourceAttributes['business_entity_id'] ?? null,
        $resourceAttributes['brand_id'] ?? null,
        $resourceAttributes['error_message'] ?? null,
        
        
        isset($resourceAttributes['status']) ? \Chargebee\Enums\Status::tryFromValue($resourceAttributes['status']) : null,
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'template_name' => $this->template_name,
        'from_address' => $this->from_address,
        'to_address' => $this->to_address,
        'subject' => $this->subject,
        'sent_on' => $this->sent_on,
        'customer_id' => $this->customer_id,
        'site_id' => $this->site_id,
        'business_entity_id' => $this->business_entity_id,
        'brand_id' => $this->brand_id,
        'error_message' => $this->error_message,
        
        'status' => $this->status?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>