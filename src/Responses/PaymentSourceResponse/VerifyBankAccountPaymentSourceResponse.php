<?php

namespace Chargebee\Responses\PaymentSourceResponse;
use Chargebee\Resources\PaymentSource\PaymentSource;

use Chargebee\ValueObjects\ResponseBase;

class VerifyBankAccountPaymentSourceResponse extends ResponseBase { 
    /**
    *
    * @var ?PaymentSource $payment_source
    */
    public ?PaymentSource $payment_source;
    

    private function __construct(
        ?PaymentSource $payment_source,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->payment_source = $payment_source;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['payment_source']) ? PaymentSource::from($resourceAttributes['payment_source']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->payment_source instanceof PaymentSource){
            $data['payment_source'] = $this->payment_source->toArray();
        } 

        return $data;
    }
}
?>