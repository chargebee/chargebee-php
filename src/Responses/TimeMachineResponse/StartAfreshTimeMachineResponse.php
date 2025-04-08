<?php

namespace Chargebee\Responses\TimeMachineResponse;
use Chargebee\Resources\TimeMachine\TimeMachine;

use Chargebee\ValueObjects\ResponseBase;

class StartAfreshTimeMachineResponse extends ResponseBase { 
    /**
    *
    * @var TimeMachine $time_machine
    */
    public TimeMachine $time_machine;
    

    private function __construct(
        TimeMachine $time_machine,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->time_machine = $time_machine;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             TimeMachine::from($resourceAttributes['time_machine']), $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'time_machine' => $this->time_machine->toArray(),
        ]);
        

        return $data;
    }
}
?>