<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;
use ChargeBee\ChargeBee\Request;
use ChargeBee\ChargeBee\Util;

class UsageFile extends Model
{

  protected $allowed = [
    'id',
    'name',
    'mimeType',
    'errorCode',
    'errorReason',
    'status',
    'totalRecordsCount',
    'processedRecordsCount',
    'failedRecordsCount',
    'fileSizeInBytes',
    'processingStartedAt',
    'processingCompletedAt',
    'uploadedBy',
    'uploadedAt',
    'uploadDetails',
  ];



  # OPERATIONS
  #-----------

  public static function upload($params, $env = null, $headers = array())
  {
    $jsonKeys = array(
    );
    return Request::send(Request::POST, Util::encodeURIPath("usage_files","upload"), $params, $env, $headers, "file-ingest", false, $jsonKeys);
  }

  public static function status($id, $env = null, $headers = array())
  {
    $jsonKeys = array(
    );
    return Request::send(Request::GET, Util::encodeURIPath("usage_files",$id,"status"), array(), $env, $headers, "file-ingest", false, $jsonKeys);
  }

 }

?>