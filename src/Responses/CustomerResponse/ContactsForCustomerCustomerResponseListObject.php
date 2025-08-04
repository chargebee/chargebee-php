<?php
namespace Chargebee\Responses\CustomerResponse;

use Chargebee\Resources\Contact\Contact;

class ContactsForCustomerCustomerResponseListObject
{ 
    public Contact $contact;
    public function __construct(
        Contact $contact,
    ) { 
        $this->contact = $contact;
    }
}
