<?php

namespace Chargebee\Responses\DifferentialPriceResponse;
use Chargebee\Resources\DifferentialPrice\DifferentialPrice;

use Chargebee\ValueObjects\ResponseBase;

class ListDifferentialPriceResponse extends ResponseBase { 
    /**
    *
    * @var array<ListDifferentialPriceResponseListObject> $list
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
    )
    {
        parent::__construct($responseHeaders);
        $this->list = $list;
        $this->next_offset = $next_offset;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
            $list = array_map(function (array $result): ListDifferentialPriceResponseListObject {
                return new ListDifferentialPriceResponseListObject(
                    isset($result['differential_price']) ? DifferentialPrice::from($result['differential_price']) : null,
                );}, $resourceAttributes['list'] ?? []);
        
        return new self($list,
            $resourceAttributes['next_offset'] ?? null, $headers);
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


class ListDifferentialPriceResponseListObject {
    
        public DifferentialPrice $differential_price;
    
public function __construct(
    DifferentialPrice $differential_price,
){ 
    $this->differential_price = $differential_price;

}
}

?>