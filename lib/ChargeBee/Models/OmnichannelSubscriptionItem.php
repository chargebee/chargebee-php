<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;
use ChargeBee\ChargeBee\Request;
use ChargeBee\ChargeBee\Util;

class OmnichannelSubscriptionItem extends Model
{

  protected $allowed = [
    'id',
    'itemIdAtSource',
    'itemParentIdAtSource',
    'status',
    'autoRenewStatus',
    'currentTermStart',
    'currentTermEnd',
    'expiredAt',
    'expirationReason',
    'cancelledAt',
    'cancellationReason',
    'gracePeriodExpiresAt',
    'resumesAt',
    'hasScheduledChanges',
    'resourceVersion',
    'upcomingRenewal',
    'linkedItem',
  ];



  # OPERATIONS
  #-----------

  public static function listOmniSubItemScheduleChanges($id, $params = array(), $env = null, $headers = array())
  {
    $jsonKeys = array(
    );
    return Request::send(Request::GET, Util::encodeURIPath("omnichannel_subscription_items",$id,"scheduled_changes"), $params, $env, $headers, null, false, $jsonKeys);
  }

 }

?>