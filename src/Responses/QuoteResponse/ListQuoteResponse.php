<?php

namespace Chargebee\Responses\QuoteResponse;
use Chargebee\Resources\QuotedRamp\QuotedRamp;use Chargebee\Resources\QuotedSubscription\QuotedSubscription;use Chargebee\Resources\Quote\Quote;
use Chargebee\ValueObjects\ResponseBase;

class ListQuoteResponse extends ResponseBase { 
    /**
    *
    * @var array<ListQuoteResponseListObject> $list
    */
    public array $list;
    
    /**
    *
    * @var ?string $next_offset
    */
    public ?string $next_offset;
    

    private function __construct(
        array $list,
        ?string $next_offset,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->list = $list;
        $this->next_offset = $next_offset;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
            $list = array_map(function (array $result): ListQuoteResponseListObject {
                return new ListQuoteResponseListObject(
                    isset($result['quote']) ? Quote::from($result['quote']) : null,
                
                    isset($result['quoted_subscription']) ? QuotedSubscription::from($result['quoted_subscription']) : null,
                
                    isset($result['quoted_ramp']) ? QuotedRamp::from($result['quoted_ramp']) : null,
                );}, $resourceAttributes['list'] ?? []);
        
        return new self($list,
            $resourceAttributes['next_offset'] ?? null, $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([
            'list' => $this->list,
            'next_offset' => $this->next_offset,
        ]);
        return $data;
    }
}
?>