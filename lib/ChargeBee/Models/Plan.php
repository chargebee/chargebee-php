<?php

class ChargeBee_Plan extends ChargeBee_Model
{

  protected $allowed = array('id', 'name', 'invoiceName', 'price', 'periodUnit', 'trialPeriod', 'trialPeriodUnit',
'setupCost', 'status', 'archivedAt');



  # OPERATIONS
  #-----------

  public static function all($params = array(), $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::GET, "/plans", $params, $env);
  }

  public static function retrieve($id, $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::GET, "/plans/$id", array(), $env);
  }

 }

?>