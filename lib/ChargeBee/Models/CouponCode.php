<?php
namespace Chargebee\Chargebee\Models;

use Chargebee\Chargebee\Request;
use Chargebee\Chargebee\Util;

class CouponCode extends Model
{

  protected $allowed = array('code', 'couponId', 'couponSetName'
);



  # OPERATIONS
  #-----------

  public static function create($params, $env = null, $headers = array())
  {
    return Request::send(Request::POST, Util::encodeURIPath("coupon_codes"), $params, $env, $headers);
  }

  public static function retrieve($id, $env = null, $headers = array())
  {
    return Request::send(Request::GET, Util::encodeURIPath("coupon_codes",$id), array(), $env, $headers);
  }

 }
