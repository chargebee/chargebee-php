<?php

namespace Chargebee\Responses\PaymentVoucherResponse;
use Chargebee\Resources\PaymentVoucher\PaymentVoucher;
use Chargebee\ValueObjects\ResponseBase;

class PaymentVouchersForCustomerPaymentVoucherResponse extends ResponseBase { 
    /**
    *
    * @var array<PaymentVouchersForCustomerPaymentVoucherResponseListObject> $list
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
            $list = array_map(function (array $result): PaymentVouchersForCustomerPaymentVoucherResponseListObject {
                return new PaymentVouchersForCustomerPaymentVoucherResponseListObject(
                    isset($result['payment_voucher']) ? PaymentVoucher::from($result['payment_voucher']) : null,
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