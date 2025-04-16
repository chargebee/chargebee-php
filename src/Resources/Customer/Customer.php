<?php

namespace Chargebee\Resources\Customer;

use Chargebee\ValueObjects\SupportsCustomFields;
class Customer  extends SupportsCustomFields  { 
    /**
    *
    * @var string $id
    */
    public string $id;
    
    /**
    *
    * @var ?string $first_name
    */
    public ?string $first_name;
    
    /**
    *
    * @var ?string $last_name
    */
    public ?string $last_name;
    
    /**
    *
    * @var ?string $email
    */
    public ?string $email;
    
    /**
    *
    * @var ?string $phone
    */
    public ?string $phone;
    
    /**
    *
    * @var ?string $company
    */
    public ?string $company;
    
    /**
    *
    * @var ?string $vat_number
    */
    public ?string $vat_number;
    
    /**
    *
    * @var int $net_term_days
    */
    public int $net_term_days;
    
    /**
    *
    * @var ?int $vat_number_validated_time
    */
    public ?int $vat_number_validated_time;
    
    /**
    *
    * @var bool $allow_direct_debit
    */
    public bool $allow_direct_debit;
    
    /**
    *
    * @var ?bool $is_location_valid
    */
    public ?bool $is_location_valid;
    
    /**
    *
    * @var int $created_at
    */
    public int $created_at;
    
    /**
    *
    * @var ?string $created_from_ip
    */
    public ?string $created_from_ip;
    
    /**
    *
    * @var mixed $exemption_details
    */
    public mixed $exemption_details;
    
    /**
    *
    * @var ?string $exempt_number
    */
    public ?string $exempt_number;
    
    /**
    *
    * @var ?int $resource_version
    */
    public ?int $resource_version;
    
    /**
    *
    * @var ?int $updated_at
    */
    public ?int $updated_at;
    
    /**
    *
    * @var ?string $locale
    */
    public ?string $locale;
    
    /**
    *
    * @var ?int $billing_date
    */
    public ?int $billing_date;
    
    /**
    *
    * @var ?int $billing_month
    */
    public ?int $billing_month;
    
    /**
    *
    * @var ?bool $auto_close_invoices
    */
    public ?bool $auto_close_invoices;
    
    /**
    *
    * @var ?string $active_id
    */
    public ?string $active_id;
    
    /**
    *
    * @var ?string $primary_payment_source_id
    */
    public ?string $primary_payment_source_id;
    
    /**
    *
    * @var ?string $backup_payment_source_id
    */
    public ?string $backup_payment_source_id;
    
    /**
    *
    * @var ?BillingAddress $billing_address
    */
    public ?BillingAddress $billing_address;
    
    /**
    *
    * @var ?array<ReferralUrl> $referral_urls
    */
    public ?array $referral_urls;
    
    /**
    *
    * @var ?array<Contact> $contacts
    */
    public ?array $contacts;
    
    /**
    *
    * @var ?PaymentMethod $payment_method
    */
    public ?PaymentMethod $payment_method;
    
    /**
    *
    * @var ?string $invoice_notes
    */
    public ?string $invoice_notes;
    
    /**
    *
    * @var ?string $business_entity_id
    */
    public ?string $business_entity_id;
    
    /**
    *
    * @var ?string $preferred_currency_code
    */
    public ?string $preferred_currency_code;
    
    /**
    *
    * @var int $promotional_credits
    */
    public int $promotional_credits;
    
    /**
    *
    * @var int $unbilled_charges
    */
    public int $unbilled_charges;
    
    /**
    *
    * @var int $refundable_credits
    */
    public int $refundable_credits;
    
    /**
    *
    * @var int $excess_payments
    */
    public int $excess_payments;
    
    /**
    *
    * @var ?array<Balance> $balances
    */
    public ?array $balances;
    
    /**
    *
    * @var ?array<EntityIdentifier> $entity_identifiers
    */
    public ?array $entity_identifiers;
    
