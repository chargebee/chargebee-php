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

require(dirname(__FILE__) . '/ChargeBee/Exceptions/IOException.php');
require(dirname(__FILE__) . '/ChargeBee/Exceptions/APIError.php');
require(dirname(__FILE__) . '/ChargeBee/Exceptions/PaymentException.php');
require(dirname(__FILE__) . '/ChargeBee/Exceptions/OperationFailedException.php');
require(dirname(__FILE__) . '/ChargeBee/Exceptions/InvalidRequestException.php');

require(dirname(__FILE__) . '/ChargeBee/Request.php');
require(dirname(__FILE__) . '/ChargeBee/Curl.php');

require(dirname(__FILE__) . '/ChargeBee/Result.php');
require(dirname(__FILE__) . '/ChargeBee/ListResult.php');

require(dirname(__FILE__) . '/ChargeBee/Model.php');

require(dirname(__FILE__) . '/ChargeBee/Models/Subscription.php');
require(dirname(__FILE__) . '/ChargeBee/Models/SubscriptionAddon.php');
require(dirname(__FILE__) . '/ChargeBee/Models/SubscriptionCoupon.php');
require(dirname(__FILE__) . '/ChargeBee/Models/SubscriptionShippingAddress.php');
require(dirname(__FILE__) . '/ChargeBee/Models/Customer.php');
require(dirname(__FILE__) . '/ChargeBee/Models/CustomerContact.php');
require(dirname(__FILE__) . '/ChargeBee/Models/CustomerBillingAddress.php');
require(dirname(__FILE__) . '/ChargeBee/Models/CustomerPaymentMethod.php');
require(dirname(__FILE__) . '/ChargeBee/Models/Card.php');
require(dirname(__FILE__) . '/ChargeBee/Models/ThirdPartyPaymentMethod.php');
require(dirname(__FILE__) . '/ChargeBee/Models/Address.php');
require(dirname(__FILE__) . '/ChargeBee/Models/Invoice.php');
require(dirname(__FILE__) . '/ChargeBee/Models/InvoiceLineItem.php');
require(dirname(__FILE__) . '/ChargeBee/Models/InvoiceDiscount.php');
require(dirname(__FILE__) . '/ChargeBee/Models/InvoiceTax.php');
require(dirname(__FILE__) . '/ChargeBee/Models/InvoiceNote.php');
require(dirname(__FILE__) . '/ChargeBee/Models/TransactionLinkedRefund.php');
require(dirname(__FILE__) . '/ChargeBee/Models/InvoiceBillingAddress.php');
require(dirname(__FILE__) . '/ChargeBee/Models/InvoiceShippingAddress.php');
require(dirname(__FILE__) . '/ChargeBee/Models/Order.php');
require(dirname(__FILE__) . '/ChargeBee/Models/InvoiceLinkedOrder.php');
require(dirname(__FILE__) . '/ChargeBee/Models/Estimate.php');
require(dirname(__FILE__) . '/ChargeBee/Models/Transaction.php');
require(dirname(__FILE__) . '/ChargeBee/Models/TransactionLinkedInvoice.php');
require(dirname(__FILE__) . '/ChargeBee/Models/Content.php');
require(dirname(__FILE__) . '/ChargeBee/Models/Event.php');
require(dirname(__FILE__) . '/ChargeBee/Models/EventWebhook.php');
require(dirname(__FILE__) . '/ChargeBee/Models/HostedPage.php');
require(dirname(__FILE__) . '/ChargeBee/Models/Plan.php');
require(dirname(__FILE__) . '/ChargeBee/Models/Addon.php');
require(dirname(__FILE__) . '/ChargeBee/Models/Coupon.php');
require(dirname(__File__) . '/ChargeBee/Models/CouponSet.php');
require(dirname(__FILE__) . '/ChargeBee/Models/CouponCode.php');
require(dirname(__FILE__) . '/ChargeBee/Models/Comment.php');
require(dirname(__FILE__) . '/ChargeBee/Models/PortalSession.php');
require(dirname(__FILE__) . '/ChargeBee/Models/PortalSessionLinkedCustomer.php');
require(dirname(__FILE__) . '/ChargeBee/Models/Download.php');
require(dirname(__FILE__) . '/ChargeBee/Models/CreditNote.php');
require(dirname(__FILE__) . '/ChargeBee/Models/CreditNoteAllocation.php');
require(dirname(__FILE__) . '/ChargeBee/Models/CreditNoteDiscount.php');
require(dirname(__FILE__) . '/ChargeBee/Models/CreditNoteEstimate.php');
require(dirname(__FILE__) . '/ChargeBee/Models/CreditNoteEstimateDiscount.php');
require(dirname(__FILE__) . '/ChargeBee/Models/CreditNoteEstimateLineItem.php');
require(dirname(__FILE__) . '/ChargeBee/Models/CreditNoteEstimateTax.php');
require(dirname(__FILE__) . '/ChargeBee/Models/CreditNoteLineItem.php');
require(dirname(__FILE__) . '/ChargeBee/Models/CreditNoteLinkedRefund.php');
require(dirname(__FILE__) . '/ChargeBee/Models/CreditNoteTax.php');
require(dirname(__FILE__) . '/ChargeBee/Models/CreditNoteLineItemTax.php');
require(dirname(__FILE__) . '/ChargeBee/Models/CreditNoteEstimateLineItemTax.php');
require(dirname(__FILE__) . '/ChargeBee/Models/InvoiceAdjustmentCreditNote.php');
require(dirname(__FILE__) . '/ChargeBee/Models/InvoiceAppliedCredit.php');
require(dirname(__FILE__) . '/ChargeBee/Models/InvoiceCreatedCreditNote.php');
require(dirname(__FILE__) . '/ChargeBee/Models/InvoiceEstimate.php');
require(dirname(__FILE__) . '/ChargeBee/Models/InvoiceEstimateDiscount.php');
require(dirname(__FILE__) . '/ChargeBee/Models/InvoiceEstimateLineItem.php');
require(dirname(__FILE__) . '/ChargeBee/Models/InvoiceEstimateTax.php');
require(dirname(__FILE__) . '/ChargeBee/Models/InvoiceIssuedCreditNote.php');
require(dirname(__FILE__) . '/ChargeBee/Models/InvoiceLinkedPayment.php');
require(dirname(__FILE__) . '/ChargeBee/Models/InvoiceLineItemTax.php');
require(dirname(__FILE__) . '/ChargeBee/Models/InvoiceEstimateLineItemTax.php');
require(dirname(__FILE__) . '/ChargeBee/Models/TransactionLinkedCreditNote.php');
require(dirname(__FILE__) . '/ChargeBee/Models/SubscriptionEstimate.php');
require(dirname(__FILE__) . '/ChargeBee/Models/SubscriptionEstimateShippingAddress.php');
require(dirname(__FILE__) . '/ChargeBee/Models/ResourceMigration.php');
require(dirname(__FILE__) . '/ChargeBee/Models/SiteMigrationDetail.php');
require(dirname(__FILE__) . '/ChargeBee/Models/CreditNoteEstimateLineItemDiscount.php');
require(dirname(__FILE__) . '/ChargeBee/Models/CreditNoteLineItemDiscount.php');
require(dirname(__FILE__) . '/ChargeBee/Models/InvoiceEstimateLineItemDiscount.php');
require(dirname(__FILE__) . '/ChargeBee/Models/InvoiceLineItemDiscount.php');
require(dirname(__FILE__) . '/ChargeBee/Models/PaymentSource.php');
require(dirname(__FILE__) . '/ChargeBee/Models/PaymentSourceAmazonPayment.php');
require(dirname(__FILE__) . '/ChargeBee/Models/PaymentSourceBankAccount.php');
require(dirname(__FILE__) . '/ChargeBee/Models/PaymentSourceCard.php');
require(dirname(__FILE__) . '/ChargeBee/Models/PaymentSourcePaypal.php');
require(dirname(__FILE__) . '/ChargeBee/Models/SubscriptionReferralInfo.php');
require(dirname(__FILE__) . '/ChargeBee/Models/UnbilledCharge.php');
require(dirname(__FILE__) . '/ChargeBee/Models/CustomerReferralUrl.php');
require(dirname(__FILE__) . '/ChargeBee/Models/TimeMachine.php');
require(dirname(__FILE__) . '/ChargeBee/Models/PromotionalCredit.php');
require(dirname(__FILE__) . '/ChargeBee/Models/CustomerBalance.php');
require(dirname(__FILE__) . '/ChargeBee/Models/VirtualBankAccount.php');
require(dirname(__FILE__) . '/ChargeBee/Models/Export.php');
require(dirname(__FILE__) . '/ChargeBee/Models/ExportDownload.php');
require(dirname(__FILE__) . '/ChargeBee/Models/PlanApplicableAddon.php');
require(dirname(__FILE__) . '/ChargeBee/Models/PlanAttachedAddon.php');
require(dirname(__FILE__) . '/ChargeBee/Models/PlanEventBasedAddon.php');
require(dirname(__FILE__) . '/ChargeBee/Models/SubscriptionChargedEventBasedAddon.php');
require(dirname(__FILE__) . '/ChargeBee/Models/SubscriptionEventBasedAddon.php');
require(dirname(__FILE__) . '/ChargeBee/Models/OrderBillingAddress.php');
require(dirname(__FILE__) . '/ChargeBee/Models/OrderLineItemDiscount.php');
require(dirname(__FILE__) . '/ChargeBee/Models/OrderLineItemTax.php');
require(dirname(__FILE__) . '/ChargeBee/Models/OrderLinkedCreditNote.php');
require(dirname(__FILE__) . '/ChargeBee/Models/OrderOrderLineItem.php');
require(dirname(__FILE__) . '/ChargeBee/Models/OrderShippingAddress.php');
require(dirname(__FILE__) . '/ChargeBee/Models/Contact.php');
require(dirname(__FILE__) . '/ChargeBee/Models/AddonTier.php');
require(dirname(__FILE__) . '/ChargeBee/Models/CreditNoteEstimateLineItemTier.php');
require(dirname(__FILE__) . '/ChargeBee/Models/CreditNoteLineItemTier.php');
require(dirname(__FILE__) . '/ChargeBee/Models/InvoiceEstimateLineItemTier.php');
require(dirname(__FILE__) . '/ChargeBee/Models/InvoiceLineItemTier.php');
require(dirname(__FILE__) . '/ChargeBee/Models/PlanTier.php');
require(dirname(__FILE__) . '/ChargeBee/Models/UnbilledChargeTier.php');
require(dirname(__FILE__) . '/ChargeBee/Models/TransactionLinkedPayment.php');
require(dirname(__FILE__) . '/ChargeBee/Models/Gift.php');
require(dirname(__FILE__) . '/ChargeBee/Models/GiftGiftReceiver.php');
require(dirname(__FILE__) . '/ChargeBee/Models/GiftGifter.php');
require(dirname(__FILE__) . '/ChargeBee/Models/GiftGiftTimeline.php');
require(dirname(__FILE__) . '/ChargeBee/Models/Quote.php');
require(dirname(__FILE__) . '/ChargeBee/Models/QuoteBillingAddress.php');
require(dirname(__FILE__) . '/ChargeBee/Models/QuoteDiscount.php');
require(dirname(__FILE__) . '/ChargeBee/Models/QuoteLineItem.php');
require(dirname(__FILE__) . '/ChargeBee/Models/QuoteLineItemDiscount.php');
require(dirname(__FILE__) . '/ChargeBee/Models/QuoteLineItemTax.php');
require(dirname(__FILE__) . '/ChargeBee/Models/QuoteShippingAddress.php');
require(dirname(__FILE__) . '/ChargeBee/Models/QuoteTax.php');
require(dirname(__FILE__) . '/ChargeBee/Models/InvoiceDunningAttempt.php');
require(dirname(__FILE__) . '/ChargeBee/Models/Hierarchy.php');
require(dirname(__FILE__) . '/ChargeBee/Models/CustomerRelationship.php');
require(dirname(__FILE__) . '/ChargeBee/Models/PaymentIntent.php');
require(dirname(__FILE__) . '/ChargeBee/Models/PaymentIntentPaymentAttempt.php');
require(dirname(__FILE__) . '/ChargeBee/Models/AdvanceInvoiceSchedule.php');
require(dirname(__FILE__) . '/ChargeBee/Models/AdvanceInvoiceScheduleFixedIntervalSchedule.php');
require(dirname(__FILE__) . '/ChargeBee/Models/AdvanceInvoiceScheduleSpecificDatesSchedule.php');
require(dirname(__FILE__) . '/ChargeBee/Models/ContractTerm.php');
require(dirname(__FILE__) . '/ChargeBee/Models/CustomerChildAccountAccess.php');
require(dirname(__FILE__) . '/ChargeBee/Models/CustomerParentAccountAccess.php');
require(dirname(__FILE__) . '/ChargeBee/Models/QuoteLineGroup.php');
require(dirname(__FILE__) . '/ChargeBee/Models/QuoteLineGroupDiscount.php');
require(dirname(__FILE__) . '/ChargeBee/Models/QuoteLineGroupLineItem.php');
require(dirname(__FILE__) . '/ChargeBee/Models/QuoteLineGroupLineItemDiscount.php');
require(dirname(__FILE__) . '/ChargeBee/Models/QuoteLineGroupLineItemTax.php');
require(dirname(__FILE__) . '/ChargeBee/Models/QuoteLineGroupTax.php');
require(dirname(__FILE__) . '/ChargeBee/Models/QuotedSubscription.php');
require(dirname(__FILE__) . '/ChargeBee/Models/QuotedSubscriptionAddon.php');
require(dirname(__FILE__) . '/ChargeBee/Models/QuotedSubscriptionCoupon.php');
require(dirname(__FILE__) . '/ChargeBee/Models/QuotedSubscriptionEventBasedAddon.php');
require(dirname(__FILE__) . '/ChargeBee/Models/SubscriptionContractTerm.php');
require(dirname(__FILE__) . '/ChargeBee/Models/SubscriptionEstimateContractTerm.php');
require(dirname(__FILE__) . '/ChargeBee/Models/Token.php');
require(dirname(__FILE__) . '/ChargeBee/Models/Usage.php');
require(dirname(__FILE__) . '/ChargeBee/Models/Item.php');
require(dirname(__FILE__) . '/ChargeBee/Models/ItemPrice.php');
require(dirname(__FILE__) . '/ChargeBee/Models/ItemFamily.php');
require(dirname(__FILE__) . '/ChargeBee/Models/DifferentialPrice.php');

