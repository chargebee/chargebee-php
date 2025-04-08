<?php

namespace Chargebee\Responses\CouponCodeResponse;
use Chargebee\Resources\CouponCode\CouponCode;

use Chargebee\ValueObjects\ResponseBase;

class ListCouponCodeResponse extends ResponseBase { 
    /**
    *
    * @var array<ListCouponCodeResponseListObject> $list
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
            $list = array_map(function (array $result): ListCouponCodeResponseListObject {
                return new ListCouponCodeResponseListObject(
                    isset($result['coupon_code']) ? CouponCode::from($result['coupon_code']) : null,
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


class ListCouponCodeResponseListObject {
    
        public CouponCode $coupon_code;
    
public function __construct(
    CouponCode $coupon_code,
){ 
    $this->coupon_code = $coupon_code;

}
}

?>