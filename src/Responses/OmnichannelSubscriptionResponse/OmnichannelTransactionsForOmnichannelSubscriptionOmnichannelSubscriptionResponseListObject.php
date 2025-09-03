<?php
namespace Chargebee\Responses\OmnichannelSubscriptionResponse;

use Chargebee\Resources\OmnichannelTransaction\OmnichannelTransaction;

class OmnichannelTransactionsForOmnichannelSubscriptionOmnichannelSubscriptionResponseListObject
{ 
    public OmnichannelTransaction $omnichannel_transaction;
    public function __construct(
        OmnichannelTransaction $omnichannel_transaction,
    ) { 
        $this->omnichannel_transaction = $omnichannel_transaction;
    }
}
