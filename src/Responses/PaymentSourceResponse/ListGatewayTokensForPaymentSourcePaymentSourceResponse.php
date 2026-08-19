<?php

namespace Chargebee\Responses\PaymentSourceResponse;
use Chargebee\Resources\GatewayPaymentMethodToken\GatewayPaymentMethodToken;

use Chargebee\ValueObjects\ResponseBase;

class ListGatewayTokensForPaymentSourcePaymentSourceResponse extends ResponseBase { 
    /**
    *
    * @var array<ListGatewayTokensForPaymentSourcePaymentSourceResponseListObject> $list
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
            $list = array_map(function (array $result): ListGatewayTokensForPaymentSourcePaymentSourceResponseListObject {
                return new ListGatewayTokensForPaymentSourcePaymentSourceResponseListObject(
                    isset($result['gateway_payment_method_token']) ? GatewayPaymentMethodToken::from($result['gateway_payment_method_token']) : null,
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