    /**
    *
    * @var ?array<TaxProvidersField> $tax_providers_fields
    */
    public ?array $tax_providers_fields;
    
    /**
    *
    * @var ?bool $is_einvoice_enabled
    */
    public ?bool $is_einvoice_enabled;
    
    /**
    *
    * @var mixed $meta_data
    */
    public mixed $meta_data;
    
    /**
    *
    * @var bool $deleted
    */
    public bool $deleted;
    
    /**
    *
    * @var ?bool $registered_for_gst
    */
    public ?bool $registered_for_gst;
    
    /**
    *
    * @var ?bool $consolidated_invoicing
    */
    public ?bool $consolidated_invoicing;
    
    /**
    *
    * @var ?bool $business_customer_without_vat_number
    */
    public ?bool $business_customer_without_vat_number;
    
    /**
    *
    * @var ?string $client_profile_id
    */
    public ?string $client_profile_id;
    
    /**
    *
    * @var ?Relationship $relationship
    */
    public ?Relationship $relationship;
    
    /**
    *
    * @var ?bool $use_default_hierarchy_settings
    */
    public ?bool $use_default_hierarchy_settings;
    
    /**
    *
    * @var ?ParentAccountAccess $parent_account_access
    */
    public ?ParentAccountAccess $parent_account_access;
    
    /**
    *
    * @var ?ChildAccountAccess $child_account_access
    */
    public ?ChildAccountAccess $child_account_access;
    
    /**
    *
    * @var ?string $vat_number_prefix
    */
    public ?string $vat_number_prefix;
    
    /**
    *
    * @var ?string $entity_identifier_scheme
    */
    public ?string $entity_identifier_scheme;
    
    /**
    *
    * @var ?string $entity_identifier_standard
    */
    public ?string $entity_identifier_standard;
    
    /**
    *
    * @var \Chargebee\Enums\AutoCollection $auto_collection
    */
    public \Chargebee\Enums\AutoCollection $auto_collection;
    
    /**
    *
    * @var ?\Chargebee\Enums\OfflinePaymentMethod $offline_payment_method
    */
    public ?\Chargebee\Enums\OfflinePaymentMethod $offline_payment_method;
    
    /**
    *
    * @var ?\Chargebee\Enums\Taxability $taxability
    */
    public ?\Chargebee\Enums\Taxability $taxability;
    
    /**
    *
    * @var ?\Chargebee\Enums\EntityCode $entity_code
    */
    public ?\Chargebee\Enums\EntityCode $entity_code;
    
    /**
    *
    * @var ?\Chargebee\Enums\BillingDateMode $billing_date_mode
    */
    public ?\Chargebee\Enums\BillingDateMode $billing_date_mode;
    
    /**
    *
    * @var ?\Chargebee\Enums\BillingDayOfWeekMode $billing_day_of_week_mode
    */
    public ?\Chargebee\Enums\BillingDayOfWeekMode $billing_day_of_week_mode;
    
    /**
    *
    * @var ?\Chargebee\Enums\Channel $channel
    */
    public ?\Chargebee\Enums\Channel $channel;
    
    /**
    *
    * @var ?\Chargebee\Enums\EinvoicingMethod $einvoicing_method
    */
    public ?\Chargebee\Enums\EinvoicingMethod $einvoicing_method;
    
    /**
    *
    * @var ?\Chargebee\Enums\CustomerType $customer_type
    */
    public ?\Chargebee\Enums\CustomerType $customer_type;
    
    /**
    *
    * @var ?\Chargebee\Resources\Customer\Enums\VatNumberStatus $vat_number_status
    */
    public ?\Chargebee\Resources\Customer\Enums\VatNumberStatus $vat_number_status;
    
    /**
    *
    * @var ?\Chargebee\Resources\Customer\Enums\BillingDayOfWeek $billing_day_of_week
    */
    public ?\Chargebee\Resources\Customer\Enums\BillingDayOfWeek $billing_day_of_week;
    
