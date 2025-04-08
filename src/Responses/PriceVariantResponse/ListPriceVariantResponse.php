<?php

namespace Chargebee\Responses\PriceVariantResponse;
use Chargebee\Resources\PriceVariant\PriceVariant;

use Chargebee\ValueObjects\ResponseBase;

class ListPriceVariantResponse extends ResponseBase { 
    /**
    *
    * @var array<ListPriceVariantResponseListObject> $list
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
            $list = array_map(function (array $result): ListPriceVariantResponseListObject {
                return new ListPriceVariantResponseListObject(
                    isset($result['price_variant']) ? PriceVariant::from($result['price_variant']) : null,
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


class ListPriceVariantResponseListObject {
    
        public PriceVariant $price_variant;
    
public function __construct(
    PriceVariant $price_variant,
){ 
    $this->price_variant = $price_variant;

}
}

?>