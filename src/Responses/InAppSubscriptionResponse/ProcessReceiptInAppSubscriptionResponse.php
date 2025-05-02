<?php

namespace Chargebee\Responses\InAppSubscriptionResponse;
use Chargebee\Resources\InAppSubscription\InAppSubscription;

use Chargebee\ValueObjects\ResponseBase;

class ProcessReceiptInAppSubscriptionResponse extends ResponseBase { 
    /**
    *
    * @var ?InAppSubscription $in_app_subscription
    */
    public ?InAppSubscription $in_app_subscription;
    

    private function __construct(
        ?InAppSubscription $in_app_subscription,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->in_app_subscription = $in_app_subscription;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['in_app_subscription']) ? InAppSubscription::from($resourceAttributes['in_app_subscription']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->in_app_subscription instanceof InAppSubscription){
            $data['in_app_subscription'] = $this->in_app_subscription->toArray();
        } 

        return $data;
    }
}
?>