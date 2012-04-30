<?php

class ChargeBee_Result
{
	
	private $_response;
	
	private $_responseObj;
	
	function __construct($_response)
	{
		$this->_response = $_response;
		$this->_responseObj = array();
	}
	
	function subscription()
	{
		return $this->_get('subscription', 'ChargeBee_Subscription', array('addons' => 'ChargeBee_SubscriptionAddon'));
	}

	function customer()
	{
		return $this->_get('customer', 'ChargeBee_Customer');
	}

	function card()
	{
		return $this->_get('card', 'ChargeBee_Card');
	}

	function invoice()
	{
		return $this->_get('invoice', 'ChargeBee_Invoice', array('line_items' => 'ChargeBee_InvoiceLineItem', 
		'discounts' => 'ChargeBee_InvoiceDiscount'));
	}

	function transaction() 
	{
		return $this->_get('transaction', 'ChargeBee_Transaction');
	}

	function event()
	{
		return $this->_get('event', 'ChargeBee_Event');
	}

	function hostedPage()
	{
		return $this->_get('hosted_page', 'ChargeBee_HostedPage');
	}

	private function _get($type, $class, $subTypes = array())
	{
		if(!array_key_exists($type, $this->_response))
		{
			return null;
		}
		if(!array_key_exists($type, $this->_responseObj))
		{
			$this->_responseObj[$type] = new $class($this->_response[$type], $subTypes);
		}
		return $this->_responseObj[$type];
	}

}

?>
