<?php
namespace Chargebee\Responses\PaymentVoucherResponse;

use Chargebee\Resources\PaymentVoucher\PaymentVoucher;

class PaymentVouchersForInvoicePaymentVoucherResponseListObject
{ 
    public PaymentVoucher $payment_voucher;
    public function __construct(
        PaymentVoucher $payment_voucher,
    ) { 
        $this->payment_voucher = $payment_voucher;
    }
}
