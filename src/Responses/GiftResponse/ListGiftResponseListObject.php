<?php
namespace Chargebee\Responses\GiftResponse;

use Chargebee\Resources\Gift\Gift;
use Chargebee\Resources\Subscription\Subscription;

class ListGiftResponseListObject
{ 
    public Gift $gift;

    public Subscription $subscription;
    public function __construct(
        Gift $gift,
    
        Subscription $subscription,
    ) { 
        $this->gift = $gift;
        $this->subscription = $subscription;
    }
}
