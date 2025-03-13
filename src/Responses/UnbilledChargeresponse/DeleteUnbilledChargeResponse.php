<?php

namespace Chargebee\Responses\UnbilledChargeResponse;
use Chargebee\Resources\UnbilledCharge\UnbilledCharge;

use Chargebee\ValueObjects\ResponseBase;

class DeleteUnbilledChargeResponse extends ResponseBase { 
    /**
    *
    * @var UnbilledCharge $unbilled_charge
    */
    public UnbilledCharge $unbilled_charge;
    

    private function __construct(
        UnbilledCharge $unbilled_charge,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->unbilled_charge = $unbilled_charge;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             UnbilledCharge::from($resourceAttributes['unbilled_charge']), $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'unbilled_charge' => $this->unbilled_charge->toArray(),
        ]);
        

        return $data;
    }
}
?>