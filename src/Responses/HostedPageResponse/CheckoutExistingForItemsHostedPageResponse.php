<?php

namespace Chargebee\Responses\HostedPageResponse;
use Chargebee\Resources\HostedPage\HostedPage;

use Chargebee\ValueObjects\ResponseBase;

class CheckoutExistingForItemsHostedPageResponse extends ResponseBase { 
    /**
    *
    * @var HostedPage $hosted_page
    */
    public HostedPage $hosted_page;
    

    private function __construct(
        HostedPage $hosted_page,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->hosted_page = $hosted_page;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             HostedPage::from($resourceAttributes['hosted_page']), $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'hosted_page' => $this->hosted_page->toArray(),
        ]);
        

        return $data;
    }
}
?>