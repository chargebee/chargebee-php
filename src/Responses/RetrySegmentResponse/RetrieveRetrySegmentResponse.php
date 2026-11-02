<?php

namespace Chargebee\Responses\RetrySegmentResponse;
use Chargebee\Resources\RetrySegment\RetrySegment;

use Chargebee\ValueObjects\ResponseBase;

class RetrieveRetrySegmentResponse extends ResponseBase { 
    /**
    *
    * @var ?RetrySegment $retry_segment
    */
    public ?RetrySegment $retry_segment;
    

    private function __construct(
        ?RetrySegment $retry_segment,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->retry_segment = $retry_segment;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['retry_segment']) ? RetrySegment::from($resourceAttributes['retry_segment']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->retry_segment instanceof RetrySegment){
            $data['retry_segment'] = $this->retry_segment->toArray();
        } 

        return $data;
    }
}
?>