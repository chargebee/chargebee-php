<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Request;
use ChargeBee\ChargeBee\Util;

class Transaction extends Model
{

  protected $allowed = array('id', 'customerId', 'subscriptionId', 'paymentMethod', 'referenceNumber', 'gateway',
'description', 'type', 'date', 'amount', 'idAtGateway', 'status', 'errorCode', 'errorText','voidedAt', 'voidDescription', 'amountUnused', 'maskedCardNumber', 'referenceTransactionId','refundedTxnId', 'reversalTransactionId', 'linkedInvoices', 'linkedRefunds', 'currencyCode');



  # OPERATIONS
  #-----------

  public static function all($params = array(), $env = null, $headers = array())
  {
    return Request::send(Request::GET, Util::encodeURIPath("transactions"), $params, $env, $headers);
  }

  public static function transactionsForCustomer($id, $params = array(), $env = null, $headers = array())
  {
    return Request::send(Request::GET, Util::encodeURIPath("customers",$id,"transactions"), $params, $env, $headers);
  }

  public static function transactionsForSubscription($id, $params = array(), $env = null, $headers = array())
  {
    return Request::send(Request::GET, Util::encodeURIPath("subscriptions",$id,"transactions"), $params, $env, $headers);
  }

  public static function transactionsForInvoice($id, $params = array(), $env = null, $headers = array())
  {
    return Request::send(Request::GET, Util::encodeURIPath("invoices",$id,"transactions"), $params, $env, $headers);
  }

  public static function retrieve($id, $env = null, $headers = array())
  {
    return Request::send(Request::GET, Util::encodeURIPath("transactions",$id), array(), $env, $headers);
  }

  public static function recordPayment($id, $params, $env = null, $headers = array())
  {
    return Request::send(Request::POST, Util::encodeURIPath("invoices",$id,"record_payment"), $params, $env, $headers);
  }

 }
