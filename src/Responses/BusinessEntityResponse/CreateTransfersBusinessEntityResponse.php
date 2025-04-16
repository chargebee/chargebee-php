<?php

namespace Chargebee\Responses\BusinessEntityResponse;
use Chargebee\Resources\BusinessEntityTransfer\BusinessEntityTransfer;

use Chargebee\ValueObjects\ResponseBase;

class CreateTransfersBusinessEntityResponse extends ResponseBase { 
    /**
    *
    * @var BusinessEntityTransfer $business_entity_transfer
    */
    public BusinessEntityTransfer $business_entity_transfer;
    

    private function __construct(
        BusinessEntityTransfer $business_entity_transfer,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->business_entity_transfer = $business_entity_transfer;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             BusinessEntityTransfer::from($resourceAttributes['business_entity_transfer']), $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'business_entity_transfer' => $this->business_entity_transfer->toArray(),
        ]);
        

        return $data;
    }
}
?>