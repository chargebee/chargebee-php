<?php

namespace Chargebee\Responses\BusinessEntityResponse;
use Chargebee\Resources\BusinessEntity\BusinessEntity;

use Chargebee\ValueObjects\ResponseBase;

class UpdateBusinessEntityResponse extends ResponseBase { 
    /**
    *
    * @var ?BusinessEntity $business_entity
    */
    public ?BusinessEntity $business_entity;
    

    private function __construct(
        ?BusinessEntity $business_entity,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->business_entity = $business_entity;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['business_entity']) ? BusinessEntity::from($resourceAttributes['business_entity']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->business_entity instanceof BusinessEntity){
            $data['business_entity'] = $this->business_entity->toArray();
        } 

        return $data;
    }
}
?>