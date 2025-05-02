<?php

namespace Chargebee\Responses\AddonResponse;
use Chargebee\Resources\Addon\Addon;

use Chargebee\ValueObjects\ResponseBase;

class CopyAddonResponse extends ResponseBase { 
    /**
    *
    * @var ?Addon $addon
    */
    public ?Addon $addon;
    

    private function __construct(
        ?Addon $addon,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->addon = $addon;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['addon']) ? Addon::from($resourceAttributes['addon']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->addon instanceof Addon){
            $data['addon'] = $this->addon->toArray();
        } 

        return $data;
    }
}
?>