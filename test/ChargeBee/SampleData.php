<?php

class ChargeBee_SampleData
{

	function simpleSubscription()
	{
		return array(
		'subscription'        => array(
			'id'                 => 'simple_subscription',
			'plan_id'            => 'basic'
			),
		'customer'            => array(
			'first_name'         => 'simple',
			'last_name'          => 'subscription'
			)
			);
	}

	function nestedSubscription()
	{
		return array(
		'subscription'        => array(
			'id'                 => 'nested_subscription',
			'plan_id'            => 'basic',
		'addons'              => array(
			array('id'           => 'monitor', 'quantity' => '10'),
			array('id'           => 'ssl')
			)
			)
			);
	}

	function testSubscription()
	{
		return array(
		'subscription'        => array(
			'id'                 => "sample_subscription",
			'plan_id'            => "basic"
			)
			);
	}

	function listSubscriptions()
	{
		return array(
			self::testSubscription(), self::testSubscription()
			);
	}

	function sampleEvent()
	{
		return array(
		'event'               => array(
			'id'                 => 'sample_event',
			'occurred_at'        => 1325356232,
			'event_type'         => "payment_collected",
			'webhook_status'     => "succeeded",
		'content'             => array(
		"subscription"        => array(
			"id"                 => "unpaid_cancelled",
			"plan_id"            => "basic",
			"plan_quantity"      => 1,
			"status"             => "in_trial",
			"trial_start"        => 1326284601,
			"trial_end"          => 1328963001,
			"created_at"         => 1326284601,
			"due_invoices_count" => 0
			),
		"customer"            => array(
			"id"                 => "unpaid_cancelled",
			"first_name"         => "unpaid_cancelled",
			"email"              => "unpaid_cancelled@test.com",
			"created_at"         => 1335615802,
			"card_status"        => "valid"
			),
		"card"                => array(
			"customer_id"        => "unpaid_cancelled",
			"status"             => "valid",
			"gateway"            => "chargebee",
			"iin"                => "400551",
			"last4"              => "0004",
			"card_type"          => "visa",
			"expiry_month"       => 10,
			"expiry_year"        => 2013,
			"masked_number"      => "400551******0004"
			)
			)
			)
			);
	}

	function sampleAuthError()
	{
		return '{"error_code":"api_authentication_invalid_key","http_status_code":401,"error_msg":"Sorry, authentication failed. Invalid api key"}';
	}

	function sampleParamError()
	{
		return '{"error_code":"param_required","http_status_code":400,"error_msg":"cannot be blank","error_param":"card[gateway]"}';
	}

}

?>
