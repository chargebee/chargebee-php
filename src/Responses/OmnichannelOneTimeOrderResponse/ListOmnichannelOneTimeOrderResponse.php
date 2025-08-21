<?php

namespace Chargebee\Responses\OmnichannelOneTimeOrderResponse;
use Chargebee\Resources\OmnichannelOneTimeOrder\OmnichannelOneTimeOrder;

use Chargebee\ValueObjects\ResponseBase;

class ListOmnichannelOneTimeOrderResponse extends ResponseBase { 
    /**
    *
    * @var array<ListOmnichannelOneTimeOrderResponseListObject> $list
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
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->list = $list;
        $this->next_offset = $next_offset;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
            $list = array_map(function (array $result): ListOmnichannelOneTimeOrderResponseListObject {
                return new ListOmnichannelOneTimeOrderResponseListObject(
                    isset($result['omnichannel_one_time_order']) ? OmnichannelOneTimeOrder::from($result['omnichannel_one_time_order']) : null,
                );}, $resourceAttributes['list'] ?? []);
        
        return new self($list,
            $resourceAttributes['next_offset'] ?? null, $headers, $resourceAttributes);
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


class ListOmnichannelOneTimeOrderResponseListObject {
    
        public OmnichannelOneTimeOrder $omnichannel_one_time_order;
    
public function __construct(
    OmnichannelOneTimeOrder $omnichannel_one_time_order,
){ 
    $this->omnichannel_one_time_order = $omnichannel_one_time_order;

}
}

?>