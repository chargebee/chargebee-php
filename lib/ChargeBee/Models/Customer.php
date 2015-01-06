<?php

class ChargeBee_Customer extends ChargeBee_Model
{

  protected $allowed = array('id', 'firstName', 'lastName', 'email', 'phone', 'company', 'vatNumber', 'autoCollection',
'createdAt', 'createdFromIp', 'cardStatus', 'billingAddress', 'paymentMethod');



  # OPERATIONS
  #-----------

  public static function create($params = array(), $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, ChargeBee_Util::encodeURIPath("customers"), $params, $env);
  }

  public static function all($params = array(), $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::GET, ChargeBee_Util::encodeURIPath("customers"), $params, $env);
  }

  public static function retrieve($id, $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::GET, ChargeBee_Util::encodeURIPath("customers",$id), array(), $env);
  }

  public static function update($id, $params = array(), $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, ChargeBee_Util::encodeURIPath("customers",$id), $params, $env);
  }

  public static function updateBillingInfo($id, $params = array(), $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, ChargeBee_Util::encodeURIPath("customers",$id,"update_billing_info"), $params, $env);
  }

 }

?>