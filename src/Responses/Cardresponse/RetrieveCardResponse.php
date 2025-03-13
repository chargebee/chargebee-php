<?php

namespace Chargebee\Responses\CardResponse;
use Chargebee\Resources\Card\Card;

use Chargebee\ValueObjects\ResponseBase;

class RetrieveCardResponse extends ResponseBase { 
    /**
    *
    * @var Card $card
    */
    public Card $card;
    

    private function __construct(
        Card $card,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->card = $card;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             Card::from($resourceAttributes['card']), $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'card' => $this->card->toArray(),
        ]);
        

        return $data;
    }
}
?>