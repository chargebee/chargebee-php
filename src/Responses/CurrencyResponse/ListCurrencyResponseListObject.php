<?php
namespace Chargebee\Responses\CurrencyResponse;

use Chargebee\Resources\Currency\Currency;

class ListCurrencyResponseListObject
{ 
    public Currency $currency;
    public function __construct(
        Currency $currency,
    ) { 
        $this->currency = $currency;
    }
}
