<?php

namespace Chargebee\Responses\OmnichannelSubscriptionResponse;
use Chargebee\Resources\OmnichannelSubscription\OmnichannelSubscription;

use Chargebee\ValueObjects\ResponseBase;

class RetrieveOmnichannelSubscriptionResponse extends ResponseBase { 
    /**
    *
    * @var ?OmnichannelSubscription $omnichannel_subscription
    */
    public ?OmnichannelSubscription $omnichannel_subscription;
    

    private function __construct(
        ?OmnichannelSubscription $omnichannel_subscription,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->omnichannel_subscription = $omnichannel_subscription;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['omnichannel_subscription']) ? OmnichannelSubscription::from($resourceAttributes['omnichannel_subscription']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->omnichannel_subscription instanceof OmnichannelSubscription){
            $data['omnichannel_subscription'] = $this->omnichannel_subscription->toArray();
        } 

        return $data;
    }
}
?>