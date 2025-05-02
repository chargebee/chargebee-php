<?php

namespace Chargebee\Responses\SubscriptionResponse;
use Chargebee\Resources\Estimate\Estimate;

use Chargebee\ValueObjects\ResponseBase;

class AddChargeAtTermEndSubscriptionResponse extends ResponseBase { 
    /**
    *
    * @var ?Estimate $estimate
    */
    public ?Estimate $estimate;
    

    private function __construct(
        ?Estimate $estimate,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->estimate = $estimate;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['estimate']) ? Estimate::from($resourceAttributes['estimate']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->estimate instanceof Estimate){
            $data['estimate'] = $this->estimate->toArray();
        } 

        return $data;
    }
}
?>