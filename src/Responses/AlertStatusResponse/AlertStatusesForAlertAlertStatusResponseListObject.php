<?php
namespace Chargebee\Responses\AlertStatusResponse;

use Chargebee\Resources\AlertStatus\AlertStatus;

class AlertStatusesForAlertAlertStatusResponseListObject
{ 
    public AlertStatus $alert_status;
    public function __construct(
        AlertStatus $alert_status,
    ) { 
        $this->alert_status = $alert_status;
    }
}
