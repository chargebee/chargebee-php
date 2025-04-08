<?php

namespace Chargebee\Responses\AttachedItemResponse;
use Chargebee\Resources\AttachedItem\AttachedItem;

use Chargebee\ValueObjects\ResponseBase;

class UpdateAttachedItemResponse extends ResponseBase { 
    /**
    *
    * @var AttachedItem $attached_item
    */
    public AttachedItem $attached_item;
    

    private function __construct(
        AttachedItem $attached_item,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->attached_item = $attached_item;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             AttachedItem::from($resourceAttributes['attached_item']), $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'attached_item' => $this->attached_item->toArray(),
        ]);
        

        return $data;
    }
}
?>