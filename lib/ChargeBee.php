<?php

function checkExtentions() {
    $extensions = array('curl', 'json');
    foreach ($extensions AS $e) {
        if (!extension_loaded($e)) {
            throw new Exception('ChargeBee requires the ' . $e . ' extension.');
        }
    }
}

checkExtentions();

abstract class ChargeBee
{
	
  public static $verifyCaCerts = true;

  public static function getVerifyCaCerts() {
    return self::$verifyCaCerts;
  }

  public static function setVerifyCaCerts($verify) {
    self::$verifyCaCerts = $verify;
  }

	public static function getCaCertPath() {
		return dirname(__FILE__) . "/ssl/ca-certs.crt";
	}

}

require(dirname(__FILE__) . '/ChargeBee/Version.php');
require(dirname(__FILE__) . '/ChargeBee/Environment.php');
require(dirname(__FILE__) . '/ChargeBee/Util.php');
require(dirname(__FILE__) . '/ChargeBee/APIError.php');

require(dirname(__FILE__) . '/ChargeBee/Request.php');
require(dirname(__FILE__) . '/ChargeBee/Curl.php');

require(dirname(__FILE__) . '/ChargeBee/Result.php');
require(dirname(__FILE__) . '/ChargeBee/ListResult.php');

require(dirname(__FILE__) . '/ChargeBee/Model.php');

require(dirname(__FILE__) . '/ChargeBee/Models/Subscription.php');
require(dirname(__FILE__) . '/ChargeBee/Models/SubscriptionAddon.php');
require(dirname(__FILE__) . '/ChargeBee/Models/SubscriptionCoupon.php');
require(dirname(__FILE__) . '/ChargeBee/Models/Customer.php');
require(dirname(__FILE__) . '/ChargeBee/Models/CustomerBillingAddress.php');
require(dirname(__FILE__) . '/ChargeBee/Models/Card.php');
require(dirname(__FILE__) . '/ChargeBee/Models/Address.php');
require(dirname(__FILE__) . '/ChargeBee/Models/Invoice.php');
require(dirname(__FILE__) . '/ChargeBee/Models/InvoiceLineItem.php');
require(dirname(__FILE__) . '/ChargeBee/Models/InvoiceDiscount.php');
require(dirname(__FILE__) . '/ChargeBee/Models/InvoiceTax.php');
require(dirname(__FILE__) . '/ChargeBee/Models/Estimate.php');
require(dirname(__FILE__) . '/ChargeBee/Models/EstimateLineItem.php');
require(dirname(__FILE__) . '/ChargeBee/Models/EstimateDiscount.php');
require(dirname(__FILE__) . '/ChargeBee/Models/EstimateTax.php');
require(dirname(__FILE__) . '/ChargeBee/Models/Transaction.php');
require(dirname(__FILE__) . '/ChargeBee/Models/Content.php');
require(dirname(__FILE__) . '/ChargeBee/Models/Event.php');
require(dirname(__FILE__) . '/ChargeBee/Models/HostedPage.php');
require(dirname(__FILE__) . '/ChargeBee/Models/Plan.php');
require(dirname(__FILE__) . '/ChargeBee/Models/Addon.php');
require(dirname(__FILE__) . '/ChargeBee/Models/Coupon.php');
require(dirname(__FILE__) . '/ChargeBee/Models/CouponCode.php');
require(dirname(__FILE__) . '/ChargeBee/Models/Comment.php');
require(dirname(__FILE__) . '/ChargeBee/Models/Download.php');
