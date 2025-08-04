<?php
namespace Chargebee\Responses\HostedPageResponse;

use Chargebee\Resources\HostedPage\HostedPage;

class ListHostedPageResponseListObject
{ 
    public HostedPage $hosted_page;
    public function __construct(
        HostedPage $hosted_page,
    ) { 
        $this->hosted_page = $hosted_page;
    }
}
