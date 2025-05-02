<?php

namespace Chargebee\Responses\OrderResponse;
use Chargebee\Resources\Order\Order;

use Chargebee\ValueObjects\ResponseBase;

class CreateRefundableCreditNoteOrderResponse extends ResponseBase { 
    /**
    *
    * @var ?Order $order
    */
    public ?Order $order;
    

    private function __construct(
        ?Order $order,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->order = $order;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['order']) ? Order::from($resourceAttributes['order']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->order instanceof Order){
            $data['order'] = $this->order->toArray();
        } 

        return $data;
    }
}
?>