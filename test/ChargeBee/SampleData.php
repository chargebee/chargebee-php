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

  function webhookData()
  {
    return '{ "content": { "card": { "card_type": "visa", "customer_id": "8avPlNabxST86", "expiry_month": 10, "expiry_year": 2012, "gateway": "chargebee", "iin": "411111", "last4": "1111", "masked_number": "411111******1111", "object": "credit_card", "status": "valid" }, "customer": { "card_status": "valid", "created_at": 1339951248, "email": "rr@chargebee.com", "id": "8avPlNabxST86", "object": "customer" }, "invoice": { "amount": 900, "end_date": 1339951248, "id": "3", "line_items": [ { "amount": 900, "date_from": 1339951248, "date_to": 1342543248, "description": "Plan (1 x No Trial) Charges for term (17-Jun-2012 - 17-Jul-2012)", "object": "line_item", "quantity": 1, "unit_amount": 900 } ], "object": "invoice", "paid_on": 1339951249, "recurring": true, "start_date": 1339951248, "status": "paid", "sub_total": 900, "subscription_id": "8avPlNabxST86" }, "subscription": { "activated_at": 1339951248, "created_at": 1339951248, "current_term_end": 1342543248, "current_term_start": 1339951248, "due_invoices_count": 0, "id": "8avPlNabxST86", "object": "subscription", "plan_id": "no_trial", "plan_quantity": 1, "status": "active" }, "transaction": { "amount": 900, "date": 1339951249, "gateway": "chargebee", "id": "txn_HoR7OrcNacEsxKR", "id_at_gateway": "cb_HoR7OrcNacEsxMS", "invoice_id": "3", "masked_card_number": "411111******1111", "object": "transaction", "status": "success", "subscription_id": "8avPlNabxST86", "type": "payment" } }, "event_type": "payment_succeeded", "id": "ev_HoR7OrcNacEsxgT", "object": "event", "occurred_at": 1339951249, "webhook_status": "scheduled" }';
  }
}

?>
