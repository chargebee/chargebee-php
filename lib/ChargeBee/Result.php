<?php

namespace ChargeBee\ChargeBee;

use ChargeBee\ChargeBee\Models;

class Result
{
    private $_response;

    private $_responseObj;

    public function __construct($_response)
    {
        $this->_response = $_response;
        $this->_responseObj = [];
    }

    public function subscription()
    {
        $subscription = $this->_get(
            'subscription',
            Models\Subscription::class,
            [
              'addons' => Models\SubscriptionAddon::class,
              'event_based_addons' => Models\SubscriptionEventBasedAddon::class,
              'charged_event_based_addons' => Models\SubscriptionChargedEventBasedAddon::class,
              'coupons' => Models\SubscriptionCoupon::class,
              'shipping_address' => Models\SubscriptionShippingAddress::class,
              'referral_info' => Models\SubscriptionReferralInfo::class,
            ]
        );

        return $subscription;
    }

    public function customer()
    {
        $customer = $this->_get(
            'customer',
            Models\Customer::class,
            [
              'billing_address' => Models\CustomerBillingAddress::class,
              'referral_urls' => Models\CustomerReferralUrl::class,
              'contacts' => Models\CustomerContact::class,
              'payment_method' => Models\CustomerPaymentMethod::class,
              'balances' => Models\CustomerBalance::class,
            ]
        );

        return $customer;
    }

    public function contact()
    {
        $contact = $this->_get('contact', Models\Contact::class);

        return $contact;
    }

    public function paymentSource()
    {
        $payment_source = $this->_get(
            'payment_source',
            Models\PaymentSource::class,
            [
              'card' => Models\PaymentSourceCard::class,
              'bank_account' => Models\PaymentSourceBankAccount::class,
              'amazon_payment' => Models\PaymentSourceAmazonPayment::class,
              'paypal' => Models\PaymentSourcePaypal::class,
            ]
        );

        return $payment_source;
    }

    public function thirdPartyPaymentMethod()
    {
        $third_party_payment_method = $this->_get('third_party_payment_method', Models\ThirdPartyPaymentMethod::class);

        return $third_party_payment_method;
    }

    public function virtualBankAccount()
    {
        $virtual_bank_account = $this->_get('virtual_bank_account', Models\VirtualBankAccount::class);

        return $virtual_bank_account;
    }

    public function card()
    {
        $card = $this->_get('card', Models\Card::class);

        return $card;
    }

    public function promotionalCredit()
    {
        $promotional_credit = $this->_get('promotional_credit', Models\PromotionalCredit::class);

        return $promotional_credit;
    }

    public function invoice()
    {
        $invoice = $this->_get(
            'invoice',
            Models\Invoice::class,
            [
              'line_items' => Models\InvoiceLineItem::class,
              'discounts' => Models\InvoiceDiscount::class,
              'line_item_discounts' => Models\InvoiceLineItemDiscount::class,
              'taxes' => Models\InvoiceTax::class,
              'line_item_taxes' => Models\InvoiceLineItemTax::class,
              'line_item_tiers' => Models\InvoiceLineItemTier::class,
              'linked_payments' => Models\InvoiceLinkedPayment::class,
              'applied_credits' => Models\InvoiceAppliedCredit::class,
              'adjustment_credit_notes' => Models\InvoiceAdjustmentCreditNote::class,
              'issued_credit_notes' => Models\InvoiceIssuedCreditNote::class,
              'linked_orders' => Models\InvoiceLinkedOrder::class,
              'notes' => Models\InvoiceNote::class,
              'shipping_address' => Models\InvoiceShippingAddress::class,
              'billing_address' => Models\InvoiceBillingAddress::class,
            ]
        );

        return $invoice;
    }

