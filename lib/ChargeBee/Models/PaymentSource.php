<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;
use ChargeBee\ChargeBee\Request;
use ChargeBee\ChargeBee\Util;

class PaymentSource extends Model
{

  protected $allowed = [
    'id',
    'resourceVersion',
    'updatedAt',
    'createdAt',
    'customerId',
    'type',
    'referenceId',
    'status',
    'gateway',
    'gatewayAccountId',
    'ipAddress',
    'issuingCountry',
    'card',
    'bankAccount',
    'boleto',
    'billingAddress',
    'amazonPayment',
    'upi',
    'paypal',
    'venmo',
    'klarnaPayNow',
    'mandates',
    'deleted',
    'businessEntityId',
  ];



  # OPERATIONS
  #-----------

  public static function createUsingTempToken($params, $env = null, $headers = array())
  {
    $jsonKeys = array(
        "additionalInformation" => 0,
    );
    return Request::send(Request::POST, Util::encodeURIPath("payment_sources","create_using_temp_token"), $params, $env, $headers, null, false, $jsonKeys);
  }

  public static function createUsingPermanentToken($params, $env = null, $headers = array())
  {
    $jsonKeys = array(
        "additionalInformation" => 0,
    );
    return Request::send(Request::POST, Util::encodeURIPath("payment_sources","create_using_permanent_token"), $params, $env, $headers, null, false, $jsonKeys);
  }

  public static function createUsingToken($params, $env = null, $headers = array())
  {
    $jsonKeys = array(
    );
    return Request::send(Request::POST, Util::encodeURIPath("payment_sources","create_using_token"), $params, $env, $headers, null, false, $jsonKeys);
  }

  public static function createUsingPaymentIntent($params, $env = null, $headers = array())
  {
    $jsonKeys = array(
        "additionalInfo" => 1,
        "additionalInformation" => 1,
    );
    return Request::send(Request::POST, Util::encodeURIPath("payment_sources","create_using_payment_intent"), $params, $env, $headers, null, false, $jsonKeys);
  }

  public static function createVoucherPaymentSource($params, $env = null, $headers = array())
  {
    $jsonKeys = array(
        "billingAddress" => 1,
    );
    return Request::send(Request::POST, Util::encodeURIPath("payment_sources","create_voucher_payment_source"), $params, $env, $headers, null, false, $jsonKeys);
  }

  public static function createCard($params, $env = null, $headers = array())
  {
    $jsonKeys = array(
        "additionalInformation" => 1,
    );
    return Request::send(Request::POST, Util::encodeURIPath("payment_sources","create_card"), $params, $env, $headers, null, false, $jsonKeys);
  }

  public static function createBankAccount($params, $env = null, $headers = array())
  {
    $jsonKeys = array(
        "billingAddress" => 1,
    );
    return Request::send(Request::POST, Util::encodeURIPath("payment_sources","create_bank_account"), $params, $env, $headers, null, false, $jsonKeys);
  }

  public static function updateCard($id, $params = array(), $env = null, $headers = array())
  {
    $jsonKeys = array(
        "gatewayMetaData" => 0,
        "additionalInformation" => 1,
    );
    return Request::send(Request::POST, Util::encodeURIPath("payment_sources",$id,"update_card"), $params, $env, $headers, null, false, $jsonKeys);
  }

  public static function updateBankAccount($id, $params = array(), $env = null, $headers = array())
  {
    $jsonKeys = array(
    );
    return Request::send(Request::POST, Util::encodeURIPath("payment_sources",$id,"update_bank_account"), $params, $env, $headers, null, false, $jsonKeys);
  }

  public static function verifyBankAccount($id, $params, $env = null, $headers = array())
  {
    $jsonKeys = array(
    );
    return Request::send(Request::POST, Util::encodeURIPath("payment_sources",$id,"verify_bank_account"), $params, $env, $headers, null, false, $jsonKeys);
  }

  public static function retrieve($id, $env = null, $headers = array())
  {
    $jsonKeys = array(
    );
    return Request::send(Request::GET, Util::encodeURIPath("payment_sources",$id), array(), $env, $headers, null, false, $jsonKeys);
  }

  public static function all($params = array(), $env = null, $headers = array())
  {
    $jsonKeys = array(
    );
    return Request::sendListRequest(Request::GET, Util::encodeURIPath("payment_sources"), $params, $env, $headers, null, false, $jsonKeys);
  }

  public static function switchGatewayAccount($id, $params, $env = null, $headers = array())
  {
    $jsonKeys = array(
    );
    return Request::send(Request::POST, Util::encodeURIPath("payment_sources",$id,"switch_gateway_account"), $params, $env, $headers, null, false, $jsonKeys);
  }

  public static function exportPaymentSource($id, $params, $env = null, $headers = array())
  {
    $jsonKeys = array(
    );
    return Request::send(Request::POST, Util::encodeURIPath("payment_sources",$id,"export_payment_source"), $params, $env, $headers, null, false, $jsonKeys);
  }

  public static function delete($id, $env = null, $headers = array())
  {
    $jsonKeys = array(
    );
    return Request::send(Request::POST, Util::encodeURIPath("payment_sources",$id,"delete"), array(), $env, $headers, null, false, $jsonKeys);
  }

  public static function deleteLocal($id, $env = null, $headers = array())
  {
    $jsonKeys = array(
    );
    return Request::send(Request::POST, Util::encodeURIPath("payment_sources",$id,"delete_local"), array(), $env, $headers, null, false, $jsonKeys);
  }

 }

?>