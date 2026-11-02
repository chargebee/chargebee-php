<?php

namespace Chargebee\Responses\CollectionsPaymentPromiseResponse;
use Chargebee\Resources\CollectionsPaymentPromise\CollectionsPaymentPromise;

use Chargebee\ValueObjects\ResponseBase;

class ListCollectionsPaymentPromisesCollectionsPaymentPromiseResponse extends ResponseBase { 
    /**
    *
    * @var array<ListCollectionsPaymentPromisesCollectionsPaymentPromiseResponseListObject> $list
    */
    public array $list;
    
    /**
    *
    * @var ?string $next_offset
    */
    public ?string $next_offset;
    

    private function __construct(
        array $list,
        ?string $next_offset,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->list = $list;
        $this->next_offset = $next_offset;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
            $list = array_map(function (array $result): ListCollectionsPaymentPromisesCollectionsPaymentPromiseResponseListObject {
                return new ListCollectionsPaymentPromisesCollectionsPaymentPromiseResponseListObject(
                    isset($result['collections_payment_promise']) ? CollectionsPaymentPromise::from($result['collections_payment_promise']) : null,
                );}, $resourceAttributes['list'] ?? []);
        
        return new self($list,
            $resourceAttributes['next_offset'] ?? null, $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([
            'list' => $this->list,
            'next_offset' => $this->next_offset,
        ]);
        return $data;
    }
}
?>