    public function creditNote()
    {
        $credit_note = $this->_get(
            'credit_note',
            Models\CreditNote::class,
            [
              'line_items' => Models\CreditNoteLineItem::class,
              'discounts' => Models\CreditNoteDiscount::class,
              'line_item_discounts' => Models\CreditNoteLineItemDiscount::class,
              'line_item_tiers' => Models\CreditNoteLineItemTier::class,
              'taxes' => Models\CreditNoteTax::class,
              'line_item_taxes' => Models\CreditNoteLineItemTax::class,
              'linked_refunds' => Models\CreditNoteLinkedRefund::class,
              'allocations' => Models\CreditNoteAllocation::class,
            ]
        );

        return $credit_note;
    }

    public function unbilledCharge()
    {
        $unbilled_charge = $this->_get(
            'unbilled_charge',
            Models\UnbilledCharge::class,
            [
              'tiers' => Models\UnbilledChargeTier::class,
            ]
        );

        return $unbilled_charge;
    }

    public function order()
    {
        $order = $this->_get(
            'order',
            Models\Order::class,
            [
              'order_line_items' => Models\OrderOrderLineItem::class,
              'shipping_address' => Models\OrderShippingAddress::class,
              'billing_address' => Models\OrderBillingAddress::class,
              'line_item_taxes' => Models\OrderLineItemTax::class,
              'line_item_discounts' => Models\OrderLineItemDiscount::class,
              'linked_credit_notes' => Models\OrderLinkedCreditNote::class,
            ]
        );

        return $order;
    }

    public function gift()
    {
        $gift = $this->_get(
            'gift',
            Models\Gift::class,
            [
              'gifter' => Models\GiftGifter::class,
              'gift_receiver' => Models\GiftGiftReceiver::class,
              'gift_timelines' => Models\GiftGiftTimeline::class,
            ]
        );

        return $gift;
    }

    public function transaction()
    {
        $transaction = $this->_get(
            'transaction',
            Models\Transaction::class,
            [
              'linked_invoices' => Models\TransactionLinkedInvoice::class,
              'linked_credit_notes' => Models\TransactionLinkedCreditNote::class,
              'linked_refunds' => Models\TransactionLinkedRefund::class,
              'linked_payments' => Models\TransactionLinkedPayment::class,
            ]
        );

        return $transaction;
    }

    public function hostedPage()
    {
        $hosted_page = $this->_get('hosted_page', Models\HostedPage::class);

        return $hosted_page;
    }

    public function estimate()
    {
        $estimate = $this->_get(
            'estimate',
            Models\Estimate::class,
            [],
            [
              'subscription_estimate' => Models\SubscriptionEstimate::class,
              'invoice_estimate' => Models\InvoiceEstimate::class,
              'invoice_estimates' => Models\InvoiceEstimate::class,
              'next_invoice_estimate' => Models\InvoiceEstimate::class,
              'credit_note_estimates' => Models\CreditNoteEstimate::class,
              'unbilled_charge_estimates' => Models\UnbilledCharge::class,
            ]
        );

        $estimate->_initDependant(
            $this->_response['estimate'],
            'subscription_estimate',
            [
              'shipping_address' => Models\SubscriptionEstimateShippingAddress::class,
            ]
        );

        $estimate->_initDependant(
            $this->_response['estimate'],
            'invoice_estimate',
            [
              'line_items' => Models\InvoiceEstimateLineItem::class,
              'discounts' => Models\InvoiceEstimateDiscount::class,
              'taxes' => Models\InvoiceEstimateTax::class,
              'line_item_taxes' => Models\InvoiceEstimateLineItemTax::class,
              'line_item_tiers' => Models\InvoiceEstimateLineItemTier::class,
              'line_item_discounts' => Models\InvoiceEstimateLineItemDiscount::class,
            ]
        );

        $estimate->_initDependant(
            $this->_response['estimate'],
            'next_invoice_estimate',
            [
              'line_items' => Models\InvoiceEstimateLineItem::class,
              'discounts' => Models\InvoiceEstimateDiscount::class,
              'taxes' => Models\InvoiceEstimateTax::class,
              'line_item_taxes' => Models\InvoiceEstimateLineItemTax::class,
              'line_item_tiers' => Models\InvoiceEstimateLineItemTier::class,
              'line_item_discounts' => Models\InvoiceEstimateLineItemDiscount::class,
            ]
        );

        $estimate->_initDependantList(
            $this->_response['estimate'],
            'invoice_estimates',
            [
              'line_items' => Models\InvoiceEstimateLineItem::class,
              'discounts' => Models\InvoiceEstimateDiscount::class,
              'taxes' => Models\InvoiceEstimateTax::class,
              'line_item_taxes' => Models\InvoiceEstimateLineItemTax::class,
              'line_item_tiers' => Models\InvoiceEstimateLineItemTier::class,
              'line_item_discounts' => Models\InvoiceEstimateLineItemDiscount::class,
            ]
        );

        $estimate->_initDependantList(
            $this->_response['estimate'],
            'credit_note_estimates',
            [
              'line_items' => Models\CreditNoteEstimateLineItem::class,
              'discounts' => Models\CreditNoteEstimateDiscount::class,
              'taxes' => Models\CreditNoteEstimateTax::class,
              'line_item_taxes' => Models\CreditNoteEstimateLineItemTax::class,
              'line_item_discounts' => Models\CreditNoteEstimateLineItemDiscount::class,
              'line_item_tiers' => Models\CreditNoteEstimateLineItemTier::class,
            ]
        );

        $estimate->_initDependantList(
            $this->_response['estimate'],
            'unbilled_charge_estimates',
            [
              'tiers' => Models\UnbilledChargeTier::class,
            ]
        );

        return $estimate;
    }

