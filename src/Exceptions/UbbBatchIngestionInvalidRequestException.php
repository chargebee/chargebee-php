<?php

namespace Chargebee\Exceptions;

use Chargebee\Exceptions\APIError;

class UbbBatchIngestionInvalidRequestException extends APIError
{
     private $batchId;
     private $failedEvents;
    
    public function __construct($httpStatusCode, $jsonObject, $responseHeaders){
        parent::__construct($httpStatusCode, $jsonObject, $responseHeaders);
        $this->batchId = $jsonObject['batch_id'] ?? null; 
        $this->failedEvents = $jsonObject['failed_events'] ?? null; 
    }
    
    public function getBatchId()
    {
        return $this->batchId;
    }
    public function getFailedEvents()
    {
        return $this->failedEvents;
    }
}
