<?php

class ChargeBee_Customer extends ChargeBee_Model
{

  protected $allowed = array('id', 'firstName', 'lastName', 'email', 'company', 'createdAt', 'cardStatus'
);



  # OPERATIONS
  #-----------

  public static function all($params = array(), $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::GET, "/customers", $params, $env);
  }

  public static function retrieve($id, $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::GET, "/customers/$id", array(), $env);
  }

  public static function update($id, $params = array(), $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, "/customers/$id", $params, $env);
  }

 }

?>