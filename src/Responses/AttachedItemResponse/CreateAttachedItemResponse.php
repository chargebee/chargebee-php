<?php

namespace Chargebee\Responses\AttachedItemResponse;
use Chargebee\Resources\AttachedItem\AttachedItem;

use Chargebee\ValueObjects\ResponseBase;

class CreateAttachedItemResponse extends ResponseBase { 
    /**
    *
    * @var ?AttachedItem $attached_item
    */
    public ?AttachedItem $attached_item;
    

    private function __construct(
        ?AttachedItem $attached_item,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->attached_item = $attached_item;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['attached_item']) ? AttachedItem::from($resourceAttributes['attached_item']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->attached_item instanceof AttachedItem){
            $data['attached_item'] = $this->attached_item->toArray();
        } 

        return $data;
    }
}
?>