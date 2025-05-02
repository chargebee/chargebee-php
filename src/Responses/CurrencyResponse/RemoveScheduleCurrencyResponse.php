<?php

namespace Chargebee\Responses\CurrencyResponse;
use Chargebee\Resources\Currency\Currency;

use Chargebee\ValueObjects\ResponseBase;

class RemoveScheduleCurrencyResponse extends ResponseBase { 
    /**
    *
    * @var ?int $scheduled_at
    */
    public ?int $scheduled_at;
    
    /**
    *
    * @var ?Currency $currency
    */
    public ?Currency $currency;
    

    private function __construct(
        ?int $scheduled_at,
        ?Currency $currency,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->scheduled_at = $scheduled_at;
        $this->currency = $currency;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            $resourceAttributes['scheduled_at'] ?? null,
            isset($resourceAttributes['currency']) ? Currency::from($resourceAttributes['currency']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([
            'scheduled_at' => $this->scheduled_at, 
        ]);
           
        if($this->currency instanceof Currency){
            $data['currency'] = $this->currency->toArray();
        } 

        return $data;
    }
}
?>