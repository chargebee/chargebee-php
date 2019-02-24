<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;
use ChargeBee\ChargeBee\Request;
use ChargeBee\ChargeBee\Util;

class Subscription extends Model
{
    protected $allowed = [
      'id',
      'customerId',
      'currencyCode',
      'planId',
      'planQuantity',
      'planUnitPrice',
      'setupFee',
      'planAmount',
      'billingPeriod',
      'billingPeriodUnit',
      'planFreeQuantity',
      'status',
      'startDate',
      'trialStart',
      'trialEnd',
      'currentTermStart',
      'currentTermEnd',
      'nextBillingAt',
      'remainingBillingCycles',
      'poNumber',
      'createdAt',
      'startedAt',
      'activatedAt',
      'giftId',
      'pauseDate',
      'resumeDate',
      'cancelledAt',
      'cancelReason',
      'affiliateToken',
      'createdFromIp',
      'resourceVersion',
      'updatedAt',
      'hasScheduledChanges',
      'paymentSourceId',
      'autoCollection',
      'dueInvoicesCount',
      'dueSince',
      'totalDues',
      'mrr',
      'exchangeRate',
      'baseCurrencyCode',
      'addons',
      'eventBasedAddons',
      'chargedEventBasedAddons',
      'coupon',
      'coupons',
      'shippingAddress',
      'referralInfo',
      'invoiceNotes',
      'metaData',
      'deleted',
    ];

    # OPERATIONS
    #-----------

    public static function create($params, $env = null, $headers = [])
    {
        return Request::send(Request::POST, Util::encodeURIPath("subscriptions"), $params, $env, $headers);
    }

    public static function createForCustomer($id, $params, $env = null, $headers = [])
    {
        return Request::send(Request::POST, Util::encodeURIPath("customers", $id, "subscriptions"), $params, $env, $headers);
    }

    public static function all($params = [], $env = null, $headers = [])
    {
        return Request::sendListRequest(Request::GET, Util::encodeURIPath("subscriptions"), $params, $env, $headers);
    }

    public static function subscriptionsForCustomer($id, $params = [], $env = null, $headers = [])
    {
        return Request::send(Request::GET, Util::encodeURIPath("customers", $id, "subscriptions"), $params, $env, $headers);
    }

    public static function retrieve($id, $env = null, $headers = [])
    {
        return Request::send(Request::GET, Util::encodeURIPath("subscriptions", $id), [], $env, $headers);
    }

    public static function retrieveWithScheduledChanges($id, $env = null, $headers = [])
    {
        return Request::send(Request::GET, Util::encodeURIPath("subscriptions", $id, "retrieve_with_scheduled_changes"), [], $env, $headers);
    }

    public static function removeScheduledChanges($id, $env = null, $headers = [])
    {
        return Request::send(Request::POST, Util::encodeURIPath("subscriptions", $id, "remove_scheduled_changes"), [], $env, $headers);
    }

    public static function removeScheduledCancellation($id, $params = [], $env = null, $headers = [])
    {
        return Request::send(Request::POST, Util::encodeURIPath("subscriptions", $id, "remove_scheduled_cancellation"), $params, $env, $headers);
    }

    public static function removeCoupons($id, $params = [], $env = null, $headers = [])
    {
        return Request::send(Request::POST, Util::encodeURIPath("subscriptions", $id, "remove_coupons"), $params, $env, $headers);
    }

    public static function update($id, $params = [], $env = null, $headers = [])
    {
        return Request::send(Request::POST, Util::encodeURIPath("subscriptions", $id), $params, $env, $headers);
    }

    public static function changeTermEnd($id, $params, $env = null, $headers = [])
    {
        return Request::send(Request::POST, Util::encodeURIPath("subscriptions", $id, "change_term_end"), $params, $env, $headers);
    }

    public static function cancel($id, $params = [], $env = null, $headers = [])
    {
        return Request::send(Request::POST, Util::encodeURIPath("subscriptions", $id, "cancel"), $params, $env, $headers);
    }

    public static function reactivate($id, $params = [], $env = null, $headers = [])
    {
        return Request::send(Request::POST, Util::encodeURIPath("subscriptions", $id, "reactivate"), $params, $env, $headers);
    }

    public static function addChargeAtTermEnd($id, $params, $env = null, $headers = [])
    {
        return Request::send(Request::POST, Util::encodeURIPath("subscriptions", $id, "add_charge_at_term_end"), $params, $env, $headers);
    }

    public static function chargeAddonAtTermEnd($id, $params, $env = null, $headers = [])
    {
        return Request::send(Request::POST, Util::encodeURIPath("subscriptions", $id, "charge_addon_at_term_end"), $params, $env, $headers);
    }

    public static function chargeFutureRenewals($id, $params = [], $env = null, $headers = [])
    {
        return Request::send(Request::POST, Util::encodeURIPath("subscriptions", $id, "charge_future_renewals"), $params, $env, $headers);
    }

    public static function importSubscription($params, $env = null, $headers = [])
    {
        return Request::send(Request::POST, Util::encodeURIPath("subscriptions", "import_subscription"), $params, $env, $headers);
    }

    public static function importForCustomer($id, $params, $env = null, $headers = [])
    {
        return Request::send(Request::POST, Util::encodeURIPath("customers", $id, "import_subscription"), $params, $env, $headers);
    }

    public static function overrideBillingProfile($id, $params = [], $env = null, $headers = [])
    {
        return Request::send(Request::POST, Util::encodeURIPath("subscriptions", $id, "override_billing_profile"), $params, $env, $headers);
    }

    public static function delete($id, $env = null, $headers = [])
    {
        return Request::send(Request::POST, Util::encodeURIPath("subscriptions", $id, "delete"), [], $env, $headers);
    }

    public static function pause($id, $params = [], $env = null, $headers = [])
    {
        return Request::send(Request::POST, Util::encodeURIPath("subscriptions", $id, "pause"), $params, $env, $headers);
    }

    public static function resume($id, $params = [], $env = null, $headers = [])
    {
        return Request::send(Request::POST, Util::encodeURIPath("subscriptions", $id, "resume"), $params, $env, $headers);
    }

    public static function removeScheduledPause($id, $env = null, $headers = [])
    {
        return Request::send(Request::POST, Util::encodeURIPath("subscriptions", $id, "remove_scheduled_pause"), [], $env, $headers);
    }

    public static function removeScheduledResumption($id, $env = null, $headers = [])
    {
        return Request::send(Request::POST, Util::encodeURIPath("subscriptions", $id, "remove_scheduled_resumption"), [], $env, $headers);
    }
}
