<?php

namespace Chargebee\Responses\PaymentScheduleSchemeResponse;
use Chargebee\Resources\PaymentScheduleScheme\PaymentScheduleScheme;

use Chargebee\ValueObjects\ResponseBase;

class ListPaymentScheduleSchemeResponse extends ResponseBase { 
    /**
    *
    * @var array<ListPaymentScheduleSchemeResponseListObject> $list
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
            $list = array_map(function (array $result): ListPaymentScheduleSchemeResponseListObject {
                return new ListPaymentScheduleSchemeResponseListObject(
                    isset($result['payment_schedule_scheme']) ? PaymentScheduleScheme::from($result['payment_schedule_scheme']) : null,
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
?>