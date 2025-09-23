<?php

namespace Chargebee\Responses\PersonalizedOfferResponse;
use Chargebee\Resources\Brand\Brand;
use Chargebee\Resources\PersonalizedOffer\PersonalizedOffer;

use Chargebee\ValueObjects\ResponseBase;

class PersonalizedOffersPersonalizedOfferResponse extends ResponseBase { 
    /**
    *
    * @var ?array<PersonalizedOffer> $personalized_offers
    */
    public ?array $personalized_offers;
    
    /**
    *
    * @var ?Brand $brand
    */
    public ?Brand $brand;
    
    /**
    *
    * @var ?int $expires_at
    */
    public ?int $expires_at;
    

    private function __construct(
        ?array $personalized_offers,
        ?Brand $brand,
        ?int $expires_at,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->personalized_offers = $personalized_offers;
        $this->brand = $brand;
        $this->expires_at = $expires_at;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        $personalized_offers = array_map(fn (array $result): PersonalizedOffer =>  PersonalizedOffer::from(
            $result
        ), $resourceAttributes['personalized_offers'] ?? []);
        
        return new self($personalized_offers,
            isset($resourceAttributes['brand']) ? Brand::from($resourceAttributes['brand']) : null,
            
            $resourceAttributes['expires_at'] ?? null, $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([  
            'expires_at' => $this->expires_at,
        ]);
           
        if($this->brand instanceof Brand){
            $data['brand'] = $this->brand->toArray();
        }   

        if($this->personalized_offers !== []) {
            $data['personalized_offers'] = array_map(
                fn (PersonalizedOffer $personalized_offers): array => $personalized_offers->toArray(),
                $this->personalized_offers
            );
        }
        return $data;
    }
}
?>