    public function quote()
    {
        $quote = $this->_get(
            'quote',
            Models\Quote::class,
            [
              'line_items' => Models\QuoteLineItem::class,
              'discounts' => Models\QuoteDiscount::class,
              'line_item_discounts' => Models\QuoteLineItemDiscount::class,
              'taxes' => Models\QuoteTax::class,
              'line_item_taxes' => Models\QuoteLineItemTax::class,
              'shipping_address' => Models\QuoteShippingAddress::class,
              'billing_address' => Models\QuoteBillingAddress::class,
            ]
        );

        return $quote;
    }

    public function plan()
    {
        $plan = $this->_get(
            'plan',
            Models\Plan::class,
            [
              'tiers' => Models\PlanTier::class,
              'applicable_addons' =>  Models\PlanApplicableAddon::class,
              'attached_addons' =>  Models\PlanAttachedAddon::class,
              'event_based_addons' =>  Models\PlanEventBasedAddon::class,
            ]
        );

        return $plan;
    }

    public function addon()
    {
        $addon = $this->_get(
            'addon',
            Models\Addon::class,
            [
              'tiers' => Models\AddonTier::class,
            ]
        );

        return $addon;
    }

    public function coupon()
    {
        $coupon = $this->_get('coupon', Models\Coupon::class);

        return $coupon;
    }

    public function couponSet()
    {
        $coupon_set = $this->_get('coupon_set', Models\CouponSet::class);

        return $coupon_set;
    }

    public function couponCode()
    {
        $coupon_code = $this->_get('coupon_code', Models\CouponCode::class);

        return $coupon_code;
    }

    public function address()
    {
        $address = $this->_get('address', Models\Address::class);

        return $address;
    }

    public function event()
    {
        $event = $this->_get(
            'event',
            Models\Event::class,
            [
              'webhooks' => Models\EventWebhook::class,
            ]
        );

        return $event;
    }

    public function comment()
    {
        $comment = $this->_get('comment', Models\Comment::class);

        return $comment;
    }

    public function download()
    {
        $download = $this->_get('download', Models\Download::class);

        return $download;
    }

    public function portalSession()
    {
        $portal_session = $this->_get(
            'portal_session',
            Models\PortalSession::class,
            [
              'linked_customers' => Models\PortalSessionLinkedCustomer::class
            ]
        );

        return $portal_session;
    }

