<?php

namespace Chargebee\Responses\PortalSessionResponse;
use Chargebee\Resources\PortalSession\PortalSession;

use Chargebee\ValueObjects\ResponseBase;

class CreatePortalSessionResponse extends ResponseBase { 
    /**
    *
    * @var ?PortalSession $portal_session
    */
    public ?PortalSession $portal_session;
    

    private function __construct(
        ?PortalSession $portal_session,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->portal_session = $portal_session;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['portal_session']) ? PortalSession::from($resourceAttributes['portal_session']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->portal_session instanceof PortalSession){
            $data['portal_session'] = $this->portal_session->toArray();
        } 

        return $data;
    }
}
?>