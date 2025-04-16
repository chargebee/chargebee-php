<?php

namespace Chargebee\Responses\PortalSessionResponse;
use Chargebee\Resources\PortalSession\PortalSession;

use Chargebee\ValueObjects\ResponseBase;

class LogoutPortalSessionResponse extends ResponseBase { 
    /**
    *
    * @var PortalSession $portal_session
    */
    public PortalSession $portal_session;
    

    private function __construct(
        PortalSession $portal_session,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->portal_session = $portal_session;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             PortalSession::from($resourceAttributes['portal_session']), $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'portal_session' => $this->portal_session->toArray(),
        ]);
        

        return $data;
    }
}
?>