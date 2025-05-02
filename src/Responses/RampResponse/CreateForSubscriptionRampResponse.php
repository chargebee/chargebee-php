<?php

namespace Chargebee\Responses\RampResponse;
use Chargebee\Resources\Ramp\Ramp;

use Chargebee\ValueObjects\ResponseBase;

class CreateForSubscriptionRampResponse extends ResponseBase { 
    /**
    *
    * @var ?Ramp $ramp
    */
    public ?Ramp $ramp;
    

    private function __construct(
        ?Ramp $ramp,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->ramp = $ramp;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['ramp']) ? Ramp::from($resourceAttributes['ramp']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->ramp instanceof Ramp){
            $data['ramp'] = $this->ramp->toArray();
        } 

        return $data;
    }
}
?>