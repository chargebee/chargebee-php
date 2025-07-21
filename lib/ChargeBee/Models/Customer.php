<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;
use ChargeBee\ChargeBee\Request;
use ChargeBee\ChargeBee\Util;

class Customer extends Model
{

  protected $allowed = [
    'id',
    'firstName',
    'lastName',
    'email',
    'phone',
    'company',
    'vatNumber',
    'autoCollection',
    'offlinePaymentMethod',
    'netTermDays',
    'vatNumberValidatedTime',
    'vatNumberStatus',
    'allowDirectDebit',
    'isLocationValid',
    'createdAt',
    'createdFromIp',
    'exemptionDetails',
    'taxability',
    'entityCode',
    'exemptNumber',
    'resourceVersion',
    'updatedAt',
    'locale',
    'billingDate',
    'billingMonth',
    'billingDateMode',
    'billingDayOfWeek',
    'billingDayOfWeekMode',
    'piiCleared',
    'autoCloseInvoices',
    'channel',
    'activeId',
    'cardStatus',
    'fraudFlag',
    'primaryPaymentSourceId',
    'backupPaymentSourceId',
    'billingAddress',
    'referralUrls',
    'contacts',
    'paymentMethod',
    'invoiceNotes',
    'businessEntityId',
    'preferredCurrencyCode',
    'promotionalCredits',
    'unbilledCharges',
    'refundableCredits',
    'excessPayments',
    'balances',
    'entityIdentifiers',
    'taxProvidersFields',
    'isEinvoiceEnabled',
    'einvoicingMethod',
    'metaData',
    'deleted',
    'registeredForGst',
    'consolidatedInvoicing',
    'customerType',
    'businessCustomerWithoutVatNumber',
    'clientProfileId',
    'relationship',
    'useDefaultHierarchySettings',
    'parentAccountAccess',
    'childAccountAccess',
    'vatNumberPrefix',
    'entityIdentifierScheme',
    'entityIdentifierStandard',
  ];



  # OPERATIONS
  #-----------

  public static function create($params = array(), $env = null, $headers = array())
  {
    $jsonKeys = array(
        "exemptionDetails" => 0,
        "metaData" => 0,
        "additionalInformation" => 1,
        "billingAddress" => 1,
    );
    return Request::send(Request::POST, Util::encodeURIPath("customers"), $params, $env, $headers, null, false, $jsonKeys);
  }

  public static function all($params = array(), $env = null, $headers = array())
  {
    $jsonKeys = array(
    );
    return Request::sendListRequest(Request::GET, Util::encodeURIPath("customers"), $params, $env, $headers, null, false, $jsonKeys);
  }

  public static function retrieve($id, $env = null, $headers = array())
  {
    $jsonKeys = array(
    );
    return Request::send(Request::GET, Util::encodeURIPath("customers",$id), array(), $env, $headers, null, false, $jsonKeys);
  }

  public static function update($id, $params = array(), $env = null, $headers = array())
  {
    $jsonKeys = array(
        "exemptionDetails" => 0,
        "metaData" => 0,
    );
    return Request::send(Request::POST, Util::encodeURIPath("customers",$id), $params, $env, $headers, null, false, $jsonKeys);
  }

  public static function updatePaymentMethod($id, $params, $env = null, $headers = array())
  {
    $jsonKeys = array(
        "additionalInformation" => 1,
    );
    return Request::send(Request::POST, Util::encodeURIPath("customers",$id,"update_payment_method"), $params, $env, $headers, null, false, $jsonKeys);
  }

  public static function updateBillingInfo($id, $params = array(), $env = null, $headers = array())
  {
    $jsonKeys = array(
    );
    return Request::send(Request::POST, Util::encodeURIPath("customers",$id,"update_billing_info"), $params, $env, $headers, null, false, $jsonKeys);
  }

  public static function contactsForCustomer($id, $params = array(), $env = null, $headers = array())
  {
    $jsonKeys = array(
    );
    return Request::send(Request::GET, Util::encodeURIPath("customers",$id,"contacts"), $params, $env, $headers, null, false, $jsonKeys);
  }

  public static function assignPaymentRole($id, $params, $env = null, $headers = array())
  {
    $jsonKeys = array(
    );
    return Request::send(Request::POST, Util::encodeURIPath("customers",$id,"assign_payment_role"), $params, $env, $headers, null, false, $jsonKeys);
  }

  public static function addContact($id, $params, $env = null, $headers = array())
  {
    $jsonKeys = array(
    );
    return Request::send(Request::POST, Util::encodeURIPath("customers",$id,"add_contact"), $params, $env, $headers, null, false, $jsonKeys);
  }

