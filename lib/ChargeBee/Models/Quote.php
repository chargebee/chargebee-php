<?php

class ChargeBee_Quote extends ChargeBee_Model
{

  protected $allowed = array('id', 'name', 'poNumber', 'customerId', 'subscriptionId', 'invoiceId', 'status',
'operationType', 'vatNumber', 'priceType', 'validTill', 'date', 'totalPayable', 'chargeOnAcceptance','subTotal', 'total', 'creditsApplied', 'amountPaid', 'amountDue', 'version', 'resourceVersion','updatedAt', 'lineItems', 'discounts', 'lineItemDiscounts', 'taxes', 'lineItemTaxes', 'currencyCode','notes', 'shippingAddress', 'billingAddress', 'contractTermStart', 'contractTermEnd', 'contractTermTerminationFee');



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

  public static function editCreateSubForCustomerQuote($id, $params, $env = null, $headers = array())
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, ChargeBee_Util::encodeURIPath("quotes",$id,"edit_create_subscription_quote"), $params, $env, $headers);
  }

  public static function updateSubscriptionQuote($params, $env = null, $headers = array())
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, ChargeBee_Util::encodeURIPath("quotes","update_subscription_quote"), $params, $env, $headers);
  }

  public static function editUpdateSubscriptionQuote($id, $params = array(), $env = null, $headers = array())
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, ChargeBee_Util::encodeURIPath("quotes",$id,"edit_update_subscription_quote"), $params, $env, $headers);
  }

  public static function createForOnetimeCharges($params, $env = null, $headers = array())
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, ChargeBee_Util::encodeURIPath("quotes","create_for_onetime_charges"), $params, $env, $headers);
  }

  public static function editOneTimeQuote($id, $params = array(), $env = null, $headers = array())
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, ChargeBee_Util::encodeURIPath("quotes",$id,"edit_one_time_quote"), $params, $env, $headers);
  }

  public static function all($params = array(), $env = null, $headers = array())
  {
    return ChargeBee_Request::sendListRequest(ChargeBee_Request::GET, ChargeBee_Util::encodeURIPath("quotes"), $params, $env, $headers);
  }

  public static function quoteLineGroupsForQuote($id, $params = array(), $env = null, $headers = array())
  {
    return ChargeBee_Request::send(ChargeBee_Request::GET, ChargeBee_Util::encodeURIPath("quotes",$id,"quote_line_groups"), $params, $env, $headers);
  }

  public static function convert($id, $params = array(), $env = null, $headers = array())
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, ChargeBee_Util::encodeURIPath("quotes",$id,"convert"), $params, $env, $headers);
  }

  public static function updateStatus($id, $params, $env = null, $headers = array())
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, ChargeBee_Util::encodeURIPath("quotes",$id,"update_status"), $params, $env, $headers);
  }

  public static function extendExpiryDate($id, $params, $env = null, $headers = array())
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, ChargeBee_Util::encodeURIPath("quotes",$id,"extend_expiry_date"), $params, $env, $headers);
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