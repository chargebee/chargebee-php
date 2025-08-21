<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;
use ChargeBee\ChargeBee\Request;
use ChargeBee\ChargeBee\Util;

class OmnichannelOneTimeOrder extends Model
{

  protected $allowed = [
    'id',
    'appId',
    'customerId',
    'idAtSource',
    'origin',
    'source',
    'createdAt',
    'resourceVersion',
    'omnichannelOneTimeOrderItems',
    'purchaseTransaction',
  ];



  # OPERATIONS
  #-----------

  public static function retrieve($id, $env = null, $headers = array())
  {
    $jsonKeys = array(
    );
    return Request::send(Request::GET, Util::encodeURIPath("omnichannel_one_time_orders",$id), array(), $env, $headers, null, false, $jsonKeys);
  }

  public static function all($params = array(), $env = null, $headers = array())
  {
    $jsonKeys = array(
    );
    return Request::sendListRequest(Request::GET, Util::encodeURIPath("omnichannel_one_time_orders"), $params, $env, $headers, null, false, $jsonKeys);
  }

 }

?>