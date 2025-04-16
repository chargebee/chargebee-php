<?php

namespace Chargebee\Responses\PurchaseResponse;
use Chargebee\Resources\Purchase\Purchase;

use Chargebee\ValueObjects\ResponseBase;

class CreatePurchaseResponse extends ResponseBase { 
    /**
    *
    * @var Purchase $purchase
    */
    public Purchase $purchase;
    

    private function __construct(
        Purchase $purchase,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->purchase = $purchase;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             Purchase::from($resourceAttributes['purchase']), $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'purchase' => $this->purchase->toArray(),
        ]);
        

        return $data;
    }
}
?>