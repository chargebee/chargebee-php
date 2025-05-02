<?php

namespace Chargebee\Responses\CustomerResponse;
use Chargebee\Resources\Hierarchy\Hierarchy;

use Chargebee\ValueObjects\ResponseBase;

class HierarchyCustomerResponse extends ResponseBase { 
    /**
    *
    * @var ?array<Hierarchy> $hierarchies
    */
    public ?array $hierarchies;
    

    private function __construct(
        ?array $hierarchies,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->hierarchies = $hierarchies;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        $hierarchies = array_map(fn (array $result): Hierarchy =>  Hierarchy::from(
            $result
        ), $resourceAttributes['hierarchies'] ?? []);
        
        return new self($hierarchies, $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
          

        if($this->hierarchies !== []) {
            $data['hierarchies'] = array_map(
                fn (Hierarchy $hierarchies): array => $hierarchies->toArray(),
                $this->hierarchies
            );
        }
        return $data;
    }
}
?>