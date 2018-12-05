<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;
use ChargeBee\ChargeBee\Request;
use ChargeBee\ChargeBee\Util;

class Transaction extends Model
{
    protected $allowed = [
      'id',
      'customerId',
      'subscriptionId',
      'gatewayAccountId',
      'paymentSourceId',
      'paymentMethod',
      'referenceNumber',
      'gateway',
      'type',
      'date',
      'settledAt',
      'currencyCode',
      'amount',
      'idAtGateway',
      'status',
      'fraudFlag',
      'authorizationReason',
      'errorCode',
      'errorText',
      'voidedAt',
      'resourceVersion',
      'updatedAt',
      'fraudReason',
      'amountUnused',
      'maskedCardNumber',
      'referenceTransactionId',
      'refundedTxnId',
      'referenceAuthorizationId',
      'amountCapturable',
      'reversalTransactionId',
      'linkedInvoices',
      'linkedCreditNotes',
      'linkedRefunds',
      'linkedPayments',
      'deleted',
    ];

    # OPERATIONS
    #-----------

    public static function createAuthorization($params, $env = null, $headers = [])
    {
        return Request::send(Request::POST, Util::encodeURIPath("transactions", "create_authorization"), $params, $env, $headers);
    }

    public static function voidTransaction($id, $env = null, $headers = [])
    {
        return Request::send(Request::POST, Util::encodeURIPath("transactions", $id, "void"), [], $env, $headers);
    }

    public static function all($params = [], $env = null, $headers = [])
    {
        return Request::sendListRequest(Request::GET, Util::encodeURIPath("transactions"), $params, $env, $headers);
    }

    public static function transactionsForCustomer($id, $params = [], $env = null, $headers = [])
    {
        return Request::send(Request::GET, Util::encodeURIPath("customers", $id, "transactions"), $params, $env, $headers);
    }

    public static function transactionsForSubscription($id, $params = [], $env = null, $headers = [])
    {
        return Request::send(Request::GET, Util::encodeURIPath("subscriptions", $id, "transactions"), $params, $env, $headers);
    }

    public static function paymentsForInvoice($id, $params = [], $env = null, $headers = [])
    {
        return Request::send(Request::GET, Util::encodeURIPath("invoices", $id, "payments"), $params, $env, $headers);
    }

    public static function retrieve($id, $env = null, $headers = [])
    {
        return Request::send(Request::GET, Util::encodeURIPath("transactions", $id), [], $env, $headers);
    }
}
