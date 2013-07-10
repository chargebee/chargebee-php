<?php

class ChargeBee_Subscription extends ChargeBee_Model
{

  protected $allowed = array('id', 'planId', 'planQuantity', 'status', 'trialStart', 'trialEnd', 'currentTermStart',
'currentTermEnd', 'remainingBillingCycles', 'createdAt', 'activatedAt', 'cancelledAt', 'cancelReason','dueInvoicesCount', 'dueSince', 'totalDues', 'addons', 'coupon', 'coupons');



  # OPERATIONS
  #-----------

  public static function create($params, $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, "/subscriptions", $params, $env);
  }

  public static function createForCustomer($id, $params, $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, "/customers/$id/subscriptions", $params, $env);
  }

  public static function all($params = array(), $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::GET, "/subscriptions", $params, $env);
  }

  public static function retrieve($id, $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::GET, "/subscriptions/$id", array(), $env);
  }

  public static function update($id, $params = array(), $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, "/subscriptions/$id", $params, $env);
  }

  public static function changeTermEnd($id, $params, $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, "/subscriptions/$id/change_term_end", $params, $env);
  }

  public static function cancel($id, $params = array(), $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, "/subscriptions/$id/cancel", $params, $env);
  }

  public static function reactivate($id, $params = array(), $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, "/subscriptions/$id/reactivate", $params, $env);
  }

 }

?>