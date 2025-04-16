<?php

namespace Chargebee\Responses\OrderResponse;
use Chargebee\Resources\Order\Order;

use Chargebee\ValueObjects\ResponseBase;

class UpdateOrderResponse extends ResponseBase { 
    /**
    *
    * @var Order $order
    */
    public Order $order;
    

    private function __construct(
        Order $order,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->order = $order;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             Order::from($resourceAttributes['order']), $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'order' => $this->order->toArray(),
        ]);
        

        return $data;
    }
}
?>