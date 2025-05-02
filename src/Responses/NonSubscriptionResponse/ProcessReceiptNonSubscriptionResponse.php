<?php

namespace Chargebee\Responses\NonSubscriptionResponse;
use Chargebee\Resources\NonSubscription\NonSubscription;

use Chargebee\ValueObjects\ResponseBase;

class ProcessReceiptNonSubscriptionResponse extends ResponseBase { 
    /**
    *
    * @var ?NonSubscription $non_subscription
    */
    public ?NonSubscription $non_subscription;
    

    private function __construct(
        ?NonSubscription $non_subscription,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->non_subscription = $non_subscription;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['non_subscription']) ? NonSubscription::from($resourceAttributes['non_subscription']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->non_subscription instanceof NonSubscription){
            $data['non_subscription'] = $this->non_subscription->toArray();
        } 

        return $data;
    }
}
?>