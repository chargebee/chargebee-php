<?php

namespace Chargebee\Resources\PersonalizedOffer;

class PersonalizedOffer  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?string $offer_id
    */
    public ?string $offer_id;
    
    /**
    *
    * @var ?Content $content
    */
    public ?Content $content;
    
    /**
    *
    * @var ?array<Option> $options
    */
    public ?array $options;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "offer_id" , "content" , "options"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $offer_id,
        ?Content $content,
        ?array $options,
    )
    { 
        $this->id = $id;
        $this->offer_id = $offer_id;
        $this->content = $content;
        $this->options = $options;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $options = array_map(fn (array $result): Option =>  Option::from(
            $result
        ), $resourceAttributes['options'] ?? []);
        
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['offer_id'] ?? null,
        isset($resourceAttributes['content']) ? Content::from($resourceAttributes['content']) : null,
        $options,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'offer_id' => $this->offer_id,
        
        
        
        ], function ($value) {
            return $value !== null;
        });

        
        if($this->content instanceof Content){
            $data['content'] = $this->content->toArray();
        }
        
        if($this->options !== []){
            $data['options'] = array_map(
                fn (Option $options): array => $options->toArray(),
                $this->options
            );
        }

        
        return $data;
    }
}
?>