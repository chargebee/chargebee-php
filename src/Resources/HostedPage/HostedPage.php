<?php

namespace Chargebee\Resources\HostedPage;

use Chargebee\Resources\Content\Content;
class HostedPage  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?string $url
    */
    public ?string $url;
    
    /**
    *
    * @var ?string $pass_thru_content
    */
    public ?string $pass_thru_content;
    
    /**
    *
    * @var ?bool $embed
    */
    public ?bool $embed;
    
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
    * @var ?Content $content
    */
    public ?Content $content;
    
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
    * @var mixed $checkout_info
    */
    public mixed $checkout_info;
    
    /**
    *
    * @var ?string $business_entity_id
    */
    public ?string $business_entity_id;
    
    /**
    *
    * @var ?\Chargebee\Resources\HostedPage\Enums\Type $type
    */
    public ?\Chargebee\Resources\HostedPage\Enums\Type $type;
    
    /**
    *
    * @var ?\Chargebee\Resources\HostedPage\Enums\State $state
    */
    public ?\Chargebee\Resources\HostedPage\Enums\State $state;
    
    /**
    *
    * @var ?\Chargebee\Resources\HostedPage\Enums\FailureReason $failure_reason
    */
    public ?\Chargebee\Resources\HostedPage\Enums\FailureReason $failure_reason;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "url" , "pass_thru_content" , "embed" , "created_at" , "expires_at" , "content" , "updated_at" , "resource_version" , "checkout_info" , "business_entity_id"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $url,
        ?string $pass_thru_content,
        ?bool $embed,
        ?int $created_at,
        ?int $expires_at,
        ?Content $content,
        ?int $updated_at,
        ?int $resource_version,
        mixed $checkout_info,
        ?string $business_entity_id,
        ?\Chargebee\Resources\HostedPage\Enums\Type $type,
        ?\Chargebee\Resources\HostedPage\Enums\State $state,
        ?\Chargebee\Resources\HostedPage\Enums\FailureReason $failure_reason,
    )
    { 
        $this->id = $id;
        $this->url = $url;
        $this->pass_thru_content = $pass_thru_content;
        $this->embed = $embed;
        $this->created_at = $created_at;
        $this->expires_at = $expires_at;
        $this->content = $content;
        $this->updated_at = $updated_at;
        $this->resource_version = $resource_version;
        $this->checkout_info = $checkout_info;
        $this->business_entity_id = $business_entity_id;  
        $this->type = $type;
        $this->state = $state;
        $this->failure_reason = $failure_reason;
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['url'] ?? null,
        $resourceAttributes['pass_thru_content'] ?? null,
        $resourceAttributes['embed'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['expires_at'] ?? null,
        isset($resourceAttributes['content']) ? Content::from($resourceAttributes['content']) : null,
        $resourceAttributes['updated_at'] ?? null,
        $resourceAttributes['resource_version'] ?? null,
        $resourceAttributes['checkout_info'] ?? null,
        $resourceAttributes['business_entity_id'] ?? null,
        
         
        isset($resourceAttributes['type']) ? \Chargebee\Resources\HostedPage\Enums\Type::tryFromValue($resourceAttributes['type']) : null,
        
        isset($resourceAttributes['state']) ? \Chargebee\Resources\HostedPage\Enums\State::tryFromValue($resourceAttributes['state']) : null,
        
        isset($resourceAttributes['failure_reason']) ? \Chargebee\Resources\HostedPage\Enums\FailureReason::tryFromValue($resourceAttributes['failure_reason']) : null,
        
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['id' => $this->id,
        'url' => $this->url,
        'pass_thru_content' => $this->pass_thru_content,
        'embed' => $this->embed,
        'created_at' => $this->created_at,
        'expires_at' => $this->expires_at,
        
        'updated_at' => $this->updated_at,
        'resource_version' => $this->resource_version,
        'checkout_info' => $this->checkout_info,
        'business_entity_id' => $this->business_entity_id,
        
        'type' => $this->type?->value,
        
        'state' => $this->state?->value,
        
        'failure_reason' => $this->failure_reason?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        if($this->content instanceof Content){
            $data['content'] = $this->content->toArray();
        }
        

        
        return $data;
    }
}
?>