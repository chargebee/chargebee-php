<?php
namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Request;
use ChargeBee\ChargeBee\Util;

class Coupon extends Model
{

  protected $allowed = array('id', 'name', 'invoiceName', 'discountType', 'discountPercentage', 'discountAmount',
'discountQuantity', 'durationType', 'durationMonth', 'validTill', 'maxRedemptions', 'status','applyDiscountOn', 'applyOn', 'planConstraint', 'addonConstraint', 'createdAt', 'archivedAt','planIds', 'addonIds', 'redemptions', 'invoiceNotes');



  # OPERATIONS
  #-----------

  public static function create($params, $env = null, $headers = array())
  {
    return Request::send(Request::POST, Util::encodeURIPath("coupons"), $params, $env, $headers);
  }

  public static function all($params = array(), $env = null, $headers = array())
  {
    return Request::send(Request::GET, Util::encodeURIPath("coupons"), $params, $env, $headers);
  }

  public static function retrieve($id, $env = null, $headers = array())
  {
    return Request::send(Request::GET, Util::encodeURIPath("coupons",$id), array(), $env, $headers);
  }

 }
