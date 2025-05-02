<?php

namespace Chargebee\Responses\HostedPageResponse;
use Chargebee\Resources\HostedPage\HostedPage;

use Chargebee\ValueObjects\ResponseBase;

class ListHostedPageResponse extends ResponseBase { 
    /**
    *
    * @var array<ListHostedPageResponseListObject> $list
    */
    public array $list;
    
    /**
    *
    * @var ?string $next_offset
    */
    public ?string $next_offset;
    

    private function __construct(
        array $list,
        ?string $next_offset,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->list = $list;
        $this->next_offset = $next_offset;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
            $list = array_map(function (array $result): ListHostedPageResponseListObject {
                return new ListHostedPageResponseListObject(
                    isset($result['hosted_page']) ? HostedPage::from($result['hosted_page']) : null,
                );}, $resourceAttributes['list'] ?? []);
        
        return new self($list,
            $resourceAttributes['next_offset'] ?? null, $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([
            'list' => $this->list,
            'next_offset' => $this->next_offset,
        ]);
        return $data;
    }
}


class ListHostedPageResponseListObject {
    
        public HostedPage $hosted_page;
    
public function __construct(
    HostedPage $hosted_page,
){ 
    $this->hosted_page = $hosted_page;

}
}

?>