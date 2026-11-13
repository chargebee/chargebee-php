<?php

namespace Chargebee\Resources\GatewayRequestLog;

class GatewayRequestLog  { 
    /**
    *
    * @var ?string $log_id
    */
    public ?string $log_id;
    
    /**
    *
    * @var ?string $url
    */
    public ?string $url;
    
    /**
    *
    * @var ?string $status_code
    */
    public ?string $status_code;
    
    /**
    *
    * @var ?string $method
    */
    public ?string $method;
    
    /**
    *
    * @var ?string $request_body
    */
    public ?string $request_body;
    
    /**
    *
    * @var ?string $response_body
    */
    public ?string $response_body;
    
    /**
    *
    * @var ?string $request_headers
    */
    public ?string $request_headers;
    
    /**
    *
    * @var ?string $response_headers
    */
    public ?string $response_headers;
    
    /**
    *
    * @var ?string $gateway
    */
    public ?string $gateway;
    
    /**
    *
    * @var ?string $customer_handle
    */
    public ?string $customer_handle;
    
    /**
    *
    * @var ?string $invoice_handle
    */
    public ?string $invoice_handle;
    
    /**
    *
    * @var ?string $transaction_handle
    */
    public ?string $transaction_handle;
    
    /**
    *
    * @var ?string $payment_method_handle
    */
    public ?string $payment_method_handle;
    
    /**
    *
    * @var ?string $gateway_credential_handle
    */
    public ?string $gateway_credential_handle;
    
    /**
    *
    * @var ?string $payment_attempt_handle
    */
    public ?string $payment_attempt_handle;
    
    /**
    *
    * @var ?string $payment_intent_handle
    */
    public ?string $payment_intent_handle;
    
    /**
    *
    * @var ?string $payment_method_name
    */
    public ?string $payment_method_name;
    
    /**
    *
    * @var ?string $operation_name
    */
    public ?string $operation_name;
    
    /**
    *
    * @var ?string $operation_type
    */
    public ?string $operation_type;
    
    /**
    *
    * @var ?string $action_type
    */
    public ?string $action_type;
    
    /**
    *
    * @var ?string $source
    */
    public ?string $source;
    
    /**
    *
    * @var ?string $trace_id_hash
    */
    public ?string $trace_id_hash;
    
    /**
    *
    * @var ?int $invocation_time
    */
    public ?int $invocation_time;
    
    /**
    *
    * @var ?int $response_received_at
    */
    public ?int $response_received_at;
    
    /**
    *
    * @var ?int $response_time
    */
    public ?int $response_time;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "log_id" , "url" , "status_code" , "method" , "request_body" , "response_body" , "request_headers" , "response_headers" , "gateway" , "customer_handle" , "invoice_handle" , "transaction_handle" , "payment_method_handle" , "gateway_credential_handle" , "payment_attempt_handle" , "payment_intent_handle" , "payment_method_name" , "operation_name" , "operation_type" , "action_type" , "source" , "trace_id_hash" , "invocation_time" , "response_received_at" , "response_time"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $log_id,
        ?string $url,
        ?string $status_code,
        ?string $method,
        ?string $request_body,
        ?string $response_body,
        ?string $request_headers,
        ?string $response_headers,
        ?string $gateway,
        ?string $customer_handle,
        ?string $invoice_handle,
        ?string $transaction_handle,
        ?string $payment_method_handle,
        ?string $gateway_credential_handle,
        ?string $payment_attempt_handle,
        ?string $payment_intent_handle,
        ?string $payment_method_name,
        ?string $operation_name,
        ?string $operation_type,
        ?string $action_type,
        ?string $source,
        ?string $trace_id_hash,
        ?int $invocation_time,
        ?int $response_received_at,
        ?int $response_time,
    )
    { 
        $this->log_id = $log_id;
        $this->url = $url;
        $this->status_code = $status_code;
        $this->method = $method;
        $this->request_body = $request_body;
        $this->response_body = $response_body;
        $this->request_headers = $request_headers;
        $this->response_headers = $response_headers;
        $this->gateway = $gateway;
        $this->customer_handle = $customer_handle;
        $this->invoice_handle = $invoice_handle;
        $this->transaction_handle = $transaction_handle;
        $this->payment_method_handle = $payment_method_handle;
        $this->gateway_credential_handle = $gateway_credential_handle;
        $this->payment_attempt_handle = $payment_attempt_handle;
        $this->payment_intent_handle = $payment_intent_handle;
        $this->payment_method_name = $payment_method_name;
        $this->operation_name = $operation_name;
        $this->operation_type = $operation_type;
        $this->action_type = $action_type;
        $this->source = $source;
        $this->trace_id_hash = $trace_id_hash;
        $this->invocation_time = $invocation_time;
        $this->response_received_at = $response_received_at;
        $this->response_time = $response_time;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['log_id'] ?? null,
        $resourceAttributes['url'] ?? null,
        $resourceAttributes['status_code'] ?? null,
        $resourceAttributes['method'] ?? null,
        $resourceAttributes['request_body'] ?? null,
        $resourceAttributes['response_body'] ?? null,
        $resourceAttributes['request_headers'] ?? null,
        $resourceAttributes['response_headers'] ?? null,
        $resourceAttributes['gateway'] ?? null,
        $resourceAttributes['customer_handle'] ?? null,
        $resourceAttributes['invoice_handle'] ?? null,
        $resourceAttributes['transaction_handle'] ?? null,
        $resourceAttributes['payment_method_handle'] ?? null,
        $resourceAttributes['gateway_credential_handle'] ?? null,
        $resourceAttributes['payment_attempt_handle'] ?? null,
        $resourceAttributes['payment_intent_handle'] ?? null,
        $resourceAttributes['payment_method_name'] ?? null,
        $resourceAttributes['operation_name'] ?? null,
        $resourceAttributes['operation_type'] ?? null,
        $resourceAttributes['action_type'] ?? null,
        $resourceAttributes['source'] ?? null,
        $resourceAttributes['trace_id_hash'] ?? null,
        $resourceAttributes['invocation_time'] ?? null,
        $resourceAttributes['response_received_at'] ?? null,
        $resourceAttributes['response_time'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['log_id' => $this->log_id,
        'url' => $this->url,
        'status_code' => $this->status_code,
        'method' => $this->method,
        'request_body' => $this->request_body,
        'response_body' => $this->response_body,
        'request_headers' => $this->request_headers,
        'response_headers' => $this->response_headers,
        'gateway' => $this->gateway,
        'customer_handle' => $this->customer_handle,
        'invoice_handle' => $this->invoice_handle,
        'transaction_handle' => $this->transaction_handle,
        'payment_method_handle' => $this->payment_method_handle,
        'gateway_credential_handle' => $this->gateway_credential_handle,
        'payment_attempt_handle' => $this->payment_attempt_handle,
        'payment_intent_handle' => $this->payment_intent_handle,
        'payment_method_name' => $this->payment_method_name,
        'operation_name' => $this->operation_name,
        'operation_type' => $this->operation_type,
        'action_type' => $this->action_type,
        'source' => $this->source,
        'trace_id_hash' => $this->trace_id_hash,
        'invocation_time' => $this->invocation_time,
        'response_received_at' => $this->response_received_at,
        'response_time' => $this->response_time,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>