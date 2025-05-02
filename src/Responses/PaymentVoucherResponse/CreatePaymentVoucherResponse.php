<?php

namespace Chargebee\Responses\PaymentVoucherResponse;
use Chargebee\Resources\PaymentVoucher\PaymentVoucher;

use Chargebee\ValueObjects\ResponseBase;

class CreatePaymentVoucherResponse extends ResponseBase { 
    /**
    *
    * @var ?PaymentVoucher $payment_voucher
    */
    public ?PaymentVoucher $payment_voucher;
    

    private function __construct(
        ?PaymentVoucher $payment_voucher,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->payment_voucher = $payment_voucher;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['payment_voucher']) ? PaymentVoucher::from($resourceAttributes['payment_voucher']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->payment_voucher instanceof PaymentVoucher){
            $data['payment_voucher'] = $this->payment_voucher->toArray();
        } 

        return $data;
    }
}
?>