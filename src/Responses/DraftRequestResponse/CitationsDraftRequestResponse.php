<?php

namespace Chargebee\Responses\DraftRequestResponse;
use Chargebee\Resources\DraftRequest\DraftRequest;

use Chargebee\ValueObjects\ResponseBase;

class CitationsDraftRequestResponse extends ResponseBase { 
    /**
    *
    * @var ?DraftRequest $draft_request
    */
    public ?DraftRequest $draft_request;
    

    private function __construct(
        ?DraftRequest $draft_request,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->draft_request = $draft_request;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['draft_request']) ? DraftRequest::from($resourceAttributes['draft_request']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->draft_request instanceof DraftRequest){
            $data['draft_request'] = $this->draft_request->toArray();
        } 

        return $data;
    }
}
?>