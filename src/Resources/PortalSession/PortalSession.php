<?php

namespace Chargebee\Resources\PortalSession;

class PortalSession  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?string $token
    */
    public ?string $token;
    
    /**
    *
    * @var ?string $access_url
    */
    public ?string $access_url;
    
    /**
    *
    * @var ?string $redirect_url
    */
    public ?string $redirect_url;
    
    /**
    *
    * @var ?int $created_at
    */
    public ?int $created_at;
    
    /**
    *
    * @var ?int $expires_at
    */
    public ?int $expires_at;
    
    /**
    *
    * @var ?string $customer_id
    */
    public ?string $customer_id;
    
    /**
    *
    * @var ?int $login_at
    */
    public ?int $login_at;
    
    /**
    *
    * @var ?int $logout_at
    */
    public ?int $logout_at;
    
    /**
    *
    * @var ?string $login_ipaddress
    */
    public ?string $login_ipaddress;
    
    /**
    *
    * @var ?string $logout_ipaddress
    */
    public ?string $logout_ipaddress;
    
    /**
    *
    * @var ?array<LinkedCustomer> $linked_customers
    */
    public ?array $linked_customers;
    
    /**
    *
    * @var ?\Chargebee\Resources\PortalSession\Enums\Status $status
    */
    public ?\Chargebee\Resources\PortalSession\Enums\Status $status;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "token" , "access_url" , "redirect_url" , "created_at" , "expires_at" , "customer_id" , "login_at" , "logout_at" , "login_ipaddress" , "logout_ipaddress" , "linked_customers"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $token,
        ?string $access_url,
        ?string $redirect_url,
        ?int $created_at,
        ?int $expires_at,
        ?string $customer_id,
        ?int $login_at,
        ?int $logout_at,
        ?string $login_ipaddress,
        ?string $logout_ipaddress,
        ?array $linked_customers,
        ?\Chargebee\Resources\PortalSession\Enums\Status $status,
    )
    { 
        $this->id = $id;
        $this->token = $token;
        $this->access_url = $access_url;
        $this->redirect_url = $redirect_url;
        $this->created_at = $created_at;
        $this->expires_at = $expires_at;
        $this->customer_id = $customer_id;
        $this->login_at = $login_at;
        $this->logout_at = $logout_at;
        $this->login_ipaddress = $login_ipaddress;
        $this->logout_ipaddress = $logout_ipaddress;
        $this->linked_customers = $linked_customers;  
        $this->status = $status; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $linked_customers = array_map(fn (array $result): LinkedCustomer =>  LinkedCustomer::from(
            $result
        ), $resourceAttributes['linked_customers'] ?? []);
        
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['token'] ?? null,
        $resourceAttributes['access_url'] ?? null,
        $resourceAttributes['redirect_url'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['expires_at'] ?? null,
        $resourceAttributes['customer_id'] ?? null,
        $resourceAttributes['login_at'] ?? null,
        $resourceAttributes['logout_at'] ?? null,
        $resourceAttributes['login_ipaddress'] ?? null,
        $resourceAttributes['logout_ipaddress'] ?? null,
        $linked_customers,
        
         
        isset($resourceAttributes['status']) ? \Chargebee\Resources\PortalSession\Enums\Status::tryFromValue($resourceAttributes['status']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'token' => $this->token,
        'access_url' => $this->access_url,
        'redirect_url' => $this->redirect_url,
        'created_at' => $this->created_at,
        'expires_at' => $this->expires_at,
        'customer_id' => $this->customer_id,
        'login_at' => $this->login_at,
        'logout_at' => $this->logout_at,
        'login_ipaddress' => $this->login_ipaddress,
        'logout_ipaddress' => $this->logout_ipaddress,
        
        
        'status' => $this->status?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        
        if($this->linked_customers !== []){
            $data['linked_customers'] = array_map(
                fn (LinkedCustomer $linked_customers): array => $linked_customers->toArray(),
                $this->linked_customers
            );
        }

        
        return $data;
    }
}
?>