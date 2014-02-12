<?php

class ChargeBee_Transaction extends ChargeBee_Model
{

  protected $allowed = array('id', 'subscriptionId', 'paymentMethod', 'gateway', 'description', 'type', 'date',
'amount', 'idAtGateway', 'status', 'errorCode', 'errorText', 'voidedAt', 'voidDescription','maskedCardNumber', 'refundedTxnId');



  # OPERATIONS
  #-----------

  public static function all($params = array(), $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::GET, "/transactions", $params, $env);
  }

  public static function transactionsForSubscription($id, $params = array(), $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::GET, "/subscriptions/$id/transactions", $params, $env);
  }

  public static function transactionsForInvoice($id, $params = array(), $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::GET, "/invoices/$id/transactions", $params, $env);
  }

  public static function retrieve($id, $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::GET, "/transactions/$id", array(), $env);
  }

  public static function refund($id, $params = array(), $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, "/transactions/$id/refund", $params, $env);
  }

 }

?>