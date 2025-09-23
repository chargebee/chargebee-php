<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;
use ChargeBee\ChargeBee\Request;
use ChargeBee\ChargeBee\Util;

class OfferFulfillment extends Model
{

  protected $allowed = [
    'id',
    'personalizedOfferId',
    'optionId',
    'processingType',
    'status',
    'redirectUrl',
    'failedAt',
    'createdAt',
    'completedAt',
    'error',
  ];



  # OPERATIONS
  #-----------

  public static function offerFulfillments($params, $env = null, $headers = array())
  {
    $jsonKeys = array(
    );
    return Request::send(Request::POST, Util::encodeURIPath("offer_fulfillments"), $params, $env, $headers, "grow", true, $jsonKeys);
  }

  public static function offerFulfillmentsGet($id, $env = null, $headers = array())
  {
    $jsonKeys = array(
    );
    return Request::send(Request::GET, Util::encodeURIPath("offer_fulfillments",$id), array(), $env, $headers, "grow", true, $jsonKeys);
  }

  public static function offerFulfillmentsUpdate($id, $params, $env = null, $headers = array())
  {
    $jsonKeys = array(
    );
    return Request::send(Request::POST, Util::encodeURIPath("offer_fulfillments",$id), $params, $env, $headers, "grow", true, $jsonKeys);
  }

 }

?>