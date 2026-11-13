<?php

namespace Chargebee\Responses\GatewayRequestLogResponse;
use Chargebee\Resources\GatewayRequestLog\GatewayRequestLog;

use Chargebee\ValueObjects\ResponseBase;

class RetrieveGatewayRequestLogResponse extends ResponseBase { 
    /**
    *
    * @var ?GatewayRequestLog $gateway_request_log
    */
    public ?GatewayRequestLog $gateway_request_log;
    

    private function __construct(
        ?GatewayRequestLog $gateway_request_log,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->gateway_request_log = $gateway_request_log;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['gateway_request_log']) ? GatewayRequestLog::from($resourceAttributes['gateway_request_log']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->gateway_request_log instanceof GatewayRequestLog){
            $data['gateway_request_log'] = $this->gateway_request_log->toArray();
        } 

        return $data;
    }
}
?>