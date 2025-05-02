<?php

namespace Chargebee\Responses\HostedPageResponse;
use Chargebee\Resources\HostedPage\HostedPage;

use Chargebee\ValueObjects\ResponseBase;

class AcceptQuoteHostedPageResponse extends ResponseBase { 
    /**
    *
    * @var ?HostedPage $hosted_page
    */
    public ?HostedPage $hosted_page;
    

    private function __construct(
        ?HostedPage $hosted_page,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->hosted_page = $hosted_page;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['hosted_page']) ? HostedPage::from($resourceAttributes['hosted_page']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->hosted_page instanceof HostedPage){
            $data['hosted_page'] = $this->hosted_page->toArray();
        } 

        return $data;
    }
}
?>