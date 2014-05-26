<?php

class ChargeBee_Estimate extends ChargeBee_Model
{

  protected $allowed = array('createdAt', 'recurring', 'subscriptionId', 'subscriptionStatus', 'termEndsAt',
'collectNow', 'amount', 'subTotal', 'lineItems', 'discounts', 'taxes');



  # OPERATIONS
  #-----------

  public static function createSubscription($params, $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, ChargeBee_Util::encodeURIPath("estimates","create_subscription"), $params, $env);
  }

  public static function updateSubscription($params, $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, ChargeBee_Util::encodeURIPath("estimates","update_subscription"), $params, $env);
  }

 }

?>