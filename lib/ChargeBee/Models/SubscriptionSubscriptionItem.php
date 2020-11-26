<?php

class ChargeBee_SubscriptionSubscriptionItem extends ChargeBee_Model
{
  protected $allowed = array('item_price_id', 'item_type', 'quantity', 'unit_price', 'amount', 'free_quantity', 'trial_end', 'billing_cycles', 'service_period_days', 'charge_on_event', 'charge_once', 'charge_on_option');

}

?>