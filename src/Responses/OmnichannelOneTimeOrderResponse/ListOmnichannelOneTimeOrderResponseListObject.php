<?php
namespace Chargebee\Responses\OmnichannelOneTimeOrderResponse;

use Chargebee\Resources\OmnichannelOneTimeOrder\OmnichannelOneTimeOrder;

class ListOmnichannelOneTimeOrderResponseListObject
{ 
    public OmnichannelOneTimeOrder $omnichannel_one_time_order;
    public function __construct(
        OmnichannelOneTimeOrder $omnichannel_one_time_order,
    ) { 
        $this->omnichannel_one_time_order = $omnichannel_one_time_order;
    }
}
