<?php

class ChargeBee_Address extends ChargeBee_Model
{

  protected $allowed = array('label', 'firstName', 'lastName', 'email', 'company', 'phone', 'addr', 'extendedAddr',
'extendedAddr2', 'city', 'state', 'country', 'zip', 'subscriptionId');



  # OPERATIONS
  #-----------

  public static function retrieve($params, $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::GET, "/addresses", $params, $env);
  }

  public static function update($params, $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, "/addresses", $params, $env);
  }

 }

?>