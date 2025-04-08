<?php

namespace Chargebee\Responses\CouponSetResponse;
use Chargebee\Resources\CouponSet\CouponSet;

use Chargebee\ValueObjects\ResponseBase;

class ListCouponSetResponse extends ResponseBase { 
    /**
    *
    * @var array<ListCouponSetResponseListObject> $list
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
            $list = array_map(function (array $result): ListCouponSetResponseListObject {
                return new ListCouponSetResponseListObject(
                    isset($result['coupon_set']) ? CouponSet::from($result['coupon_set']) : null,
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


class ListCouponSetResponseListObject {
    
        public CouponSet $coupon_set;
    
public function __construct(
    CouponSet $coupon_set,
){ 
    $this->coupon_set = $coupon_set;

}
}

?>