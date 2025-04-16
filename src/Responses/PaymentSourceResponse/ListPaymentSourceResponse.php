<?php

namespace Chargebee\Responses\PaymentSourceResponse;
use Chargebee\Resources\PaymentSource\PaymentSource;

use Chargebee\ValueObjects\ResponseBase;

class ListPaymentSourceResponse extends ResponseBase { 
    /**
    *
    * @var array<ListPaymentSourceResponseListObject> $list
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
            $list = array_map(function (array $result): ListPaymentSourceResponseListObject {
                return new ListPaymentSourceResponseListObject(
                    isset($result['payment_source']) ? PaymentSource::from($result['payment_source']) : null,
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


class ListPaymentSourceResponseListObject {
    
        public PaymentSource $payment_source;
    
public function __construct(
    PaymentSource $payment_source,
){ 
    $this->payment_source = $payment_source;

}
}

?>