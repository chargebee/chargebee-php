<?php

namespace Chargebee\Responses\CardResponse;
use Chargebee\Resources\Card\Card;

use Chargebee\ValueObjects\ResponseBase;

class RetrieveCardResponse extends ResponseBase { 
    /**
    *
    * @var ?Card $card
    */
    public ?Card $card;
    

    private function __construct(
        ?Card $card,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->card = $card;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['card']) ? Card::from($resourceAttributes['card']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->card instanceof Card){
            $data['card'] = $this->card->toArray();
        } 

        return $data;
    }
}
?>