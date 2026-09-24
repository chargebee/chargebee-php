<?php

namespace Chargebee\Responses\InvoiceResponse;
use Chargebee\Resources\EmailLog\EmailLog;

use Chargebee\ValueObjects\ResponseBase;

class SendEmailInvoiceResponse extends ResponseBase { 
    /**
    *
    * @var ?array<EmailLog> $email_logs
    */
    public ?array $email_logs;
    

    private function __construct(
        ?array $email_logs,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->email_logs = $email_logs;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        $email_logs = array_map(fn (array $result): EmailLog =>  EmailLog::from(
            $result
        ), $resourceAttributes['email_logs'] ?? []);
        
        return new self($email_logs, $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
          

        if($this->email_logs !== []) {
            $data['email_logs'] = array_map(
                fn (EmailLog $email_logs): array => $email_logs->toArray(),
                $this->email_logs
            );
        }
        return $data;
    }
}
?>