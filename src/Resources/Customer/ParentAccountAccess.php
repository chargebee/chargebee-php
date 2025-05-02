<?php

namespace Chargebee\Resources\Customer;

class ParentAccountAccess  { 
    /**
    *
    * @var ?string $portal_edit_child_subscriptions
    */
    public ?string $portal_edit_child_subscriptions;
    
    /**
    *
    * @var ?string $portal_download_child_invoices
    */
    public ?string $portal_download_child_invoices;
    
    /**
    *
    * @var ?bool $send_subscription_emails
    */
    public ?bool $send_subscription_emails;
    
    /**
    *
    * @var ?bool $send_invoice_emails
    */
    public ?bool $send_invoice_emails;
    
    /**
    *
    * @var ?bool $send_payment_emails
    */
    public ?bool $send_payment_emails;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "portal_edit_child_subscriptions" , "portal_download_child_invoices" , "send_subscription_emails" , "send_invoice_emails" , "send_payment_emails"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $portal_edit_child_subscriptions,
        ?string $portal_download_child_invoices,
        ?bool $send_subscription_emails,
        ?bool $send_invoice_emails,
        ?bool $send_payment_emails,
    )
    { 
        $this->portal_edit_child_subscriptions = $portal_edit_child_subscriptions;
        $this->portal_download_child_invoices = $portal_download_child_invoices;
        $this->send_subscription_emails = $send_subscription_emails;
        $this->send_invoice_emails = $send_invoice_emails;
        $this->send_payment_emails = $send_payment_emails;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['portal_edit_child_subscriptions'] ?? null,
        $resourceAttributes['portal_download_child_invoices'] ?? null,
        $resourceAttributes['send_subscription_emails'] ?? null,
        $resourceAttributes['send_invoice_emails'] ?? null,
        $resourceAttributes['send_payment_emails'] ?? null,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['portal_edit_child_subscriptions' => $this->portal_edit_child_subscriptions,
        'portal_download_child_invoices' => $this->portal_download_child_invoices,
        'send_subscription_emails' => $this->send_subscription_emails,
        'send_invoice_emails' => $this->send_invoice_emails,
        'send_payment_emails' => $this->send_payment_emails,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>