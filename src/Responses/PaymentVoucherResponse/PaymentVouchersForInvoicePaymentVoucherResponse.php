<?php

namespace Chargebee\Responses\PaymentVoucherResponse;
use Chargebee\Resources\PaymentVoucher\PaymentVoucher;

use Chargebee\ValueObjects\ResponseBase;

class PaymentVouchersForInvoicePaymentVoucherResponse extends ResponseBase { 
    /**
    *
    * @var array<PaymentVouchersForInvoicePaymentVoucherResponseListObject> $list
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
            $list = array_map(function (array $result): PaymentVouchersForInvoicePaymentVoucherResponseListObject {
                return new PaymentVouchersForInvoicePaymentVoucherResponseListObject(
                    isset($result['payment_voucher']) ? PaymentVoucher::from($result['payment_voucher']) : null,
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


class PaymentVouchersForInvoicePaymentVoucherResponseListObject {
    
        public PaymentVoucher $payment_voucher;
    
public function __construct(
    PaymentVoucher $payment_voucher,
){ 
    $this->payment_voucher = $payment_voucher;

}
}

?>