    /**
    *
    * @var ?\Chargebee\Resources\Customer\Enums\PiiCleared $pii_cleared
    */
    public ?\Chargebee\Resources\Customer\Enums\PiiCleared $pii_cleared;
    
    /**
    *
    * @var ?\Chargebee\Resources\Customer\Enums\CardStatus $card_status
    */
    public ?\Chargebee\Resources\Customer\Enums\CardStatus $card_status;
    
    /**
    *
    * @var ?\Chargebee\Resources\Customer\Enums\FraudFlag $fraud_flag
    */
    public ?\Chargebee\Resources\Customer\Enums\FraudFlag $fraud_flag;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "first_name" , "last_name" , "email" , "phone" , "company" , "vat_number" , "net_term_days" , "vat_number_validated_time" , "allow_direct_debit" , "is_location_valid" , "created_at" , "created_from_ip" , "exemption_details" , "exempt_number" , "resource_version" , "updated_at" , "locale" , "billing_date" , "billing_month" , "auto_close_invoices" , "active_id" , "primary_payment_source_id" , "backup_payment_source_id" , "billing_address" , "referral_urls" , "contacts" , "payment_method" , "invoice_notes" , "business_entity_id" , "preferred_currency_code" , "promotional_credits" , "unbilled_charges" , "refundable_credits" , "excess_payments" , "balances" , "entity_identifiers" , "tax_providers_fields" , "is_einvoice_enabled" , "meta_data" , "deleted" , "registered_for_gst" , "consolidated_invoicing" , "business_customer_without_vat_number" , "client_profile_id" , "relationship" , "use_default_hierarchy_settings" , "parent_account_access" , "child_account_access" , "vat_number_prefix" , "entity_identifier_scheme" , "entity_identifier_standard"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        string $id,
        ?string $first_name,
        ?string $last_name,
        ?string $email,
        ?string $phone,
        ?string $company,
        ?string $vat_number,
        int $net_term_days,
        ?int $vat_number_validated_time,
        bool $allow_direct_debit,
        ?bool $is_location_valid,
        int $created_at,
        ?string $created_from_ip,
        mixed $exemption_details,
        ?string $exempt_number,
        ?int $resource_version,
        ?int $updated_at,
        ?string $locale,
        ?int $billing_date,
        ?int $billing_month,
        ?bool $auto_close_invoices,
        ?string $active_id,
        ?string $primary_payment_source_id,
        ?string $backup_payment_source_id,
        ?BillingAddress $billing_address,
        ?array $referral_urls,
        ?array $contacts,
        ?PaymentMethod $payment_method,
        ?string $invoice_notes,
        ?string $business_entity_id,
        ?string $preferred_currency_code,
        int $promotional_credits,
        int $unbilled_charges,
        int $refundable_credits,
        int $excess_payments,
        ?array $balances,
        ?array $entity_identifiers,
        ?array $tax_providers_fields,
        ?bool $is_einvoice_enabled,
        mixed $meta_data,
        bool $deleted,
        ?bool $registered_for_gst,
        ?bool $consolidated_invoicing,
        ?bool $business_customer_without_vat_number,
        ?string $client_profile_id,
        ?Relationship $relationship,
        ?bool $use_default_hierarchy_settings,
        ?ParentAccountAccess $parent_account_access,
        ?ChildAccountAccess $child_account_access,
        ?string $vat_number_prefix,
        ?string $entity_identifier_scheme,
        ?string $entity_identifier_standard,
        \Chargebee\Enums\AutoCollection $auto_collection,
        ?\Chargebee\Enums\OfflinePaymentMethod $offline_payment_method,
        ?\Chargebee\Enums\Taxability $taxability,
        ?\Chargebee\Enums\EntityCode $entity_code,
        ?\Chargebee\Enums\BillingDateMode $billing_date_mode,
        ?\Chargebee\Enums\BillingDayOfWeekMode $billing_day_of_week_mode,
        ?\Chargebee\Enums\Channel $channel,
        ?\Chargebee\Enums\EinvoicingMethod $einvoicing_method,
        ?\Chargebee\Enums\CustomerType $customer_type,
        ?\Chargebee\Resources\Customer\Enums\VatNumberStatus $vat_number_status,
        ?\Chargebee\Resources\Customer\Enums\BillingDayOfWeek $billing_day_of_week,
        ?\Chargebee\Resources\Customer\Enums\PiiCleared $pii_cleared,
        ?\Chargebee\Resources\Customer\Enums\CardStatus $card_status,
        ?\Chargebee\Resources\Customer\Enums\FraudFlag $fraud_flag,
    )
    { 
        $this->id = $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->phone = $phone;
        $this->company = $company;
        $this->vat_number = $vat_number;
        $this->net_term_days = $net_term_days;
        $this->vat_number_validated_time = $vat_number_validated_time;
        $this->allow_direct_debit = $allow_direct_debit;
        $this->is_location_valid = $is_location_valid;
        $this->created_at = $created_at;
        $this->created_from_ip = $created_from_ip;
        $this->exemption_details = $exemption_details;
        $this->exempt_number = $exempt_number;
        $this->resource_version = $resource_version;
        $this->updated_at = $updated_at;
        $this->locale = $locale;
        $this->billing_date = $billing_date;
        $this->billing_month = $billing_month;
        $this->auto_close_invoices = $auto_close_invoices;
        $this->active_id = $active_id;
        $this->primary_payment_source_id = $primary_payment_source_id;
        $this->backup_payment_source_id = $backup_payment_source_id;
        $this->billing_address = $billing_address;
        $this->referral_urls = $referral_urls;
        $this->contacts = $contacts;
        $this->payment_method = $payment_method;
        $this->invoice_notes = $invoice_notes;
        $this->business_entity_id = $business_entity_id;
        $this->preferred_currency_code = $preferred_currency_code;
        $this->promotional_credits = $promotional_credits;
        $this->unbilled_charges = $unbilled_charges;
        $this->refundable_credits = $refundable_credits;
        $this->excess_payments = $excess_payments;
        $this->balances = $balances;
        $this->entity_identifiers = $entity_identifiers;
        $this->tax_providers_fields = $tax_providers_fields;
        $this->is_einvoice_enabled = $is_einvoice_enabled;
        $this->meta_data = $meta_data;
        $this->deleted = $deleted;
        $this->registered_for_gst = $registered_for_gst;
        $this->consolidated_invoicing = $consolidated_invoicing;
        $this->business_customer_without_vat_number = $business_customer_without_vat_number;
        $this->client_profile_id = $client_profile_id;
        $this->relationship = $relationship;
        $this->use_default_hierarchy_settings = $use_default_hierarchy_settings;
        $this->parent_account_access = $parent_account_access;
        $this->child_account_access = $child_account_access;
        $this->vat_number_prefix = $vat_number_prefix;
        $this->entity_identifier_scheme = $entity_identifier_scheme;
        $this->entity_identifier_standard = $entity_identifier_standard; 
        $this->auto_collection = $auto_collection;
        $this->offline_payment_method = $offline_payment_method;
        $this->taxability = $taxability;
        $this->entity_code = $entity_code;
        $this->billing_date_mode = $billing_date_mode;
        $this->billing_day_of_week_mode = $billing_day_of_week_mode;
        $this->channel = $channel;
        $this->einvoicing_method = $einvoicing_method;
        $this->customer_type = $customer_type; 
        $this->vat_number_status = $vat_number_status;
        $this->billing_day_of_week = $billing_day_of_week;
        $this->pii_cleared = $pii_cleared;
        $this->card_status = $card_status;
        $this->fraud_flag = $fraud_flag;
    }

    public static function from(array $resourceAttributes): self
    { 
        $referral_urls = array_map(fn (array $result): ReferralUrl =>  ReferralUrl::from(
            $result
        ), $resourceAttributes['referral_urls'] ?? []);
        
        $contacts = array_map(fn (array $result): Contact =>  Contact::from(
            $result
        ), $resourceAttributes['contacts'] ?? []);
        
        $balances = array_map(fn (array $result): Balance =>  Balance::from(
            $result
        ), $resourceAttributes['balances'] ?? []);
        
        $entity_identifiers = array_map(fn (array $result): EntityIdentifier =>  EntityIdentifier::from(
            $result
        ), $resourceAttributes['entity_identifiers'] ?? []);
        
        $tax_providers_fields = array_map(fn (array $result): TaxProvidersField =>  TaxProvidersField::from(
            $result
        ), $resourceAttributes['tax_providers_fields'] ?? []);
        
        $returnData = new self( $resourceAttributes['id'] ,
        $resourceAttributes['first_name'] ?? null,
        $resourceAttributes['last_name'] ?? null,
        $resourceAttributes['email'] ?? null,
        $resourceAttributes['phone'] ?? null,
        $resourceAttributes['company'] ?? null,
        $resourceAttributes['vat_number'] ?? null,
        $resourceAttributes['net_term_days'] ,
        $resourceAttributes['vat_number_validated_time'] ?? null,
        $resourceAttributes['allow_direct_debit'] ,
        $resourceAttributes['is_location_valid'] ?? null,
        $resourceAttributes['created_at'] ,
        $resourceAttributes['created_from_ip'] ?? null,
        $resourceAttributes['exemption_details'] ?? null,
        $resourceAttributes['exempt_number'] ?? null,
        $resourceAttributes['resource_version'] ?? null,
        $resourceAttributes['updated_at'] ?? null,
        $resourceAttributes['locale'] ?? null,
        $resourceAttributes['billing_date'] ?? null,
        $resourceAttributes['billing_month'] ?? null,
        $resourceAttributes['auto_close_invoices'] ?? null,
        $resourceAttributes['active_id'] ?? null,
        $resourceAttributes['primary_payment_source_id'] ?? null,
        $resourceAttributes['backup_payment_source_id'] ?? null,
        isset($resourceAttributes['billing_address']) ? BillingAddress::from($resourceAttributes['billing_address']) : null,
        $referral_urls,
        $contacts,
        isset($resourceAttributes['payment_method']) ? PaymentMethod::from($resourceAttributes['payment_method']) : null,
        $resourceAttributes['invoice_notes'] ?? null,
        $resourceAttributes['business_entity_id'] ?? null,
        $resourceAttributes['preferred_currency_code'] ?? null,
        $resourceAttributes['promotional_credits'] ,
        $resourceAttributes['unbilled_charges'] ,
        $resourceAttributes['refundable_credits'] ,
        $resourceAttributes['excess_payments'] ,
        $balances,
        $entity_identifiers,
        $tax_providers_fields,
        $resourceAttributes['is_einvoice_enabled'] ?? null,
        $resourceAttributes['meta_data'] ?? null,
        $resourceAttributes['deleted'] ,
        $resourceAttributes['registered_for_gst'] ?? null,
        $resourceAttributes['consolidated_invoicing'] ?? null,
        $resourceAttributes['business_customer_without_vat_number'] ?? null,
        $resourceAttributes['client_profile_id'] ?? null,
        isset($resourceAttributes['relationship']) ? Relationship::from($resourceAttributes['relationship']) : null,
        $resourceAttributes['use_default_hierarchy_settings'] ?? null,
        isset($resourceAttributes['parent_account_access']) ? ParentAccountAccess::from($resourceAttributes['parent_account_access']) : null,
        isset($resourceAttributes['child_account_access']) ? ChildAccountAccess::from($resourceAttributes['child_account_access']) : null,
        $resourceAttributes['vat_number_prefix'] ?? null,
        $resourceAttributes['entity_identifier_scheme'] ?? null,
        $resourceAttributes['entity_identifier_standard'] ?? null,
        
        
        isset($resourceAttributes['auto_collection']) ? \Chargebee\Enums\AutoCollection::tryFromValue($resourceAttributes['auto_collection']) : null,
        
        isset($resourceAttributes['offline_payment_method']) ? \Chargebee\Enums\OfflinePaymentMethod::tryFromValue($resourceAttributes['offline_payment_method']) : null,
        
        isset($resourceAttributes['taxability']) ? \Chargebee\Enums\Taxability::tryFromValue($resourceAttributes['taxability']) : null,
        
        isset($resourceAttributes['entity_code']) ? \Chargebee\Enums\EntityCode::tryFromValue($resourceAttributes['entity_code']) : null,
        
        isset($resourceAttributes['billing_date_mode']) ? \Chargebee\Enums\BillingDateMode::tryFromValue($resourceAttributes['billing_date_mode']) : null,
        
        isset($resourceAttributes['billing_day_of_week_mode']) ? \Chargebee\Enums\BillingDayOfWeekMode::tryFromValue($resourceAttributes['billing_day_of_week_mode']) : null,
        
        isset($resourceAttributes['channel']) ? \Chargebee\Enums\Channel::tryFromValue($resourceAttributes['channel']) : null,
        
        isset($resourceAttributes['einvoicing_method']) ? \Chargebee\Enums\EinvoicingMethod::tryFromValue($resourceAttributes['einvoicing_method']) : null,
        
        isset($resourceAttributes['customer_type']) ? \Chargebee\Enums\CustomerType::tryFromValue($resourceAttributes['customer_type']) : null,
         
        isset($resourceAttributes['vat_number_status']) ? \Chargebee\Resources\Customer\Enums\VatNumberStatus::tryFromValue($resourceAttributes['vat_number_status']) : null,
        
        isset($resourceAttributes['billing_day_of_week']) ? \Chargebee\Resources\Customer\Enums\BillingDayOfWeek::tryFromValue($resourceAttributes['billing_day_of_week']) : null,
        
        isset($resourceAttributes['pii_cleared']) ? \Chargebee\Resources\Customer\Enums\PiiCleared::tryFromValue($resourceAttributes['pii_cleared']) : null,
        
        isset($resourceAttributes['card_status']) ? \Chargebee\Resources\Customer\Enums\CardStatus::tryFromValue($resourceAttributes['card_status']) : null,
        
        isset($resourceAttributes['fraud_flag']) ? \Chargebee\Resources\Customer\Enums\FraudFlag::tryFromValue($resourceAttributes['fraud_flag']) : null,
        
        );
       foreach ($resourceAttributes as $key => $value) {
            if (!in_array($key, $returnData::$knownFields, true)) {
                $returnData->__set($key, $value);
            }
        } 
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['id' => $this->id,
        'first_name' => $this->first_name,
        'last_name' => $this->last_name,
        'email' => $this->email,
        'phone' => $this->phone,
        'company' => $this->company,
        'vat_number' => $this->vat_number,
        'net_term_days' => $this->net_term_days,
        'vat_number_validated_time' => $this->vat_number_validated_time,
        'allow_direct_debit' => $this->allow_direct_debit,
        'is_location_valid' => $this->is_location_valid,
        'created_at' => $this->created_at,
        'created_from_ip' => $this->created_from_ip,
        'exemption_details' => $this->exemption_details,
        'exempt_number' => $this->exempt_number,
        'resource_version' => $this->resource_version,
        'updated_at' => $this->updated_at,
        'locale' => $this->locale,
        'billing_date' => $this->billing_date,
        'billing_month' => $this->billing_month,
        'auto_close_invoices' => $this->auto_close_invoices,
        'active_id' => $this->active_id,
        'primary_payment_source_id' => $this->primary_payment_source_id,
        'backup_payment_source_id' => $this->backup_payment_source_id,
        
        
        
        
        'invoice_notes' => $this->invoice_notes,
        'business_entity_id' => $this->business_entity_id,
        'preferred_currency_code' => $this->preferred_currency_code,
        'promotional_credits' => $this->promotional_credits,
        'unbilled_charges' => $this->unbilled_charges,
        'refundable_credits' => $this->refundable_credits,
        'excess_payments' => $this->excess_payments,
        
        
        
        'is_einvoice_enabled' => $this->is_einvoice_enabled,
        'meta_data' => $this->meta_data,
        'deleted' => $this->deleted,
        'registered_for_gst' => $this->registered_for_gst,
        'consolidated_invoicing' => $this->consolidated_invoicing,
        'business_customer_without_vat_number' => $this->business_customer_without_vat_number,
        'client_profile_id' => $this->client_profile_id,
        
        'use_default_hierarchy_settings' => $this->use_default_hierarchy_settings,
        
        
        'vat_number_prefix' => $this->vat_number_prefix,
        'entity_identifier_scheme' => $this->entity_identifier_scheme,
        'entity_identifier_standard' => $this->entity_identifier_standard,
        
        'auto_collection' => $this->auto_collection?->value,
        
        'offline_payment_method' => $this->offline_payment_method?->value,
        
        'taxability' => $this->taxability?->value,
        
        'entity_code' => $this->entity_code?->value,
        
        'billing_date_mode' => $this->billing_date_mode?->value,
        
        'billing_day_of_week_mode' => $this->billing_day_of_week_mode?->value,
        
        'channel' => $this->channel?->value,
        
        'einvoicing_method' => $this->einvoicing_method?->value,
        
        'customer_type' => $this->customer_type?->value,
        
        'vat_number_status' => $this->vat_number_status?->value,
        
        'billing_day_of_week' => $this->billing_day_of_week?->value,
        
        'pii_cleared' => $this->pii_cleared?->value,
        
        'card_status' => $this->card_status?->value,
        
        'fraud_flag' => $this->fraud_flag?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        if($this->billing_address instanceof BillingAddress){
            $data['billing_address'] = $this->billing_address->toArray();
        }
        if($this->payment_method instanceof PaymentMethod){
            $data['payment_method'] = $this->payment_method->toArray();
        }
        if($this->relationship instanceof Relationship){
            $data['relationship'] = $this->relationship->toArray();
        }
        if($this->parent_account_access instanceof ParentAccountAccess){
            $data['parent_account_access'] = $this->parent_account_access->toArray();
        }
        if($this->child_account_access instanceof ChildAccountAccess){
            $data['child_account_access'] = $this->child_account_access->toArray();
        }
        
        if($this->referral_urls !== []){
            $data['referral_urls'] = array_map(
                fn (ReferralUrl $referral_urls): array => $referral_urls->toArray(),
                $this->referral_urls
            );
        }
        if($this->contacts !== []){
            $data['contacts'] = array_map(
                fn (Contact $contacts): array => $contacts->toArray(),
                $this->contacts
            );
        }
        if($this->balances !== []){
            $data['balances'] = array_map(
                fn (Balance $balances): array => $balances->toArray(),
                $this->balances
            );
        }
        if($this->entity_identifiers !== []){
            $data['entity_identifiers'] = array_map(
                fn (EntityIdentifier $entity_identifiers): array => $entity_identifiers->toArray(),
                $this->entity_identifiers
            );
        }
        if($this->tax_providers_fields !== []){
            $data['tax_providers_fields'] = array_map(
                fn (TaxProvidersField $tax_providers_fields): array => $tax_providers_fields->toArray(),
                $this->tax_providers_fields
            );
        }

        foreach($this->_data as $keys => $value){
            if (!in_array($keys, $this::$knownFields)) {
                $data[$keys] = $value;
            }
        } 
        return $data;
    }
}
?>