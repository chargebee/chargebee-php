<?php

namespace Chargebee\Responses\DisputeResponse;
use Chargebee\Resources\Dispute\Dispute;

use Chargebee\ValueObjects\ResponseBase;

class RetrieveDisputeResponse extends ResponseBase { 
    /**
    *
    * @var ?Dispute $dispute
    */
    public ?Dispute $dispute;
    

    private function __construct(
        ?Dispute $dispute,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->dispute = $dispute;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['dispute']) ? Dispute::from($resourceAttributes['dispute']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->dispute instanceof Dispute){
            $data['dispute'] = $this->dispute->toArray();
        } 

        return $data;
    }
}
?>