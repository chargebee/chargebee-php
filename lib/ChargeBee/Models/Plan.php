<?php

class ChargeBee_Plan extends ChargeBee_Model
{

  protected $allowed = array('id', 'name', 'invoiceName', 'price', 'period', 'periodUnit', 'trialPeriod', 'trialPeriodUnit',
'freeQuantity', 'setupCost', 'downgradePenalty', 'status', 'archivedAt', 'billingCycles', 'redirectUrl');



  # OPERATIONS
  #-----------

  public static function create($params, $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, "/plans", $params, $env);
  }

  public static function update($id, $params = array(), $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, "/plans/$id", $params, $env);
  }

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