<?php

namespace Chargebee\Responses\CollectionsPaymentPromiseResponse;
use Chargebee\Resources\CollectionsPaymentPromise\CollectionsPaymentPromise;

use Chargebee\ValueObjects\ResponseBase;

class RetrieveCollectionsPaymentPromiseResponse extends ResponseBase { 
    /**
    *
    * @var ?CollectionsPaymentPromise $collections_payment_promise
    */
    public ?CollectionsPaymentPromise $collections_payment_promise;
    

    private function __construct(
        ?CollectionsPaymentPromise $collections_payment_promise,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->collections_payment_promise = $collections_payment_promise;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['collections_payment_promise']) ? CollectionsPaymentPromise::from($resourceAttributes['collections_payment_promise']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->collections_payment_promise instanceof CollectionsPaymentPromise){
            $data['collections_payment_promise'] = $this->collections_payment_promise->toArray();
        } 

        return $data;
    }
}
?>