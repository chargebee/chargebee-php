<?php
namespace Chargebee\Responses\EmailLogResponse;

use Chargebee\Resources\EmailLog\EmailLog;

class EmailLogsForCustomerEmailLogResponseListObject
{ 
    public EmailLog $email_log;
    public function __construct(
        EmailLog $email_log,
    ) { 
        $this->email_log = $email_log;
    }
}
