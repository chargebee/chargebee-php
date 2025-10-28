<?php

namespace Chargebee\Responses\EntitlementResponse;
use Chargebee\Resources\Entitlement\Entitlement;

use Chargebee\ValueObjects\ResponseBase;

class CreateEntitlementResponse extends ResponseBase { 
    /**
    *
    * @var array<CreateEntitlementResponseListObject> $list
    */
    public array $list;
    

    private function __construct(
        array $list,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->list = $list;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
            $list = array_map(function (array $result): CreateEntitlementResponseListObject {
                return new CreateEntitlementResponseListObject(
                    isset($result['entitlement']) ? Entitlement::from($result['entitlement']) : null,
                );}, $resourceAttributes['list'] ?? []);
        
        return new self($list, $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([
            'list' => $this->list,
        ]);
        return $data;
    }
}
?>