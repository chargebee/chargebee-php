<?php

namespace Chargebee\Resources\PaymentSource;

class BankAccount  { 
    /**
    *
    * @var ?string $last4
    */
    public ?string $last4;
    
    /**
    *
    * @var ?string $name_on_account
    */
    public ?string $name_on_account;
    
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
    * @var ?string $bank_name
    */
    public ?string $bank_name;
    
    /**
    *
    * @var ?string $mandate_id
    */
    public ?string $mandate_id;
    
    /**
    *
    * @var ?string $email
    */
    public ?string $email;
    
    /**
    *
    * @var ?\Chargebee\ClassBasedEnums\DirectDebitScheme $direct_debit_scheme
    */
    public ?\Chargebee\ClassBasedEnums\DirectDebitScheme $direct_debit_scheme;
    
    /**
    *
    * @var ?\Chargebee\ClassBasedEnums\AccountType $account_type
    */
    public ?\Chargebee\ClassBasedEnums\AccountType $account_type;
    
    /**
    *
    * @var ?\Chargebee\ClassBasedEnums\EcheckType $echeck_type
    */
    public ?\Chargebee\ClassBasedEnums\EcheckType $echeck_type;
    
    /**
    *
    * @var ?\Chargebee\ClassBasedEnums\AccountHolderType $account_holder_type
    */
    public ?\Chargebee\ClassBasedEnums\AccountHolderType $account_holder_type;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "last4" , "name_on_account" , "first_name" , "last_name" , "bank_name" , "mandate_id" , "email"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $last4,
        ?string $name_on_account,
        ?string $first_name,
        ?string $last_name,
        ?string $bank_name,
        ?string $mandate_id,
        ?string $email,
        ?\Chargebee\ClassBasedEnums\DirectDebitScheme $direct_debit_scheme,
        ?\Chargebee\ClassBasedEnums\AccountType $account_type,
        ?\Chargebee\ClassBasedEnums\EcheckType $echeck_type,
        ?\Chargebee\ClassBasedEnums\AccountHolderType $account_holder_type,
    )
    { 
        $this->last4 = $last4;
        $this->name_on_account = $name_on_account;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->bank_name = $bank_name;
        $this->mandate_id = $mandate_id;
        $this->email = $email; 
        $this->direct_debit_scheme = $direct_debit_scheme;
        $this->account_type = $account_type;
        $this->echeck_type = $echeck_type;
        $this->account_holder_type = $account_holder_type; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['last4'] ?? null,
        $resourceAttributes['name_on_account'] ?? null,
        $resourceAttributes['first_name'] ?? null,
        $resourceAttributes['last_name'] ?? null,
        $resourceAttributes['bank_name'] ?? null,
        $resourceAttributes['mandate_id'] ?? null,
        $resourceAttributes['email'] ?? null,
        
        
        isset($resourceAttributes['direct_debit_scheme']) ? \Chargebee\ClassBasedEnums\DirectDebitScheme::tryFromValue($resourceAttributes['direct_debit_scheme']) : null,
        
        isset($resourceAttributes['account_type']) ? \Chargebee\ClassBasedEnums\AccountType::tryFromValue($resourceAttributes['account_type']) : null,
        
        isset($resourceAttributes['echeck_type']) ? \Chargebee\ClassBasedEnums\EcheckType::tryFromValue($resourceAttributes['echeck_type']) : null,
        
        isset($resourceAttributes['account_holder_type']) ? \Chargebee\ClassBasedEnums\AccountHolderType::tryFromValue($resourceAttributes['account_holder_type']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['last4' => $this->last4,
        'name_on_account' => $this->name_on_account,
        'first_name' => $this->first_name,
        'last_name' => $this->last_name,
        'bank_name' => $this->bank_name,
        'mandate_id' => $this->mandate_id,
        'email' => $this->email,
        
        'direct_debit_scheme' => $this->direct_debit_scheme?->value,
        
        'account_type' => $this->account_type?->value,
        
        'echeck_type' => $this->echeck_type?->value,
        
        'account_holder_type' => $this->account_holder_type?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>