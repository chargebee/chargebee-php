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
    * @var ?string $direct_debit_scheme
    */
    public ?string $direct_debit_scheme;
    
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
    * @var ?string $account_type
    */
    public ?string $account_type;
    
    /**
    *
    * @var ?string $echeck_type
    */
    public ?string $echeck_type;
    
    /**
    *
    * @var ?string $account_holder_type
    */
    public ?string $account_holder_type;
    
    /**
    *
    * @var ?string $email
    */
    public ?string $email;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "last4" , "name_on_account" , "first_name" , "last_name" , "direct_debit_scheme" , "bank_name" , "mandate_id" , "account_type" , "echeck_type" , "account_holder_type" , "email"  ];

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
        ?string $direct_debit_scheme,
        ?string $bank_name,
        ?string $mandate_id,
        ?string $account_type,
        ?string $echeck_type,
        ?string $account_holder_type,
        ?string $email,
    )
    { 
        $this->last4 = $last4;
        $this->name_on_account = $name_on_account;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->direct_debit_scheme = $direct_debit_scheme;
        $this->bank_name = $bank_name;
        $this->mandate_id = $mandate_id;
        $this->account_type = $account_type;
        $this->echeck_type = $echeck_type;
        $this->account_holder_type = $account_holder_type;
        $this->email = $email;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['last4'] ?? null,
        $resourceAttributes['name_on_account'] ?? null,
        $resourceAttributes['first_name'] ?? null,
        $resourceAttributes['last_name'] ?? null,
        $resourceAttributes['direct_debit_scheme'] ?? null,
        $resourceAttributes['bank_name'] ?? null,
        $resourceAttributes['mandate_id'] ?? null,
        $resourceAttributes['account_type'] ?? null,
        $resourceAttributes['echeck_type'] ?? null,
        $resourceAttributes['account_holder_type'] ?? null,
        $resourceAttributes['email'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['last4' => $this->last4,
        'name_on_account' => $this->name_on_account,
        'first_name' => $this->first_name,
        'last_name' => $this->last_name,
        'direct_debit_scheme' => $this->direct_debit_scheme,
        'bank_name' => $this->bank_name,
        'mandate_id' => $this->mandate_id,
        'account_type' => $this->account_type,
        'echeck_type' => $this->echeck_type,
        'account_holder_type' => $this->account_holder_type,
        'email' => $this->email,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>