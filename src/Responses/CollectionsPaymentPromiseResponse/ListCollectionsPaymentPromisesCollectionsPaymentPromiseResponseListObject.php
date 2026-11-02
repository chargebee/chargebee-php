<?php
namespace Chargebee\Responses\CollectionsPaymentPromiseResponse;

use Chargebee\Resources\CollectionsPaymentPromise\CollectionsPaymentPromise;

class ListCollectionsPaymentPromisesCollectionsPaymentPromiseResponseListObject
{ 
    public CollectionsPaymentPromise $collections_payment_promise;
    public function __construct(
        CollectionsPaymentPromise $collections_payment_promise,
    ) { 
        $this->collections_payment_promise = $collections_payment_promise;
    }
}
