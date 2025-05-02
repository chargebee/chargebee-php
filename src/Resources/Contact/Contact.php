<?php

namespace Chargebee\Resources\Contact;

class Contact  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?string $first_name
    */
    public ?string $first_name;
    
    /**
    *
    * @var ?string $last_name
    */
    public ?string $last_name;
    
    /**
    *
    * @var ?string $email
    */
    public ?string $email;
    
    /**
    *
    * @var ?string $phone
    */
    public ?string $phone;
    
    /**
    *
    * @var ?string $label
    */
    public ?string $label;
    
    /**
    *
    * @var ?bool $enabled
    */
    public ?bool $enabled;
    
    /**
    *
    * @var ?bool $send_account_email
    */
    public ?bool $send_account_email;
    
    /**
    *
    * @var ?bool $send_billing_email
    */
    public ?bool $send_billing_email;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "first_name" , "last_name" , "email" , "phone" , "label" , "enabled" , "send_account_email" , "send_billing_email"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $first_name,
        ?string $last_name,
        ?string $email,
        ?string $phone,
        ?string $label,
        ?bool $enabled,
        ?bool $send_account_email,
        ?bool $send_billing_email,
    )
    { 
        $this->id = $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->phone = $phone;
        $this->label = $label;
        $this->enabled = $enabled;
        $this->send_account_email = $send_account_email;
        $this->send_billing_email = $send_billing_email;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['first_name'] ?? null,
        $resourceAttributes['last_name'] ?? null,
        $resourceAttributes['email'] ?? null,
        $resourceAttributes['phone'] ?? null,
        $resourceAttributes['label'] ?? null,
        $resourceAttributes['enabled'] ?? null,
        $resourceAttributes['send_account_email'] ?? null,
        $resourceAttributes['send_billing_email'] ?? null,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['id' => $this->id,
        'first_name' => $this->first_name,
        'last_name' => $this->last_name,
        'email' => $this->email,
        'phone' => $this->phone,
        'label' => $this->label,
        'enabled' => $this->enabled,
        'send_account_email' => $this->send_account_email,
        'send_billing_email' => $this->send_billing_email,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>