<?php

namespace Chargebee\Responses\DraftRequestResponse;
use Chargebee\Resources\DraftEstimate\DraftEstimate;

use Chargebee\ValueObjects\ResponseBase;

class EstimateDraftRequestResponse extends ResponseBase { 
    /**
    *
    * @var ?DraftEstimate $draft_estimate
    */
    public ?DraftEstimate $draft_estimate;
    

    private function __construct(
        ?DraftEstimate $draft_estimate,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->draft_estimate = $draft_estimate;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['draft_estimate']) ? DraftEstimate::from($resourceAttributes['draft_estimate']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->draft_estimate instanceof DraftEstimate){
            $data['draft_estimate'] = $this->draft_estimate->toArray();
        } 

        return $data;
    }
}
?>