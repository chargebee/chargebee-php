<?php

namespace Chargebee\Resources\CpqQuoteSignature;

class CpqQuoteSignature  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?string $name
    */
    public ?string $name;
    
    /**
    *
    * @var ?string $document_name
    */
    public ?string $document_name;
    
    /**
    *
    * @var ?int $expires_at
    */
    public ?int $expires_at;
    
    /**
    *
    * @var ?string $timezone
    */
    public ?string $timezone;
    
    /**
    *
    * @var ?string $provider_request_id
    */
    public ?string $provider_request_id;
    
    /**
    *
    * @var ?string $provider_document_id
    */
    public ?string $provider_document_id;
    
    /**
    *
    * @var ?int $created_at
    */
    public ?int $created_at;
    
    /**
    *
    * @var ?int $modified_at
    */
    public ?int $modified_at;
    
    /**
    *
    * @var ?\Chargebee\Resources\CpqQuoteSignature\Enums\Status $status
    */
    public ?\Chargebee\Resources\CpqQuoteSignature\Enums\Status $status;
    
    /**
    *
    * @var ?\Chargebee\Resources\CpqQuoteSignature\Enums\CustomerAcceptanceMethod $customer_acceptance_method
    */
    public ?\Chargebee\Resources\CpqQuoteSignature\Enums\CustomerAcceptanceMethod $customer_acceptance_method;
    
    /**
    *
    * @var ?\Chargebee\Resources\CpqQuoteSignature\Enums\QuoteType $quote_type
    */
    public ?\Chargebee\Resources\CpqQuoteSignature\Enums\QuoteType $quote_type;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "name" , "document_name" , "expires_at" , "timezone" , "provider_request_id" , "provider_document_id" , "created_at" , "modified_at"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $name,
        ?string $document_name,
        ?int $expires_at,
        ?string $timezone,
        ?string $provider_request_id,
        ?string $provider_document_id,
        ?int $created_at,
        ?int $modified_at,
        ?\Chargebee\Resources\CpqQuoteSignature\Enums\Status $status,
        ?\Chargebee\Resources\CpqQuoteSignature\Enums\CustomerAcceptanceMethod $customer_acceptance_method,
        ?\Chargebee\Resources\CpqQuoteSignature\Enums\QuoteType $quote_type,
    )
    { 
        $this->id = $id;
        $this->name = $name;
        $this->document_name = $document_name;
        $this->expires_at = $expires_at;
        $this->timezone = $timezone;
        $this->provider_request_id = $provider_request_id;
        $this->provider_document_id = $provider_document_id;
        $this->created_at = $created_at;
        $this->modified_at = $modified_at;  
        $this->status = $status;
        $this->customer_acceptance_method = $customer_acceptance_method;
        $this->quote_type = $quote_type; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['name'] ?? null,
        $resourceAttributes['document_name'] ?? null,
        $resourceAttributes['expires_at'] ?? null,
        $resourceAttributes['timezone'] ?? null,
        $resourceAttributes['provider_request_id'] ?? null,
        $resourceAttributes['provider_document_id'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['modified_at'] ?? null,
        
         
        isset($resourceAttributes['status']) ? \Chargebee\Resources\CpqQuoteSignature\Enums\Status::tryFromValue($resourceAttributes['status']) : null,
        
        isset($resourceAttributes['customer_acceptance_method']) ? \Chargebee\Resources\CpqQuoteSignature\Enums\CustomerAcceptanceMethod::tryFromValue($resourceAttributes['customer_acceptance_method']) : null,
        
        isset($resourceAttributes['quote_type']) ? \Chargebee\Resources\CpqQuoteSignature\Enums\QuoteType::tryFromValue($resourceAttributes['quote_type']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'name' => $this->name,
        'document_name' => $this->document_name,
        'expires_at' => $this->expires_at,
        'timezone' => $this->timezone,
        'provider_request_id' => $this->provider_request_id,
        'provider_document_id' => $this->provider_document_id,
        'created_at' => $this->created_at,
        'modified_at' => $this->modified_at,
        
        'status' => $this->status?->value,
        
        'customer_acceptance_method' => $this->customer_acceptance_method?->value,
        
        'quote_type' => $this->quote_type?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>