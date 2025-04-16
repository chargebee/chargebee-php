<?php

namespace Chargebee\Resources\Customer;

class ReferralUrl  { 
    /**
    *
    * @var ?string $external_customer_id
    */
    public ?string $external_customer_id;
    
    /**
    *
    * @var string $referral_sharing_url
    */
    public string $referral_sharing_url;
    
    /**
    *
    * @var int $created_at
    */
    public int $created_at;
    
    /**
    *
    * @var int $updated_at
    */
    public int $updated_at;
    
    /**
    *
    * @var string $referral_campaign_id
    */
    public string $referral_campaign_id;
    
    /**
    *
    * @var string $referral_account_id
    */
    public string $referral_account_id;
    
    /**
    *
    * @var ?string $referral_external_campaign_id
    */
    public ?string $referral_external_campaign_id;
    
    /**
    *
    * @var string $referral_system
    */
    public string $referral_system;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "external_customer_id" , "referral_sharing_url" , "created_at" , "updated_at" , "referral_campaign_id" , "referral_account_id" , "referral_external_campaign_id" , "referral_system"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $external_customer_id,
        string $referral_sharing_url,
        int $created_at,
        int $updated_at,
        string $referral_campaign_id,
        string $referral_account_id,
        ?string $referral_external_campaign_id,
        string $referral_system,
    )
    { 
        $this->external_customer_id = $external_customer_id;
        $this->referral_sharing_url = $referral_sharing_url;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->referral_campaign_id = $referral_campaign_id;
        $this->referral_account_id = $referral_account_id;
        $this->referral_external_campaign_id = $referral_external_campaign_id;
        $this->referral_system = $referral_system;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['external_customer_id'] ?? null,
        $resourceAttributes['referral_sharing_url'] ,
        $resourceAttributes['created_at'] ,
        $resourceAttributes['updated_at'] ,
        $resourceAttributes['referral_campaign_id'] ,
        $resourceAttributes['referral_account_id'] ,
        $resourceAttributes['referral_external_campaign_id'] ?? null,
        $resourceAttributes['referral_system'] ,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['external_customer_id' => $this->external_customer_id,
        'referral_sharing_url' => $this->referral_sharing_url,
        'created_at' => $this->created_at,
        'updated_at' => $this->updated_at,
        'referral_campaign_id' => $this->referral_campaign_id,
        'referral_account_id' => $this->referral_account_id,
        'referral_external_campaign_id' => $this->referral_external_campaign_id,
        'referral_system' => $this->referral_system,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>