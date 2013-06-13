<?php

class ChargeBee_Coupon extends ChargeBee_Model
{

  protected $allowed = array('id', 'name', 'invoiceName', 'discountType', 'discountPercentage', 'discountAmount',
'discountQuantity', 'durationType', 'durationMonth', 'maxRedemptions', 'status', 'redemptions','applyDiscountOn', 'applyOn', 'createdAt', 'archivedAt', 'validTill');



  # OPERATIONS
  #-----------

  public static function all($params = array(), $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::GET, "/coupons", $params, $env);
  }

  public static function retrieve($id, $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::GET, "/coupons/$id", array(), $env);
  }

 }

?>