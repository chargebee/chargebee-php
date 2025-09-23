<?php

namespace Chargebee\Resources\PersonalizedOffer;

class Option  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?string $label
    */
    public ?string $label;
    
    /**
    *
    * @var ?string $processing_type
    */
    public ?string $processing_type;
    
    /**
    *
    * @var ?string $processing_layout
    */
    public ?string $processing_layout;
    
    /**
    *
    * @var ?string $redirect_url
    */
    public ?string $redirect_url;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "label" , "processing_type" , "processing_layout" , "redirect_url"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $label,
        ?string $processing_type,
        ?string $processing_layout,
        ?string $redirect_url,
    )
    { 
        $this->id = $id;
        $this->label = $label;
        $this->processing_type = $processing_type;
        $this->processing_layout = $processing_layout;
        $this->redirect_url = $redirect_url;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['label'] ?? null,
        $resourceAttributes['processing_type'] ?? null,
        $resourceAttributes['processing_layout'] ?? null,
        $resourceAttributes['redirect_url'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'label' => $this->label,
        'processing_type' => $this->processing_type,
        'processing_layout' => $this->processing_layout,
        'redirect_url' => $this->redirect_url,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>