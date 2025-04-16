<?php

namespace Chargebee\Responses\EntitlementResponse;
use Chargebee\Resources\Entitlement\Entitlement;

use Chargebee\ValueObjects\ResponseBase;

class CreateEntitlementResponse extends ResponseBase { 
    /**
    *
    * @var Entitlement $entitlement
    */
    public Entitlement $entitlement;
    

    private function __construct(
        Entitlement $entitlement,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->entitlement = $entitlement;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             Entitlement::from($resourceAttributes['entitlement']), $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'entitlement' => $this->entitlement->toArray(),
        ]);
        

        return $data;
    }
}
?>