<?php

class ChargeBee_OfflineCheckout extends ChargeBee_Model
{

  protected $allowed = array('id', 'type', 'amount', 'status', 'createdAt', 'updatedAt'
);



  # OPERATIONS
  #-----------

  public static function retrieve($id, $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::GET, "/offline_checkouts/$id", array(), $env);
  }

  public static function preRegister($params, $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, "/offline_checkouts/pre_register", $params, $env);
  }

  public static function postRegister($id, $params, $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, "/offline_checkouts/$id/post_register", $params, $env);
  }

 }

?>