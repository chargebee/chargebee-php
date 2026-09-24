<?php
namespace Chargebee\Responses\EinvoiceResponse;

use Chargebee\Resources\Einvoice\Einvoice;

class ListEinvoicesEinvoiceResponseListObject
{ 
    public Einvoice $einvoice;
    public function __construct(
        Einvoice $einvoice,
    ) { 
        $this->einvoice = $einvoice;
    }
}
