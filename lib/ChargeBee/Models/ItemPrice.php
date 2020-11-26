<?php

class ChargeBee_ItemPrice extends ChargeBee_Model
{

  protected $allowed = array('id', 'name', 'itemFamilyId', 'itemId', 'description', 'status', 'externalName',
'pricingModel', 'price', 'period', 'currencyCode', 'periodUnit', 'trialPeriod', 'trialPeriodUnit','shippingPeriod', 'shippingPeriodUnit', 'billingCycles', 'freeQuantity', 'freeQuantityInDecimal','priceInDecimal', 'resourceVersion', 'updatedAt', 'createdAt', 'invoiceNotes', 'tiers', 'isTaxable','taxDetail', 'accountingDetail', 'metadata', 'itemType', 'archivable', 'parentItemId');



  # OPERATIONS
  #-----------

  public static function create($params, $env = null, $headers = array())
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, ChargeBee_Util::encodeURIPath("item_prices"), $params, $env, $headers);
  }

  public static function retrieve($id, $env = null, $headers = array())
  {
    return ChargeBee_Request::send(ChargeBee_Request::GET, ChargeBee_Util::encodeURIPath("item_prices",$id), array(), $env, $headers);
  }

  public static function update($id, $params = array(), $env = null, $headers = array())
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, ChargeBee_Util::encodeURIPath("item_prices",$id), $params, $env, $headers);
  }

  public static function all($params = array(), $env = null, $headers = array())
  {
    return ChargeBee_Request::sendListRequest(ChargeBee_Request::GET, ChargeBee_Util::encodeURIPath("item_prices"), $params, $env, $headers);
  }

  public static function delete($id, $env = null, $headers = array())
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, ChargeBee_Util::encodeURIPath("item_prices",$id,"delete"), array(), $env, $headers);
  }

 }

?>