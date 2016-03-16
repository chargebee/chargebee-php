<?php

namespace Chargebee\Chargebee\Models;

use Chargebee\Chargebee\Request;
use Chargebee\Chargebee\Util;

class Plan extends Model
{

  protected $allowed = array('id', 'name', 'invoiceName', 'description', 'price', 'period', 'periodUnit', 'trialPeriod',
'trialPeriodUnit', 'chargeModel', 'freeQuantity', 'setupCost', 'downgradePenalty', 'status','archivedAt', 'billingCycles', 'redirectUrl', 'enabledInHostedPages', 'enabledInPortal', 'invoiceNotes','taxable');



  # OPERATIONS
  #-----------

  public static function create($params, $env = null, $headers = array())
  {
    return Request::send(Request::POST, Util::encodeURIPath("plans"), $params, $env, $headers);
  }

  public static function update($id, $params = array(), $env = null, $headers = array())
  {
    return Request::send(Request::POST, Util::encodeURIPath("plans",$id), $params, $env, $headers);
  }

  public static function all($params = array(), $env = null, $headers = array())
  {
    return Request::send(Request::GET, Util::encodeURIPath("plans"), $params, $env, $headers);
  }

  public static function retrieve($id, $env = null, $headers = array())
  {
    return Request::send(Request::GET, Util::encodeURIPath("plans",$id), array(), $env, $headers);
  }

  public static function delete($id, $env = null, $headers = array())
  {
    return Request::send(Request::POST, Util::encodeURIPath("plans",$id,"delete"), array(), $env, $headers);
  }

 }
