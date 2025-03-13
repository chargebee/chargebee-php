<?php

namespace Chargebee\Responses\RecordedPurchaseResponse;
use Chargebee\Resources\RecordedPurchase\RecordedPurchase;

use Chargebee\ValueObjects\ResponseBase;

class RetrieveRecordedPurchaseResponse extends ResponseBase { 
    /**
    *
    * @var RecordedPurchase $recorded_purchase
    */
    public RecordedPurchase $recorded_purchase;
    

    private function __construct(
        RecordedPurchase $recorded_purchase,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->recorded_purchase = $recorded_purchase;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             RecordedPurchase::from($resourceAttributes['recorded_purchase']), $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'recorded_purchase' => $this->recorded_purchase->toArray(),
        ]);
        

        return $data;
    }
}
?>