<?php

class ChargeBee_Plan extends ChargeBee_Model
{

  protected $allowed = array('id', 'name', 'invoiceName', 'price', 'period', 'periodUnit', 'trialPeriod', 'trialPeriodUnit',
'freeQuantity', 'setupCost', 'downgradePenalty', 'status', 'archivedAt', 'billingCycles', 'redirectUrl');



  # OPERATIONS
  #-----------

  public static function create($params, $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, ChargeBee_Util::encodeURIPath("plans"), $params, $env);
  }

  public static function update($id, $params = array(), $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, ChargeBee_Util::encodeURIPath("plans",$id), $params, $env);
  }

  public static function all($params = array(), $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::GET, ChargeBee_Util::encodeURIPath("plans"), $params, $env);
  }

  public static function retrieve($id, $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::GET, ChargeBee_Util::encodeURIPath("plans",$id), array(), $env);
  }

  public static function delete($id, $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, ChargeBee_Util::encodeURIPath("plans",$id,"delete"), array(), $env);
  }

 }

?>