<?php

namespace Chargebee\Responses\PaymentSourceResponse;
use Chargebee\Resources\ThirdPartyPaymentMethod\ThirdPartyPaymentMethod;

use Chargebee\ValueObjects\ResponseBase;

class ExportPaymentSourcePaymentSourceResponse extends ResponseBase { 
    /**
    *
    * @var ?ThirdPartyPaymentMethod $third_party_payment_method
    */
    public ?ThirdPartyPaymentMethod $third_party_payment_method;
    

    private function __construct(
        ?ThirdPartyPaymentMethod $third_party_payment_method,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->third_party_payment_method = $third_party_payment_method;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['third_party_payment_method']) ? ThirdPartyPaymentMethod::from($resourceAttributes['third_party_payment_method']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->third_party_payment_method instanceof ThirdPartyPaymentMethod){
            $data['third_party_payment_method'] = $this->third_party_payment_method->toArray();
        } 

        return $data;
    }
}
?>