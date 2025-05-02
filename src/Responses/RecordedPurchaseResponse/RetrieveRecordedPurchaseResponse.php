<?php

namespace Chargebee\Responses\RecordedPurchaseResponse;
use Chargebee\Resources\RecordedPurchase\RecordedPurchase;

use Chargebee\ValueObjects\ResponseBase;

class RetrieveRecordedPurchaseResponse extends ResponseBase { 
    /**
    *
    * @var ?RecordedPurchase $recorded_purchase
    */
    public ?RecordedPurchase $recorded_purchase;
    

    private function __construct(
        ?RecordedPurchase $recorded_purchase,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->recorded_purchase = $recorded_purchase;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['recorded_purchase']) ? RecordedPurchase::from($resourceAttributes['recorded_purchase']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->recorded_purchase instanceof RecordedPurchase){
            $data['recorded_purchase'] = $this->recorded_purchase->toArray();
        } 

        return $data;
    }
}
?>