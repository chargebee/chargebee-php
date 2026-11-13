<?php

namespace Chargebee\Resources\OrganizationDetail;

class OrganizationDetail  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?string $organization_name
    */
    public ?string $organization_name;
    
    /**
    *
    * @var ?string $email
    */
    public ?string $email;
    
    /**
    *
    * @var ?string $address_line1
    */
    public ?string $address_line1;
    
    /**
    *
    * @var ?string $address_line2
    */
    public ?string $address_line2;
    
    /**
    *
    * @var ?string $address_line3
    */
    public ?string $address_line3;
    
    /**
    *
    * @var ?string $city
    */
    public ?string $city;
    
    /**
    *
    * @var ?string $state_code
    */
    public ?string $state_code;
    
    /**
    *
    * @var ?string $state
    */
    public ?string $state;
    
    /**
    *
    * @var ?string $country_code
    */
    public ?string $country_code;
    
    /**
    *
    * @var ?string $zip
    */
    public ?string $zip;
    
    /**
    *
    * @var ?string $phone
    */
    public ?string $phone;
    
    /**
    *
    * @var ?string $fax
    */
    public ?string $fax;
    
    /**
    *
    * @var ?string $website
    */
    public ?string $website;
    
    /**
    *
    * @var ?bool $is_vat_number_present
    */
    public ?bool $is_vat_number_present;
    
    /**
    *
    * @var ?string $vat_number
    */
    public ?string $vat_number;
    
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
    * @var ?string $business_entity_id
    */
    public ?string $business_entity_id;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "organization_name" , "email" , "address_line1" , "address_line2" , "address_line3" , "city" , "state_code" , "state" , "country_code" , "zip" , "phone" , "fax" , "website" , "is_vat_number_present" , "vat_number" , "resource_version" , "updated_at" , "business_entity_id"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $organization_name,
        ?string $email,
        ?string $address_line1,
        ?string $address_line2,
        ?string $address_line3,
        ?string $city,
        ?string $state_code,
        ?string $state,
        ?string $country_code,
        ?string $zip,
        ?string $phone,
        ?string $fax,
        ?string $website,
        ?bool $is_vat_number_present,
        ?string $vat_number,
        ?int $resource_version,
        ?int $updated_at,
        ?string $business_entity_id,
    )
    { 
        $this->id = $id;
        $this->organization_name = $organization_name;
        $this->email = $email;
        $this->address_line1 = $address_line1;
        $this->address_line2 = $address_line2;
        $this->address_line3 = $address_line3;
        $this->city = $city;
        $this->state_code = $state_code;
        $this->state = $state;
        $this->country_code = $country_code;
        $this->zip = $zip;
        $this->phone = $phone;
        $this->fax = $fax;
        $this->website = $website;
        $this->is_vat_number_present = $is_vat_number_present;
        $this->vat_number = $vat_number;
        $this->resource_version = $resource_version;
        $this->updated_at = $updated_at;
        $this->business_entity_id = $business_entity_id;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['organization_name'] ?? null,
        $resourceAttributes['email'] ?? null,
        $resourceAttributes['address_line1'] ?? null,
        $resourceAttributes['address_line2'] ?? null,
        $resourceAttributes['address_line3'] ?? null,
        $resourceAttributes['city'] ?? null,
        $resourceAttributes['state_code'] ?? null,
        $resourceAttributes['state'] ?? null,
        $resourceAttributes['country_code'] ?? null,
        $resourceAttributes['zip'] ?? null,
        $resourceAttributes['phone'] ?? null,
        $resourceAttributes['fax'] ?? null,
        $resourceAttributes['website'] ?? null,
        $resourceAttributes['is_vat_number_present'] ?? null,
        $resourceAttributes['vat_number'] ?? null,
        $resourceAttributes['resource_version'] ?? null,
        $resourceAttributes['updated_at'] ?? null,
        $resourceAttributes['business_entity_id'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'organization_name' => $this->organization_name,
        'email' => $this->email,
        'address_line1' => $this->address_line1,
        'address_line2' => $this->address_line2,
        'address_line3' => $this->address_line3,
        'city' => $this->city,
        'state_code' => $this->state_code,
        'state' => $this->state,
        'country_code' => $this->country_code,
        'zip' => $this->zip,
        'phone' => $this->phone,
        'fax' => $this->fax,
        'website' => $this->website,
        'is_vat_number_present' => $this->is_vat_number_present,
        'vat_number' => $this->vat_number,
        'resource_version' => $this->resource_version,
        'updated_at' => $this->updated_at,
        'business_entity_id' => $this->business_entity_id,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>