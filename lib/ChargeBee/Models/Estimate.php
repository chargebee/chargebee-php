<?php

namespace Chargebee\Chargebee\Models;

use Chargebee\Chargebee\Request;
use Chargebee\Chargebee\Util;

class Estimate extends Model
{

  protected $allowed = array('createdAt', 'recurring', 'subscriptionId', 'subscriptionStatus', 'termEndsAt',
'collectNow', 'priceType', 'amount', 'creditsApplied', 'amountDue', 'subTotal', 'lineItems','discounts', 'taxes');



  # OPERATIONS
  #-----------

  public static function createSubscription($params, $env = null, $headers = array())
  {
    return Request::send(Request::POST, Util::encodeURIPath("estimates","create_subscription"), $params, $env, $headers);
  }

  public static function updateSubscription($params, $env = null, $headers = array())
  {
    return Request::send(Request::POST, Util::encodeURIPath("estimates","update_subscription"), $params, $env, $headers);
  }

  public static function renewalEstimate($id, $params = array(), $env = null, $headers = array())
  {
    return Request::send(Request::GET, Util::encodeURIPath("subscriptions",$id,"renewal_estimate"), $params, $env, $headers);
  }

 }
