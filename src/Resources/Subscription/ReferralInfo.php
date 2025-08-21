<?php

namespace Chargebee\Resources\Subscription;

class ReferralInfo  { 
    /**
    *
    * @var ?string $referral_code
    */
    public ?string $referral_code;
    
    /**
    *
    * @var ?string $coupon_code
    */
    public ?string $coupon_code;
    
    /**
    *
    * @var ?string $referrer_id
    */
    public ?string $referrer_id;
    
    /**
    *
    * @var ?string $external_reference_id
    */
    public ?string $external_reference_id;
    
    /**
    *
    * @var ?string $reward_status
    */
    public ?string $reward_status;
    
    /**
    *
    * @var ?string $referral_system
    */
    public ?string $referral_system;
    
    /**
    *
    * @var ?string $account_id
    */
    public ?string $account_id;
    
    /**
    *
    * @var ?string $campaign_id
    */
    public ?string $campaign_id;
    
    /**
    *
    * @var ?string $external_campaign_id
    */
    public ?string $external_campaign_id;
    
    /**
    *
    * @var ?string $friend_offer_type
    */
    public ?string $friend_offer_type;
    
    /**
    *
    * @var ?string $referrer_reward_type
    */
    public ?string $referrer_reward_type;
    
    /**
    *
    * @var ?string $notify_referral_system
    */
    public ?string $notify_referral_system;
    
    /**
    *
    * @var ?string $destination_url
    */
    public ?string $destination_url;
    
    /**
    *
    * @var ?bool $post_purchase_widget_enabled
    */
    public ?bool $post_purchase_widget_enabled;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "referral_code" , "coupon_code" , "referrer_id" , "external_reference_id" , "reward_status" , "referral_system" , "account_id" , "campaign_id" , "external_campaign_id" , "friend_offer_type" , "referrer_reward_type" , "notify_referral_system" , "destination_url" , "post_purchase_widget_enabled"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $referral_code,
        ?string $coupon_code,
        ?string $referrer_id,
        ?string $external_reference_id,
        ?string $reward_status,
        ?string $referral_system,
        ?string $account_id,
        ?string $campaign_id,
        ?string $external_campaign_id,
        ?string $friend_offer_type,
        ?string $referrer_reward_type,
        ?string $notify_referral_system,
        ?string $destination_url,
        ?bool $post_purchase_widget_enabled,
    )
    { 
        $this->referral_code = $referral_code;
        $this->coupon_code = $coupon_code;
        $this->referrer_id = $referrer_id;
        $this->external_reference_id = $external_reference_id;
        $this->reward_status = $reward_status;
        $this->referral_system = $referral_system;
        $this->account_id = $account_id;
        $this->campaign_id = $campaign_id;
        $this->external_campaign_id = $external_campaign_id;
        $this->friend_offer_type = $friend_offer_type;
        $this->referrer_reward_type = $referrer_reward_type;
        $this->notify_referral_system = $notify_referral_system;
        $this->destination_url = $destination_url;
        $this->post_purchase_widget_enabled = $post_purchase_widget_enabled;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['referral_code'] ?? null,
        $resourceAttributes['coupon_code'] ?? null,
        $resourceAttributes['referrer_id'] ?? null,
        $resourceAttributes['external_reference_id'] ?? null,
        $resourceAttributes['reward_status'] ?? null,
        $resourceAttributes['referral_system'] ?? null,
        $resourceAttributes['account_id'] ?? null,
        $resourceAttributes['campaign_id'] ?? null,
        $resourceAttributes['external_campaign_id'] ?? null,
        $resourceAttributes['friend_offer_type'] ?? null,
        $resourceAttributes['referrer_reward_type'] ?? null,
        $resourceAttributes['notify_referral_system'] ?? null,
        $resourceAttributes['destination_url'] ?? null,
        $resourceAttributes['post_purchase_widget_enabled'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['referral_code' => $this->referral_code,
        'coupon_code' => $this->coupon_code,
        'referrer_id' => $this->referrer_id,
        'external_reference_id' => $this->external_reference_id,
        'reward_status' => $this->reward_status,
        'referral_system' => $this->referral_system,
        'account_id' => $this->account_id,
        'campaign_id' => $this->campaign_id,
        'external_campaign_id' => $this->external_campaign_id,
        'friend_offer_type' => $this->friend_offer_type,
        'referrer_reward_type' => $this->referrer_reward_type,
        'notify_referral_system' => $this->notify_referral_system,
        'destination_url' => $this->destination_url,
        'post_purchase_widget_enabled' => $this->post_purchase_widget_enabled,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>