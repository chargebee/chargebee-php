<?php

class ChargeBee_InvoiceLinkedOrder extends ChargeBee_Model
{
  protected $allowed = array('id', 'invoice_id', 'status', 'reference_id', 'fulfillment_status', 'note', 'tracking_id', 'batch_id', 'created_by', 'created_at', 'status_update_at');

}

?>