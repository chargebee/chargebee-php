<?php

class ChargeBee_Transaction extends ChargeBee_Model
{

  protected $allowed = array('id', 'subscriptionId', 'gateway', 'description', 'invoiceId', 'type', 'date',
'amount', 'idAtGateway', 'maskedCardNumber', 'errorCode', 'errorText', 'refundedTxId', 'refundAmount','voidedAt', 'status');



  # OPERATIONS
  #-----------

  public static function all($params = array(), $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::GET, "/transactions", $params, $env);
  }

  public static function retrieve($id, $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::GET, "/transactions/$id", array(), $env);
  }

  public static function transactionsForSubscription($id, $params = array(), $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::GET, "/subscriptions/$id/transactions", $params, $env);
  }

 }

?>