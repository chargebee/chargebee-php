<?php

namespace Chargebee\Responses\PaymentSourceResponse;
use Chargebee\Resources\PaymentSource\PaymentSource;

use Chargebee\ValueObjects\ResponseBase;

class RetrievePaymentSourceResponse extends ResponseBase { 
    /**
    *
    * @var PaymentSource $payment_source
    */
    public PaymentSource $payment_source;
    

    private function __construct(
        PaymentSource $payment_source,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->payment_source = $payment_source;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             PaymentSource::from($resourceAttributes['payment_source']), $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'payment_source' => $this->payment_source->toArray(),
        ]);
        

        return $data;
    }
}
?>