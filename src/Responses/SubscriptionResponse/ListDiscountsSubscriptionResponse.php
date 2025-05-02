<?php

namespace Chargebee\Responses\SubscriptionResponse;
use Chargebee\Resources\Discount\Discount;

use Chargebee\ValueObjects\ResponseBase;

class ListDiscountsSubscriptionResponse extends ResponseBase { 
    /**
    *
    * @var array<ListDiscountsSubscriptionResponseListObject> $list
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
            $list = array_map(function (array $result): ListDiscountsSubscriptionResponseListObject {
                return new ListDiscountsSubscriptionResponseListObject(
                    isset($result['discount']) ? Discount::from($result['discount']) : null,
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


class ListDiscountsSubscriptionResponseListObject {
    
        public Discount $discount;
    
public function __construct(
    Discount $discount,
){ 
    $this->discount = $discount;

}
}

?>