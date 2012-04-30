<?php

class ChargeBee_Card extends ChargeBee_Model
{

  protected $allowed = array('customerId', 'status', 'gateway', 'firstName', 'lastName', 'iin', 'last4', 'cardType',
'expiryMonth', 'expiryYear', 'maskedNumber');



  # OPERATIONS
  #-----------

  public static function retrieve($id, $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::GET, "/cards/$id", array(), $env);
  }

  public static function updateCardForCustomer($id, $params, $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, "/customers/$id/credit_card", $params, $env);
  }

 }

?>