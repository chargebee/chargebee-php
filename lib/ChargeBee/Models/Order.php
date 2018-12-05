<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;
use ChargeBee\ChargeBee\Request;
use ChargeBee\ChargeBee\Util;

class Order extends Model
{
    protected $allowed = [
      'id',
      'documentNumber',
      'invoiceId',
      'subscriptionId',
      'customerId',
      'status',
      'cancellationReason',
      'paymentStatus',
      'orderType',
      'priceType',
      'referenceId',
      'fulfillmentStatus',
      'orderDate',
      'shippingDate',
      'note',
      'trackingId',
      'batchId',
      'createdBy',
      'shipmentCarrier',
      'invoiceRoundOffAmount',
      'tax',
      'amountPaid',
      'amountAdjusted',
      'refundableCreditsIssued',
      'refundableCredits',
      'roundingAdjustement',
      'paidOn',
      'shippingCutOffDate',
      'createdAt',
      'statusUpdateAt',
      'deliveredAt',
      'shippedAt',
      'resourceVersion',
      'updatedAt',
      'cancelledAt',
      'orderLineItems',
      'shippingAddress',
      'billingAddress',
      'discount',
      'subTotal',
      'total',
      'lineItemTaxes',
      'lineItemDiscounts',
      'linkedCreditNotes',
      'deleted',
      'currencyCode',
      'isGifted',
      'giftNote',
      'giftId',
    ];

    # OPERATIONS
    #-----------

    public static function create($params, $env = null, $headers = [])
    {
        return Request::send(Request::POST, Util::encodeURIPath("orders"), $params, $env, $headers);
    }

    public static function update($id, $params = [], $env = null, $headers = [])
    {
        return Request::send(Request::POST, Util::encodeURIPath("orders", $id), $params, $env, $headers);
    }

    public static function assignOrderNumber($id, $env = null, $headers = [])
    {
        return Request::send(Request::POST, Util::encodeURIPath("orders", $id, "assign_order_number"), [], $env, $headers);
    }

    public static function cancel($id, $params, $env = null, $headers = [])
    {
        return Request::send(Request::POST, Util::encodeURIPath("orders", $id, "cancel"), $params, $env, $headers);
    }

    public static function createRefundableCreditNote($id, $params, $env = null, $headers = [])
    {
        return Request::send(Request::POST, Util::encodeURIPath("orders", $id, "create_refundable_credit_note"), $params, $env, $headers);
    }

    public static function reopen($id, $params = [], $env = null, $headers = [])
    {
        return Request::send(Request::POST, Util::encodeURIPath("orders", $id, "reopen"), $params, $env, $headers);
    }

    public static function retrieve($id, $env = null, $headers = [])
    {
        return Request::send(Request::GET, Util::encodeURIPath("orders", $id), [], $env, $headers);
    }

    public static function all($params = [], $env = null, $headers = [])
    {
        return Request::sendListRequest(Request::GET, Util::encodeURIPath("orders"), $params, $env, $headers);
    }

    public static function ordersForInvoice($id, $params = [], $env = null, $headers = [])
    {
        return Request::send(Request::GET, Util::encodeURIPath("invoices", $id, "orders"), $params, $env, $headers);
    }
}
