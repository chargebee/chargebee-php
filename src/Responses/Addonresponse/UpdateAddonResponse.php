<?php

namespace Chargebee\Responses\AddonResponse;
use Chargebee\Resources\Addon\Addon;

use Chargebee\ValueObjects\ResponseBase;

class UpdateAddonResponse extends ResponseBase { 
    /**
    *
    * @var Addon $addon
    */
    public Addon $addon;
    

    private function __construct(
        Addon $addon,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->addon = $addon;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             Addon::from($resourceAttributes['addon']), $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'addon' => $this->addon->toArray(),
        ]);
        

        return $data;
    }
}
?>