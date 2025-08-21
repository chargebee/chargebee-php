<?php

namespace Chargebee\Responses\OmnichannelOneTimeOrderResponse;
use Chargebee\Resources\OmnichannelOneTimeOrder\OmnichannelOneTimeOrder;

use Chargebee\ValueObjects\ResponseBase;

class RetrieveOmnichannelOneTimeOrderResponse extends ResponseBase { 
    /**
    *
    * @var ?OmnichannelOneTimeOrder $omnichannel_one_time_order
    */
    public ?OmnichannelOneTimeOrder $omnichannel_one_time_order;
    

    private function __construct(
        ?OmnichannelOneTimeOrder $omnichannel_one_time_order,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->omnichannel_one_time_order = $omnichannel_one_time_order;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['omnichannel_one_time_order']) ? OmnichannelOneTimeOrder::from($resourceAttributes['omnichannel_one_time_order']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->omnichannel_one_time_order instanceof OmnichannelOneTimeOrder){
            $data['omnichannel_one_time_order'] = $this->omnichannel_one_time_order->toArray();
        } 

        return $data;
    }
}
?>