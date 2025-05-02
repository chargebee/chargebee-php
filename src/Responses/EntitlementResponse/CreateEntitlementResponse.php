<?php

namespace Chargebee\Responses\EntitlementResponse;
use Chargebee\Resources\Entitlement\Entitlement;

use Chargebee\ValueObjects\ResponseBase;

class CreateEntitlementResponse extends ResponseBase { 
    /**
    *
    * @var ?Entitlement $entitlement
    */
    public ?Entitlement $entitlement;
    

    private function __construct(
        ?Entitlement $entitlement,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->entitlement = $entitlement;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['entitlement']) ? Entitlement::from($resourceAttributes['entitlement']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->entitlement instanceof Entitlement){
            $data['entitlement'] = $this->entitlement->toArray();
        } 

        return $data;
    }
}
?>