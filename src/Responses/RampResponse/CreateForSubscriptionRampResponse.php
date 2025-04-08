<?php

namespace Chargebee\Responses\RampResponse;
use Chargebee\Resources\Ramp\Ramp;

use Chargebee\ValueObjects\ResponseBase;

class CreateForSubscriptionRampResponse extends ResponseBase { 
    /**
    *
    * @var Ramp $ramp
    */
    public Ramp $ramp;
    

    private function __construct(
        Ramp $ramp,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->ramp = $ramp;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             Ramp::from($resourceAttributes['ramp']), $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'ramp' => $this->ramp->toArray(),
        ]);
        

        return $data;
    }
}
?>