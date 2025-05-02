<?php

namespace Chargebee\Responses\ItemFamilyResponse;
use Chargebee\Resources\ItemFamily\ItemFamily;

use Chargebee\ValueObjects\ResponseBase;

class UpdateItemFamilyResponse extends ResponseBase { 
    /**
    *
    * @var ?ItemFamily $item_family
    */
    public ?ItemFamily $item_family;
    

    private function __construct(
        ?ItemFamily $item_family,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->item_family = $item_family;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['item_family']) ? ItemFamily::from($resourceAttributes['item_family']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->item_family instanceof ItemFamily){
            $data['item_family'] = $this->item_family->toArray();
        } 

        return $data;
    }
}
?>