<?php

class ChargeBee_Quote extends ChargeBee_Model
{

  protected $allowed = array('id', 'poNumber', 'customerId', 'subscriptionId', 'status', 'operationType', 'vatNumber',
'priceType', 'validTill', 'date', 'subTotal', 'total', 'creditsApplied', 'amountPaid', 'amountDue','resourceVersion', 'updatedAt', 'currencyCode', 'lineItems', 'discounts', 'lineItemDiscounts','taxes', 'lineItemTaxes', 'shippingAddress', 'billingAddress');



  # OPERATIONS
  #-----------

  public static function retrieve($id, $env = null, $headers = array())
  {
    return ChargeBee_Request::send(ChargeBee_Request::GET, ChargeBee_Util::encodeURIPath("quotes",$id), array(), $env, $headers);
  }

  public static function createSubForCustomerQuote($id, $params, $env = null, $headers = array())
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, ChargeBee_Util::encodeURIPath("customers",$id,"create_subscription_quote"), $params, $env, $headers);
  }

  public static function updateSubscriptionQuote($params, $env = null, $headers = array())
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, ChargeBee_Util::encodeURIPath("quotes","update_subscription_quote"), $params, $env, $headers);
  }

  public static function createForOnetimeCharges($params, $env = null, $headers = array())
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, ChargeBee_Util::encodeURIPath("quotes","create_for_onetime_charges"), $params, $env, $headers);
  }

  public static function convert($id, $env = null, $headers = array())
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, ChargeBee_Util::encodeURIPath("quotes",$id,"convert"), array(), $env, $headers);
  }

  public static function updateStatus($id, $params, $env = null, $headers = array())
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, ChargeBee_Util::encodeURIPath("quotes",$id,"update_status"), $params, $env, $headers);
  }

  public static function delete($id, $params = array(), $env = null, $headers = array())
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, ChargeBee_Util::encodeURIPath("quotes",$id,"delete"), $params, $env, $headers);
  }

  public static function pdf($id, $params = array(), $env = null, $headers = array())
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, ChargeBee_Util::encodeURIPath("quotes",$id,"pdf"), $params, $env, $headers);
  }

 }

?>