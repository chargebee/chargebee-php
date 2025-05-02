<?php

namespace Chargebee\Responses\CurrencyResponse;
use Chargebee\Resources\Currency\Currency;

use Chargebee\ValueObjects\ResponseBase;

class CreateCurrencyResponse extends ResponseBase { 
    /**
    *
    * @var ?Currency $currency
    */
    public ?Currency $currency;
    

    private function __construct(
        ?Currency $currency,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->currency = $currency;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['currency']) ? Currency::from($resourceAttributes['currency']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->currency instanceof Currency){
            $data['currency'] = $this->currency->toArray();
        } 

        return $data;
    }
}
?>