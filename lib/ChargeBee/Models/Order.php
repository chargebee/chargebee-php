<?php

class ChargeBee_Order extends ChargeBee_Model
{

  protected $allowed = array('id', 'invoiceId', 'status', 'referenceId', 'fulfillmentStatus', 'note', 'trackingId',
'batchId', 'createdBy', 'createdAt', 'statusUpdateAt');



  # OPERATIONS
  #-----------

  public static function create($params, $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, ChargeBee_Util::encodeURIPath("orders"), $params, $env);
  }

  public static function update($id, $params = array(), $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, ChargeBee_Util::encodeURIPath("orders",$id), $params, $env);
  }

  public static function retrieve($id, $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::GET, ChargeBee_Util::encodeURIPath("orders",$id), array(), $env);
  }

  public static function all($params = array(), $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::GET, ChargeBee_Util::encodeURIPath("orders"), $params, $env);
  }

  public static function ordersForInvoice($id, $params = array(), $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::GET, ChargeBee_Util::encodeURIPath("invoices",$id,"orders"), $params, $env);
  }

 }

?>