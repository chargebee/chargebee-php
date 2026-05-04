<?php
namespace Chargebee\Responses\AlertResponse;

use Chargebee\Resources\Alert\Alert;

class ApplicationAlertsForSubscriptionAlertResponseListObject
{ 
    public Alert $alert;
    public function __construct(
        Alert $alert,
    ) { 
        $this->alert = $alert;
    }
}
