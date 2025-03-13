<?php

namespace Chargebee\Resources\AdvanceInvoiceSchedule;

class SpecificDatesSchedule  { 
    /**
    *
    * @var ?int $terms_to_charge
    */
    public ?int $terms_to_charge;
    
    /**
    *
    * @var ?int $date
    */
    public ?int $date;
    
    /**
    *
    * @var int $created_at
    */
    public int $created_at;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "terms_to_charge" , "date" , "created_at"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?int $terms_to_charge,
        ?int $date,
        int $created_at,
    )
    { 
        $this->terms_to_charge = $terms_to_charge;
        $this->date = $date;
        $this->created_at = $created_at;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['terms_to_charge'] ?? null,
        $resourceAttributes['date'] ?? null,
        $resourceAttributes['created_at'] ,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['terms_to_charge' => $this->terms_to_charge,
        'date' => $this->date,
        'created_at' => $this->created_at,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>