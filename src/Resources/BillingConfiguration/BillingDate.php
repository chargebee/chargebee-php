<?php

namespace Chargebee\Resources\BillingConfiguration;

class BillingDate  { 
    /**
    *
    * @var ?int $start_date
    */
    public ?int $start_date;
    
    /**
    *
    * @var ?int $end_date
    */
    public ?int $end_date;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "start_date" , "end_date"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?int $start_date,
        ?int $end_date,
    )
    { 
        $this->start_date = $start_date;
        $this->end_date = $end_date;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['start_date'] ?? null,
        $resourceAttributes['end_date'] ?? null,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['start_date' => $this->start_date,
        'end_date' => $this->end_date,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>