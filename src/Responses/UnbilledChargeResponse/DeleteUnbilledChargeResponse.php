<?php

namespace Chargebee\Responses\UnbilledChargeResponse;
use Chargebee\Resources\UnbilledCharge\UnbilledCharge;

use Chargebee\ValueObjects\ResponseBase;

class DeleteUnbilledChargeResponse extends ResponseBase { 
    /**
    *
    * @var ?UnbilledCharge $unbilled_charge
    */
    public ?UnbilledCharge $unbilled_charge;
    

    private function __construct(
        ?UnbilledCharge $unbilled_charge,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->unbilled_charge = $unbilled_charge;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['unbilled_charge']) ? UnbilledCharge::from($resourceAttributes['unbilled_charge']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->unbilled_charge instanceof UnbilledCharge){
            $data['unbilled_charge'] = $this->unbilled_charge->toArray();
        } 

        return $data;
    }
}
?>