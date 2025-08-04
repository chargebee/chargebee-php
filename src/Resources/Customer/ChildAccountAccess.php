<?php

namespace Chargebee\Resources\Customer;

class ChildAccountAccess  { 
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
    *
    * @var ?\Chargebee\Resources\Customer\ClassBasedEnums\ChildAccountAccessPortalEditSubscriptions $portal_edit_subscriptions
    */
    public ?\Chargebee\Resources\Customer\ClassBasedEnums\ChildAccountAccessPortalEditSubscriptions $portal_edit_subscriptions;
    
    /**
    *
    * @var ?\Chargebee\Resources\Customer\ClassBasedEnums\ChildAccountAccessPortalDownloadInvoices $portal_download_invoices
    */
    public ?\Chargebee\Resources\Customer\ClassBasedEnums\ChildAccountAccessPortalDownloadInvoices $portal_download_invoices;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "send_subscription_emails" , "send_invoice_emails" , "send_payment_emails"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?bool $send_subscription_emails,
        ?bool $send_invoice_emails,
        ?bool $send_payment_emails,
        ?\Chargebee\Resources\Customer\ClassBasedEnums\ChildAccountAccessPortalEditSubscriptions $portal_edit_subscriptions,
        ?\Chargebee\Resources\Customer\ClassBasedEnums\ChildAccountAccessPortalDownloadInvoices $portal_download_invoices,
    )
    { 
        $this->send_subscription_emails = $send_subscription_emails;
        $this->send_invoice_emails = $send_invoice_emails;
        $this->send_payment_emails = $send_payment_emails;  
        $this->portal_edit_subscriptions = $portal_edit_subscriptions;
        $this->portal_download_invoices = $portal_download_invoices;
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['send_subscription_emails'] ?? null,
        $resourceAttributes['send_invoice_emails'] ?? null,
        $resourceAttributes['send_payment_emails'] ?? null,
        
         
        isset($resourceAttributes['portal_edit_subscriptions']) ? \Chargebee\Resources\Customer\ClassBasedEnums\ChildAccountAccessPortalEditSubscriptions::tryFromValue($resourceAttributes['portal_edit_subscriptions']) : null,
        
        isset($resourceAttributes['portal_download_invoices']) ? \Chargebee\Resources\Customer\ClassBasedEnums\ChildAccountAccessPortalDownloadInvoices::tryFromValue($resourceAttributes['portal_download_invoices']) : null,
        
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['send_subscription_emails' => $this->send_subscription_emails,
        'send_invoice_emails' => $this->send_invoice_emails,
        'send_payment_emails' => $this->send_payment_emails,
        
        'portal_edit_subscriptions' => $this->portal_edit_subscriptions?->value,
        
        'portal_download_invoices' => $this->portal_download_invoices?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>