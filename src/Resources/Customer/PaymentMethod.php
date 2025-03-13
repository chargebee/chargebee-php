<?php

namespace Chargebee\Resources\Customer;

class PaymentMethod  { 
    /**
    *
    * @var string $type
    */
    public string $type;
    
    /**
    *
    * @var string $gateway
    */
    public string $gateway;
    
    /**
    *
    * @var ?string $gateway_account_id
    */
    public ?string $gateway_account_id;
    
    /**
    *
    * @var string $status
    */
    public string $status;
    
    /**
    *
    * @var string $reference_id
    */
    public string $reference_id;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "type" , "gateway" , "gateway_account_id" , "status" , "reference_id"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        string $type,
        string $gateway,
        ?string $gateway_account_id,
        string $status,
        string $reference_id,
    )
    { 
        $this->type = $type;
        $this->gateway = $gateway;
        $this->gateway_account_id = $gateway_account_id;
        $this->status = $status;
        $this->reference_id = $reference_id;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['type'] ,
        $resourceAttributes['gateway'] ,
        $resourceAttributes['gateway_account_id'] ?? null,
        $resourceAttributes['status'] ,
        $resourceAttributes['reference_id'] ,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['type' => $this->type,
        'gateway' => $this->gateway,
        'gateway_account_id' => $this->gateway_account_id,
        'status' => $this->status,
        'reference_id' => $this->reference_id,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>