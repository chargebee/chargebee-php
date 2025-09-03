<?php
namespace Chargebee\Responses\OrderResponse;

use Chargebee\Resources\Order\Order;

class OrdersForInvoiceOrderResponseListObject
{ 
    public Order $order;
    public function __construct(
        Order $order,
    ) { 
        $this->order = $order;
    }
}
