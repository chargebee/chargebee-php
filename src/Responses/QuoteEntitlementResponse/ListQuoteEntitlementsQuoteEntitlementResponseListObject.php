<?php
namespace Chargebee\Responses\QuoteEntitlementResponse;

use Chargebee\Resources\QuoteEntitlement\QuoteEntitlement;

class ListQuoteEntitlementsQuoteEntitlementResponseListObject
{ 
    public QuoteEntitlement $quote_entitlement;
    public function __construct(
        QuoteEntitlement $quote_entitlement,
    ) { 
        $this->quote_entitlement = $quote_entitlement;
    }
}
