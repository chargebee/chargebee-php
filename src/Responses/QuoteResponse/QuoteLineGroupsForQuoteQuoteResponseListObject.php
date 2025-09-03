<?php
namespace Chargebee\Responses\QuoteResponse;

use Chargebee\Resources\QuoteLineGroup\QuoteLineGroup;

class QuoteLineGroupsForQuoteQuoteResponseListObject
{ 
    public QuoteLineGroup $quote_line_group;
    public function __construct(
        QuoteLineGroup $quote_line_group,
    ) { 
        $this->quote_line_group = $quote_line_group;
    }
}
