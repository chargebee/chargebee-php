<?php

namespace Chargebee\Responses\FeatureResponse;
use Chargebee\Resources\Feature\Feature;

use Chargebee\ValueObjects\ResponseBase;

class ListFeatureResponse extends ResponseBase { 
    /**
    *
    * @var array<ListFeatureResponseListObject> $list
    */
    public array $list;
    
    /**
    *
    * @var ?string $next_offset
    */
    public ?string $next_offset;
    

    private function __construct(
        array $list,
        ?string $next_offset,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->list = $list;
        $this->next_offset = $next_offset;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
            $list = array_map(function (array $result): ListFeatureResponseListObject {
                return new ListFeatureResponseListObject(
                    isset($result['feature']) ? Feature::from($result['feature']) : null,
                );}, $resourceAttributes['list'] ?? []);
        
        return new self($list,
            $resourceAttributes['next_offset'] ?? null, $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([
            'list' => $this->list,
            'next_offset' => $this->next_offset,
        ]);
        return $data;
    }
}


class ListFeatureResponseListObject {
    
        public Feature $feature;
    
public function __construct(
    Feature $feature,
){ 
    $this->feature = $feature;

}
}

?>