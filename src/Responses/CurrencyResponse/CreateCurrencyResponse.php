<?php

namespace Chargebee\Responses\CurrencyResponse;
use Chargebee\Resources\Currency\Currency;

use Chargebee\ValueObjects\ResponseBase;

class CreateCurrencyResponse extends ResponseBase { 
    /**
    *
    * @var Currency $currency
    */
    public Currency $currency;
    

    private function __construct(
        Currency $currency,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->currency = $currency;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             Currency::from($resourceAttributes['currency']), $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'currency' => $this->currency->toArray(),
        ]);
        

        return $data;
    }
}
?>