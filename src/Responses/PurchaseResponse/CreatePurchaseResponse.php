<?php

namespace Chargebee\Responses\PurchaseResponse;
use Chargebee\Resources\Purchase\Purchase;

use Chargebee\ValueObjects\ResponseBase;

class CreatePurchaseResponse extends ResponseBase { 
    /**
    *
    * @var ?Purchase $purchase
    */
    public ?Purchase $purchase;
    

    private function __construct(
        ?Purchase $purchase,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->purchase = $purchase;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['purchase']) ? Purchase::from($resourceAttributes['purchase']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->purchase instanceof Purchase){
            $data['purchase'] = $this->purchase->toArray();
        } 

        return $data;
    }
}
?>