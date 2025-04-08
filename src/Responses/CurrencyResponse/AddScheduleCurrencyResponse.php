<?php

namespace Chargebee\Responses\CurrencyResponse;
use Chargebee\Resources\Currency\Currency;

use Chargebee\ValueObjects\ResponseBase;

class AddScheduleCurrencyResponse extends ResponseBase { 
    /**
    *
    * @var int $scheduled_at
    */
    public int $scheduled_at;
    
    /**
    *
    * @var Currency $currency
    */
    public Currency $currency;
    

    private function __construct(
        int $scheduled_at,
        Currency $currency,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->scheduled_at = $scheduled_at;
        $this->currency = $currency;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            $resourceAttributes['scheduled_at'] ,
             Currency::from($resourceAttributes['currency']), $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([
            'scheduled_at' => $this->scheduled_at, 
            'currency' => $this->currency->toArray(),
        ]);
        

        return $data;
    }
}
?>