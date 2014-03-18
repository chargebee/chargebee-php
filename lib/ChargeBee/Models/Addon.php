<?php

class ChargeBee_Addon extends ChargeBee_Model
{

  protected $allowed = array('id', 'name', 'invoiceName', 'type', 'chargeType', 'price', 'period', 'periodUnit',
'unit', 'status', 'archivedAt');



  # OPERATIONS
  #-----------

  public static function create($params, $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, "/addons", $params, $env);
  }

  public static function update($id, $params = array(), $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, "/addons/$id", $params, $env);
  }

  public static function all($params = array(), $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::GET, "/addons", $params, $env);
  }

  public static function retrieve($id, $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::GET, "/addons/$id", array(), $env);
  }

  public static function delete($id, $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, "/addons/$id/delete", array(), $env);
  }

 }

?>