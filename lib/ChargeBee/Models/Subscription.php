<?php

class ChargeBee_Subscription extends ChargeBee_Model
{

  protected $allowed = array('id', 'planId', 'planQuantity', 'status', 'startDate', 'trialStart', 'trialEnd',
'currentTermStart', 'currentTermEnd', 'remainingBillingCycles', 'createdAt', 'startedAt', 'activatedAt','cancelledAt', 'cancelReason', 'affiliateToken', 'createdFromIp', 'dueInvoicesCount', 'dueSince','totalDues', 'addons', 'coupon', 'coupons', 'shippingAddress', 'hasScheduledChanges');



  # OPERATIONS
  #-----------

  public static function create($params, $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, ChargeBee_Util::encodeURIPath("subscriptions"), $params, $env);
  }

  public static function createForCustomer($id, $params, $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, ChargeBee_Util::encodeURIPath("customers",$id,"subscriptions"), $params, $env);
  }

  public static function all($params = array(), $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::GET, ChargeBee_Util::encodeURIPath("subscriptions"), $params, $env);
  }

  public static function subscriptionsForCustomer($id, $params = array(), $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::GET, ChargeBee_Util::encodeURIPath("customers",$id,"subscriptions"), $params, $env);
  }

  public static function retrieve($id, $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::GET, ChargeBee_Util::encodeURIPath("subscriptions",$id), array(), $env);
  }

  public static function retrieveWithScheduledChanges($id, $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::GET, ChargeBee_Util::encodeURIPath("subscriptions",$id,"retrieve_with_scheduled_changes"), array(), $env);
  }

  public static function removeScheduledChanges($id, $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, ChargeBee_Util::encodeURIPath("subscriptions",$id,"remove_scheduled_changes"), array(), $env);
  }

  public static function removeScheduledCancellation($id, $params = array(), $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, ChargeBee_Util::encodeURIPath("subscriptions",$id,"remove_scheduled_cancellation"), $params, $env);
  }

  public static function update($id, $params = array(), $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, ChargeBee_Util::encodeURIPath("subscriptions",$id), $params, $env);
  }

  public static function changeTermEnd($id, $params, $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, ChargeBee_Util::encodeURIPath("subscriptions",$id,"change_term_end"), $params, $env);
  }

  public static function cancel($id, $params = array(), $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, ChargeBee_Util::encodeURIPath("subscriptions",$id,"cancel"), $params, $env);
  }

  public static function reactivate($id, $params = array(), $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, ChargeBee_Util::encodeURIPath("subscriptions",$id,"reactivate"), $params, $env);
  }

  public static function addChargeAtTermEnd($id, $params, $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, ChargeBee_Util::encodeURIPath("subscriptions",$id,"add_charge_at_term_end"), $params, $env);
  }

  public static function chargeAddonAtTermEnd($id, $params, $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, ChargeBee_Util::encodeURIPath("subscriptions",$id,"charge_addon_at_term_end"), $params, $env);
  }

 }

?>