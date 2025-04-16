<?php

namespace Chargebee\Responses\CouponResponse;
use Chargebee\Resources\Coupon\Coupon;

use Chargebee\ValueObjects\ResponseBase;

class ListCouponResponse extends ResponseBase { 
    /**
    *
    * @var array<ListCouponResponseListObject> $list
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
            $list = array_map(function (array $result): ListCouponResponseListObject {
                return new ListCouponResponseListObject(
                    isset($result['coupon']) ? Coupon::from($result['coupon']) : null,
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


class ListCouponResponseListObject {
    
        public Coupon $coupon;
    
public function __construct(
    Coupon $coupon,
){ 
    $this->coupon = $coupon;

}
}

?>