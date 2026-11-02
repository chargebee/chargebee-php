<?php

namespace Chargebee\Responses\CollectionsPaymentPromiseResponse;
use Chargebee\Resources\CollectionsPaymentPromise\CollectionsPaymentPromise;

use Chargebee\ValueObjects\ResponseBase;

class CreateCollectionsPaymentPromiseCollectionsPaymentPromiseResponse extends ResponseBase { 
    /**
    *
    * @var ?array<CollectionsPaymentPromise> $collections_payment_promises
    */
    public ?array $collections_payment_promises;
    

    private function __construct(
        ?array $collections_payment_promises,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->collections_payment_promises = $collections_payment_promises;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        $collections_payment_promises = array_map(fn (array $result): CollectionsPaymentPromise =>  CollectionsPaymentPromise::from(
            $result
        ), $resourceAttributes['collections_payment_promises'] ?? []);
        
        return new self($collections_payment_promises, $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
          

        if($this->collections_payment_promises !== []) {
            $data['collections_payment_promises'] = array_map(
                fn (CollectionsPaymentPromise $collections_payment_promises): array => $collections_payment_promises->toArray(),
                $this->collections_payment_promises
            );
        }
        return $data;
    }
}
?>