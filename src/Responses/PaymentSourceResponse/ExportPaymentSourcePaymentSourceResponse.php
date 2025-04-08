<?php

namespace Chargebee\Responses\PaymentSourceResponse;
use Chargebee\Resources\ThirdPartyPaymentMethod\ThirdPartyPaymentMethod;

use Chargebee\ValueObjects\ResponseBase;

class ExportPaymentSourcePaymentSourceResponse extends ResponseBase { 
    /**
    *
    * @var ThirdPartyPaymentMethod $third_party_payment_method
    */
    public ThirdPartyPaymentMethod $third_party_payment_method;
    

    private function __construct(
        ThirdPartyPaymentMethod $third_party_payment_method,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->third_party_payment_method = $third_party_payment_method;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             ThirdPartyPaymentMethod::from($resourceAttributes['third_party_payment_method']), $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'third_party_payment_method' => $this->third_party_payment_method->toArray(),
        ]);
        

        return $data;
    }
}
?>