    public function siteMigrationDetail()
    {
        $site_migration_detail = $this->_get('site_migration_detail', Models\SiteMigrationDetail::class);

        return $site_migration_detail;
    }

    public function resourceMigration()
    {
        $resource_migration = $this->_get('resource_migration', Models\ResourceMigration::class);

        return $resource_migration;
    }

    public function timeMachine()
    {
        $time_machine = $this->_get('time_machine', Models\TimeMachine::class);

        return $time_machine;
    }

    public function export()
    {
        $export = $this->_get(
            'export',
            Models\Export::class,
            [
              'download' => Models\ExportDownload::class,
            ]
        );

        return $export;
    }


    public function unbilledCharges()
    {
        $unbilled_charges = $this->_getList(
            'unbilled_charges',
            Models\UnbilledCharge::class,
            [
              'tiers' => Models\UnbilledChargeTier::class,
            ]
        );

        return $unbilled_charges;
    }

    public function creditNotes()
    {
        $credit_notes = $this->_getList(
            'credit_notes',
            Models\CreditNote::class,
            [
              'line_items' => Models\CreditNoteLineItem::class,
              'discounts' => Models\CreditNoteDiscount::class,
              'line_item_discounts' => Models\CreditNoteLineItemDiscount::class,
              'line_item_tiers' => Models\CreditNoteLineItemTier::class,
              'taxes' => Models\CreditNoteTax::class,
              'line_item_taxes' => Models\CreditNoteLineItemTax::class,
              'linked_refunds' => Models\CreditNoteLinkedRefund::class,
              'allocations' => Models\CreditNoteAllocation::class,
            ]
        );

        return $credit_notes;
    }

    public function invoices()
    {
        $invoices = $this->_getList(
            'invoices',
            Models\Invoice::class,
            [
              'line_items' => Models\InvoiceLineItem::class,
              'discounts' => Models\InvoiceDiscount::class,
              'line_item_discounts' => Models\InvoiceLineItemDiscount::class,
              'taxes' => Models\InvoiceTax::class,
              'line_item_taxes' => Models\InvoiceLineItemTax::class,
              'line_item_tiers' => Models\InvoiceLineItemTier::class,
              'linked_payments' => Models\InvoiceLinkedPayment::class,
              'applied_credits' => Models\InvoiceAppliedCredit::class,
              'adjustment_credit_notes' => Models\InvoiceAdjustmentCreditNote::class,
              'issued_credit_notes' => Models\InvoiceIssuedCreditNote::class,
              'linked_orders' => Models\InvoiceLinkedOrder::class,
              'notes' => Models\InvoiceNote::class,
              'shipping_address' => Models\InvoiceShippingAddress::class,
              'billing_address' => Models\InvoiceBillingAddress::class,
            ]
        );

        return $invoices;
    }

    public function toJson()
    {
        return json_encode($this->_response);
    }

    private function _getList($type, $class, $subTypes = [], $dependantTypes = [], $dependantSubTypes = [])
    {
        if (!array_key_exists($type, $this->_response)) {
            return null;
        }

        if (!array_key_exists($type, $this->_responseObj)) {
            $setVal = [];

            foreach ($this->_response[$type] as $stV) {
                $obj = new $class($stV, $subTypes, $dependantTypes);

                foreach ($dependantSubTypes as $k => $v) {
                    $obj->_initDependant($stV, $k, $v);
                }

                array_push($setVal, $obj);
            }

            $this->_responseObj[$type] = $setVal;
        }

        return $this->_responseObj[$type];
    }

    private function _get($type, $class, $subTypes = [], $dependantTypes = [])
    {
        if (!array_key_exists($type, $this->_response)) {
            return null;
        }

        if (!array_key_exists($type, $this->_responseObj)) {
            $this->_responseObj[$type] = new $class($this->_response[$type], $subTypes, $dependantTypes);
        }

        return $this->_responseObj[$type];
    }
}
