<?php

namespace Chargebee\Responses\OfferEventResponse;

use Chargebee\ValueObjects\ResponseBase;

class OfferEventsOfferEventResponse extends ResponseBase { 

    private function __construct(
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self( $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([
        ]);
        

        return $data;
    }
}
?>