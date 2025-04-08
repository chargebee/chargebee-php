<?php

namespace Chargebee\Responses\CustomerResponse;
use Chargebee\Resources\Contact\Contact;

use Chargebee\ValueObjects\ResponseBase;

class ContactsForCustomerCustomerResponse extends ResponseBase { 
    /**
    *
    * @var array<ContactsForCustomerCustomerResponseListObject> $list
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
            $list = array_map(function (array $result): ContactsForCustomerCustomerResponseListObject {
                return new ContactsForCustomerCustomerResponseListObject(
                    isset($result['contact']) ? Contact::from($result['contact']) : null,
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


class ContactsForCustomerCustomerResponseListObject {
    
        public Contact $contact;
    
public function __construct(
    Contact $contact,
){ 
    $this->contact = $contact;

}
}

?>