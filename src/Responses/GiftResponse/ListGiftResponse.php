<?php

namespace Chargebee\Responses\GiftResponse;
use Chargebee\Resources\Gift\Gift;
use Chargebee\Resources\Subscription\Subscription;

use Chargebee\ValueObjects\ResponseBase;

class ListGiftResponse extends ResponseBase { 
    /**
    *
    * @var array<ListGiftResponseListObject> $list
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
    )
    {
        parent::__construct($responseHeaders);
        $this->list = $list;
        $this->next_offset = $next_offset;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
            $list = array_map(function (array $result): ListGiftResponseListObject {
                return new ListGiftResponseListObject(
                    isset($result['gift']) ? Gift::from($result['gift']) : null,
                
                    isset($result['subscription']) ? Subscription::from($result['subscription']) : null,
                );}, $resourceAttributes['list'] ?? []);
        
        return new self($list,
            $resourceAttributes['next_offset'] ?? null, $headers);
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


class ListGiftResponseListObject {
    
        public Gift $gift;
    
        public Subscription $subscription;
    
public function __construct(
    Gift $gift,

    Subscription $subscription,
){ 
    $this->gift = $gift;

    $this->subscription = $subscription;

}
}

?>