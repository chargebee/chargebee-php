<?php

namespace Chargebee\Resources\OfferFulfillment;

class OfferFulfillment  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?string $personalized_offer_id
    */
    public ?string $personalized_offer_id;
    
    /**
    *
    * @var ?string $option_id
    */
    public ?string $option_id;
    
    /**
    *
    * @var ?string $redirect_url
    */
    public ?string $redirect_url;
    
    /**
    *
    * @var ?int $failed_at
    */
    public ?int $failed_at;
    
    /**
    *
    * @var ?int $created_at
    */
    public ?int $created_at;
    
    /**
    *
    * @var ?int $completed_at
    */
    public ?int $completed_at;
    
    /**
    *
    * @var ?Error $error
    */
    public ?Error $error;
    
    /**
    *
    * @var ?\Chargebee\Resources\OfferFulfillment\Enums\ProcessingType $processing_type
    */
    public ?\Chargebee\Resources\OfferFulfillment\Enums\ProcessingType $processing_type;
    
    /**
    *
    * @var ?\Chargebee\Resources\OfferFulfillment\Enums\Status $status
    */
    public ?\Chargebee\Resources\OfferFulfillment\Enums\Status $status;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "personalized_offer_id" , "option_id" , "redirect_url" , "failed_at" , "created_at" , "completed_at" , "error"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $personalized_offer_id,
        ?string $option_id,
        ?string $redirect_url,
        ?int $failed_at,
        ?int $created_at,
        ?int $completed_at,
        ?Error $error,
        ?\Chargebee\Resources\OfferFulfillment\Enums\ProcessingType $processing_type,
        ?\Chargebee\Resources\OfferFulfillment\Enums\Status $status,
    )
    { 
        $this->id = $id;
        $this->personalized_offer_id = $personalized_offer_id;
        $this->option_id = $option_id;
        $this->redirect_url = $redirect_url;
        $this->failed_at = $failed_at;
        $this->created_at = $created_at;
        $this->completed_at = $completed_at;
        $this->error = $error;  
        $this->processing_type = $processing_type;
        $this->status = $status; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['personalized_offer_id'] ?? null,
        $resourceAttributes['option_id'] ?? null,
        $resourceAttributes['redirect_url'] ?? null,
        $resourceAttributes['failed_at'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['completed_at'] ?? null,
        isset($resourceAttributes['error']) ? Error::from($resourceAttributes['error']) : null,
        
         
        isset($resourceAttributes['processing_type']) ? \Chargebee\Resources\OfferFulfillment\Enums\ProcessingType::tryFromValue($resourceAttributes['processing_type']) : null,
        
        isset($resourceAttributes['status']) ? \Chargebee\Resources\OfferFulfillment\Enums\Status::tryFromValue($resourceAttributes['status']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'personalized_offer_id' => $this->personalized_offer_id,
        'option_id' => $this->option_id,
        'redirect_url' => $this->redirect_url,
        'failed_at' => $this->failed_at,
        'created_at' => $this->created_at,
        'completed_at' => $this->completed_at,
        
        
        'processing_type' => $this->processing_type?->value,
        
        'status' => $this->status?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        if($this->error instanceof Error){
            $data['error'] = $this->error->toArray();
        }
        

        
        return $data;
    }
}
?>