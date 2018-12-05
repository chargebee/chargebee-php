<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;
use ChargeBee\ChargeBee\Request;
use ChargeBee\ChargeBee\Util;

class Invoice extends Model
{
    protected $allowed = [
      'id',
      'poNumber',
      'customerId',
      'subscriptionId',
      'recurring',
      'status',
      'vatNumber',
      'priceType',
      'date',
      'dueDate',
      'netTermDays',
      'currencyCode',
      'total',
      'amountPaid',
      'amountAdjusted',
      'writeOffAmount',
      'creditsApplied',
      'amountDue',
      'paidAt',
      'dunningStatus',
      'nextRetryAt',
      'voidedAt',
      'resourceVersion',
      'updatedAt',
      'subTotal',
      'tax',
      'firstInvoice',
      'hasAdvanceCharges',
      'termFinalized',
      'isGifted',
      'expectedPaymentDate',
      'amountToCollect',
      'roundOffAmount',
      'lineItems',
      'discounts',
      'lineItemDiscounts',
      'taxes',
      'lineItemTaxes',
      'lineItemTiers',
      'linkedPayments',
      'appliedCredits',
      'adjustmentCreditNotes',
      'issuedCreditNotes',
      'linkedOrders',
      'notes',
      'shippingAddress',
      'billingAddress',
      'deleted',
    ];

    # OPERATIONS
    #-----------

    public static function create($params, $env = null, $headers = [])
    {
        return Request::send(Request::POST, Util::encodeURIPath("invoices"), $params, $env, $headers);
    }

    public static function charge($params, $env = null, $headers = [])
    {
        return Request::send(Request::POST, Util::encodeURIPath("invoices", "charge"), $params, $env, $headers);
    }

    public static function chargeAddon($params, $env = null, $headers = [])
    {
        return Request::send(Request::POST, Util::encodeURIPath("invoices", "charge_addon"), $params, $env, $headers);
    }

    public static function stopDunning($id, $env = null, $headers = [])
    {
        return Request::send(Request::POST, Util::encodeURIPath("invoices", $id, "stop_dunning"), [], $env, $headers);
    }

    public static function importInvoice($params, $env = null, $headers = [])
    {
        return Request::send(Request::POST, Util::encodeURIPath("invoices", "import_invoice"), $params, $env, $headers);
    }

    public static function applyPayments($id, $params = [], $env = null, $headers = [])
    {
        return Request::send(Request::POST, Util::encodeURIPath("invoices", $id, "apply_payments"), $params, $env, $headers);
    }

    public static function applyCredits($id, $params = [], $env = null, $headers = [])
    {
        return Request::send(Request::POST, Util::encodeURIPath("invoices", $id, "apply_credits"), $params, $env, $headers);
    }

    public static function all($params = [], $env = null, $headers = [])
    {
        return Request::sendListRequest(Request::GET, Util::encodeURIPath("invoices"), $params, $env, $headers);
    }

    public static function invoicesForCustomer($id, $params = [], $env = null, $headers = [])
    {
        return Request::send(Request::GET, Util::encodeURIPath("customers", $id, "invoices"), $params, $env, $headers);
    }

    public static function invoicesForSubscription($id, $params = [], $env = null, $headers = [])
    {
        return Request::send(Request::GET, Util::encodeURIPath("subscriptions", $id, "invoices"), $params, $env, $headers);
    }

    public static function retrieve($id, $env = null, $headers = [])
    {
        return Request::send(Request::GET, Util::encodeURIPath("invoices", $id), [], $env, $headers);
    }

    public static function pdf($id, $params = [], $env = null, $headers = [])
    {
        return Request::send(Request::POST, Util::encodeURIPath("invoices", $id, "pdf"), $params, $env, $headers);
    }

    public static function addCharge($id, $params, $env = null, $headers = [])
    {
        return Request::send(Request::POST, Util::encodeURIPath("invoices", $id, "add_charge"), $params, $env, $headers);
    }

    public static function addAddonCharge($id, $params, $env = null, $headers = [])
    {
        return Request::send(Request::POST, Util::encodeURIPath("invoices", $id, "add_addon_charge"), $params, $env, $headers);
    }

    public static function close($id, $env = null, $headers = [])
    {
        return Request::send(Request::POST, Util::encodeURIPath("invoices", $id, "close"), [], $env, $headers);
    }

    public static function collectPayment($id, $params = [], $env = null, $headers = [])
    {
        return Request::send(Request::POST, Util::encodeURIPath("invoices", $id, "collect_payment"), $params, $env, $headers);
    }

    public static function recordPayment($id, $params, $env = null, $headers = [])
    {
        return Request::send(Request::POST, Util::encodeURIPath("invoices", $id, "record_payment"), $params, $env, $headers);
    }

    public static function refund($id, $params = [], $env = null, $headers = [])
    {
        return Request::send(Request::POST, Util::encodeURIPath("invoices", $id, "refund"), $params, $env, $headers);
    }

    public static function recordRefund($id, $params, $env = null, $headers = [])
    {
        return Request::send(Request::POST, Util::encodeURIPath("invoices", $id, "record_refund"), $params, $env, $headers);
    }

    public static function removePayment($id, $params, $env = null, $headers = [])
    {
        return Request::send(Request::POST, Util::encodeURIPath("invoices", $id, "remove_payment"), $params, $env, $headers);
    }

    public static function removeCreditNote($id, $params, $env = null, $headers = [])
    {
        return Request::send(Request::POST, Util::encodeURIPath("invoices", $id, "remove_credit_note"), $params, $env, $headers);
    }

    public static function voidInvoice($id, $params = [], $env = null, $headers = [])
    {
        return Request::send(Request::POST, Util::encodeURIPath("invoices", $id, "void"), $params, $env, $headers);
    }

    public static function writeOff($id, $params = [], $env = null, $headers = [])
    {
        return Request::send(Request::POST, Util::encodeURIPath("invoices", $id, "write_off"), $params, $env, $headers);
    }

    public static function delete($id, $params = [], $env = null, $headers = [])
    {
        return Request::send(Request::POST, Util::encodeURIPath("invoices", $id, "delete"), $params, $env, $headers);
    }

    public static function updateDetails($id, $params = [], $env = null, $headers = [])
    {
        return Request::send(Request::POST, Util::encodeURIPath("invoices", $id, "update_details"), $params, $env, $headers);
    }
}
