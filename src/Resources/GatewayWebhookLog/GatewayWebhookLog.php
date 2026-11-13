<?php

namespace Chargebee\Resources\GatewayWebhookLog;

class GatewayWebhookLog  { 
    /**
    *
    * @var ?string $webhook_id
    */
    public ?string $webhook_id;
    
    /**
    *
    * @var ?string $url
    */
    public ?string $url;
    
    /**
    *
    * @var ?string $method
    */
    public ?string $method;
    
    /**
    *
    * @var ?string $status_code
    */
    public ?string $status_code;
    
    /**
    *
    * @var ?string $gateway
    */
    public ?string $gateway;
    
    /**
    *
    * @var ?string $id_at_gateway
    */
    public ?string $id_at_gateway;
    
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
    * @var ?int $received_at
    */
    public ?int $received_at;
    
    /**
    *
    * @var ?int $response_time
    */
    public ?int $response_time;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "webhook_id" , "url" , "method" , "status_code" , "gateway" , "id_at_gateway" , "customer_handle" , "invoice_handle" , "transaction_handle" , "payment_method_handle" , "gateway_credential_handle" , "payment_attempt_handle" , "payment_intent_handle" , "payment_method_name" , "request_body" , "response_body" , "request_headers" , "response_headers" , "received_at" , "response_time"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $webhook_id,
        ?string $url,
        ?string $method,
        ?string $status_code,
        ?string $gateway,
        ?string $id_at_gateway,
        ?string $customer_handle,
        ?string $invoice_handle,
        ?string $transaction_handle,
        ?string $payment_method_handle,
        ?string $gateway_credential_handle,
        ?string $payment_attempt_handle,
        ?string $payment_intent_handle,
        ?string $payment_method_name,
        ?string $request_body,
        ?string $response_body,
        ?string $request_headers,
        ?string $response_headers,
        ?int $received_at,
        ?int $response_time,
    )
    { 
        $this->webhook_id = $webhook_id;
        $this->url = $url;
        $this->method = $method;
        $this->status_code = $status_code;
        $this->gateway = $gateway;
        $this->id_at_gateway = $id_at_gateway;
        $this->customer_handle = $customer_handle;
        $this->invoice_handle = $invoice_handle;
        $this->transaction_handle = $transaction_handle;
        $this->payment_method_handle = $payment_method_handle;
        $this->gateway_credential_handle = $gateway_credential_handle;
        $this->payment_attempt_handle = $payment_attempt_handle;
        $this->payment_intent_handle = $payment_intent_handle;
        $this->payment_method_name = $payment_method_name;
        $this->request_body = $request_body;
        $this->response_body = $response_body;
        $this->request_headers = $request_headers;
        $this->response_headers = $response_headers;
        $this->received_at = $received_at;
        $this->response_time = $response_time;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['webhook_id'] ?? null,
        $resourceAttributes['url'] ?? null,
        $resourceAttributes['method'] ?? null,
        $resourceAttributes['status_code'] ?? null,
        $resourceAttributes['gateway'] ?? null,
        $resourceAttributes['id_at_gateway'] ?? null,
        $resourceAttributes['customer_handle'] ?? null,
        $resourceAttributes['invoice_handle'] ?? null,
        $resourceAttributes['transaction_handle'] ?? null,
        $resourceAttributes['payment_method_handle'] ?? null,
        $resourceAttributes['gateway_credential_handle'] ?? null,
        $resourceAttributes['payment_attempt_handle'] ?? null,
        $resourceAttributes['payment_intent_handle'] ?? null,
        $resourceAttributes['payment_method_name'] ?? null,
        $resourceAttributes['request_body'] ?? null,
        $resourceAttributes['response_body'] ?? null,
        $resourceAttributes['request_headers'] ?? null,
        $resourceAttributes['response_headers'] ?? null,
        $resourceAttributes['received_at'] ?? null,
        $resourceAttributes['response_time'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['webhook_id' => $this->webhook_id,
        'url' => $this->url,
        'method' => $this->method,
        'status_code' => $this->status_code,
        'gateway' => $this->gateway,
        'id_at_gateway' => $this->id_at_gateway,
        'customer_handle' => $this->customer_handle,
        'invoice_handle' => $this->invoice_handle,
        'transaction_handle' => $this->transaction_handle,
        'payment_method_handle' => $this->payment_method_handle,
        'gateway_credential_handle' => $this->gateway_credential_handle,
        'payment_attempt_handle' => $this->payment_attempt_handle,
        'payment_intent_handle' => $this->payment_intent_handle,
        'payment_method_name' => $this->payment_method_name,
        'request_body' => $this->request_body,
        'response_body' => $this->response_body,
        'request_headers' => $this->request_headers,
        'response_headers' => $this->response_headers,
        'received_at' => $this->received_at,
        'response_time' => $this->response_time,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>