  public static function updateContact($id, $params, $env = null, $headers = array())
  {
    $jsonKeys = array(
    );
    return Request::send(Request::POST, Util::encodeURIPath("customers",$id,"update_contact"), $params, $env, $headers, null, false, $jsonKeys);
  }

  public static function deleteContact($id, $params, $env = null, $headers = array())
  {
    $jsonKeys = array(
    );
    return Request::send(Request::POST, Util::encodeURIPath("customers",$id,"delete_contact"), $params, $env, $headers, null, false, $jsonKeys);
  }

  public static function addPromotionalCredits($id, $params, $env = null, $headers = array())
  {
    $jsonKeys = array(
    );
    return Request::send(Request::POST, Util::encodeURIPath("customers",$id,"add_promotional_credits"), $params, $env, $headers, null, false, $jsonKeys);
  }

  public static function deductPromotionalCredits($id, $params, $env = null, $headers = array())
  {
    $jsonKeys = array(
    );
    return Request::send(Request::POST, Util::encodeURIPath("customers",$id,"deduct_promotional_credits"), $params, $env, $headers, null, false, $jsonKeys);
  }

  public static function setPromotionalCredits($id, $params, $env = null, $headers = array())
  {
    $jsonKeys = array(
    );
    return Request::send(Request::POST, Util::encodeURIPath("customers",$id,"set_promotional_credits"), $params, $env, $headers, null, false, $jsonKeys);
  }

  public static function recordExcessPayment($id, $params, $env = null, $headers = array())
  {
    $jsonKeys = array(
    );
    return Request::send(Request::POST, Util::encodeURIPath("customers",$id,"record_excess_payment"), $params, $env, $headers, null, false, $jsonKeys);
  }

  public static function collectPayment($id, $params, $env = null, $headers = array())
  {
    $jsonKeys = array(
        "additionalInformation" => 1,
    );
    return Request::send(Request::POST, Util::encodeURIPath("customers",$id,"collect_payment"), $params, $env, $headers, null, false, $jsonKeys);
  }

  public static function delete($id, $params = array(), $env = null, $headers = array())
  {
    $jsonKeys = array(
    );
    return Request::send(Request::POST, Util::encodeURIPath("customers",$id,"delete"), $params, $env, $headers, null, false, $jsonKeys);
  }

  public static function move($params, $env = null, $headers = array())
  {
    $jsonKeys = array(
    );
    return Request::send(Request::POST, Util::encodeURIPath("customers","move"), $params, $env, $headers, null, false, $jsonKeys);
  }

  public static function changeBillingDate($id, $params = array(), $env = null, $headers = array())
  {
    $jsonKeys = array(
    );
    return Request::send(Request::POST, Util::encodeURIPath("customers",$id,"change_billing_date"), $params, $env, $headers, null, false, $jsonKeys);
  }

  public static function merge($params, $env = null, $headers = array())
  {
    $jsonKeys = array(
    );
    return Request::send(Request::POST, Util::encodeURIPath("customers","merge"), $params, $env, $headers, null, false, $jsonKeys);
  }

  public static function clearPersonalData($id, $env = null, $headers = array())
  {
    $jsonKeys = array(
    );
    return Request::send(Request::POST, Util::encodeURIPath("customers",$id,"clear_personal_data"), array(), $env, $headers, null, false, $jsonKeys);
  }

  public static function relationships($id, $params = array(), $env = null, $headers = array())
  {
    $jsonKeys = array(
    );
    return Request::send(Request::POST, Util::encodeURIPath("customers",$id,"relationships"), $params, $env, $headers, null, false, $jsonKeys);
  }

  public static function deleteRelationship($id, $env = null, $headers = array())
  {
    $jsonKeys = array(
    );
    return Request::send(Request::POST, Util::encodeURIPath("customers",$id,"delete_relationship"), array(), $env, $headers, null, false, $jsonKeys);
  }

  public static function hierarchy($id, $params, $env = null, $headers = array())
  {
    $jsonKeys = array(
    );
    return Request::send(Request::GET, Util::encodeURIPath("customers",$id,"hierarchy"), $params, $env, $headers, null, false, $jsonKeys);
  }

  public static function listHierarchyDetail($id, $params, $env = null, $headers = array())
  {
    $jsonKeys = array(
    );
    return Request::send(Request::GET, Util::encodeURIPath("customers",$id,"hierarchy_detail"), $params, $env, $headers, null, false, $jsonKeys);
  }

  public static function updateHierarchySettings($id, $params = array(), $env = null, $headers = array())
  {
    $jsonKeys = array(
    );
    return Request::send(Request::POST, Util::encodeURIPath("customers",$id,"update_hierarchy_settings"), $params, $env, $headers, null, false, $jsonKeys);
  }

 }

?>