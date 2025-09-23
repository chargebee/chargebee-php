<?php

namespace Chargebee\Resources\PersonalizedOffer;

class Content  { 
    /**
    *
    * @var ?string $title
    */
    public ?string $title;
    
    /**
    *
    * @var ?string $description
    */
    public ?string $description;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "title" , "description"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $title,
        ?string $description,
    )
    { 
        $this->title = $title;
        $this->description = $description;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['title'] ?? null,
        $resourceAttributes['description'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['title' => $this->title,
        'description' => $this->description,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>