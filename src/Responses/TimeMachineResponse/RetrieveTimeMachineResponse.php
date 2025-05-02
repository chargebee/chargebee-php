<?php

namespace Chargebee\Responses\TimeMachineResponse;
use Chargebee\Resources\TimeMachine\TimeMachine;

use Chargebee\ValueObjects\ResponseBase;

class RetrieveTimeMachineResponse extends ResponseBase { 
    /**
    *
    * @var ?TimeMachine $time_machine
    */
    public ?TimeMachine $time_machine;
    

    private function __construct(
        ?TimeMachine $time_machine,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->time_machine = $time_machine;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['time_machine']) ? TimeMachine::from($resourceAttributes['time_machine']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->time_machine instanceof TimeMachine){
            $data['time_machine'] = $this->time_machine->toArray();
        } 

        return $data;
    }
}
?>