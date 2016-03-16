<?php

namespace Chargebee\Chargebee;

class Result
{
    private $_response;
    private $_responseObj;

    function __construct($_response)
    {
            $this->_response = $_response;
            $this->_responseObj = array();
    }

    /**
     * @return Models\Subscription
     */
    function subscription() 
    {
        return $this->_get(
            'subscription', Models\Subscription::class,
            array(
                'addons' => Models\SubscriptionAddon::class,
                'coupons' => Models\SubscriptionCoupon::class,
                'shipping_address' => Models\SubscriptionShippingAddress::class
            )
        );
    }

    function customer() 
    {
        return $this->_get(
            'customer', Models\Customer::class,
            array(
                'billing_address' => Models\CustomerBillingAddress::class,
                'contacts' => Models\CustomerContact::class,
                'payment_method' => Models\CustomerPaymentMethod::class
            )
        );
    }

    function card() 
    {
        return $this->_get('card', Models\Card::class);
    }

    function invoice() 
    {
        return $this->_get(
            'invoice', Models\Invoice::class,
            array(
                'line_items' => Models\InvoiceLineItem::class,
                'discounts' => Models\InvoiceDiscount::class,
                'taxes' => Models\InvoiceTax::class,
                'invoice_transactions' => Models\InvoiceLinkedTransaction::class,
                'orders' => Models\InvoiceLinkedOrder::class,
                'invoice_notes' => Models\InvoiceNote::class,
                'shipping_address' => Models\InvoiceShippingAddress::class,
                'billing_address' => Models\InvoiceBillingAddress::class
            )
        );
    }

    function order() 
    {
        return $this->_get('order', Models\Order::class);
    }

    function transaction() 
    {
        return $this->_get(
            'transaction', Models\Transaction::class,
            array(
                'invoice_transactions' => Models\TransactionLinkedInvoice::class,
                'txn_refunds_and_reversals' => Models\TransactionLinkedRefund::class
            )
        );
    }

    function hostedPage() 
    {
        return $this->_get('hosted_page', Models\HostedPage::class);
    }

    function estimate() 
    {
        return $this->_get(
            'estimate', Models\Estimate::class,
            array(
                'line_items' => Models\EstimateLineItem::class,
                'discounts' => Models\EstimateDiscount::class,
                'taxes' => Models\EstimateTax::class
            )
        );
    }

    function plan() 
    {
        return $this->_get('plan', Models\Plan::class);
    }

    function addon() 
    {
        return $this->_get('addon', Models\Addon::class);
    }

    function coupon() 
    {
        return $this->_get('coupon', Models\Coupon::class);
    }

    function couponCode() 
    {
        return $this->_get('coupon_code', Models\CouponCode::class);
    }

    function address() 
    {
        return $this->_get('address', Models\Address::class);
    }

    function event() 
    {
        return $this->_get('event', Models\Event::class,
            array('webhooks' => Models\EventWebhook::class)
        );
    }

    function comment() 
    {
        return $this->_get('comment', Models\Comment::class);
    }

    function download() 
    {
        return $this->_get('download', Models\Download::class);
    }

    function portalSession() 
    {
        return $this->_get('portal_session', Models\PortalSession::class,
        array('linked_customers' => Models\PortalSessionLinkedCustomer::class));
    }


    private function _get($type, $class, $subTypes = array())
    {
        if(!array_key_exists($type, $this->_response))
        {
                return null;
        }
        if(!array_key_exists($type, $this->_responseObj))
        {
                $this->_responseObj[$type] = new $class($this->_response[$type], $subTypes);
        }
        return $this->_responseObj[$type];
    }

}
