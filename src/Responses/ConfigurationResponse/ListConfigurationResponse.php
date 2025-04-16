<?php

namespace Chargebee\Responses\ConfigurationResponse;
use Chargebee\Resources\Configuration\Configuration;

use Chargebee\ValueObjects\ResponseBase;

class ListConfigurationResponse extends ResponseBase { 
    /**
    *
    * @var array<Configuration> $configurations
    */
    public array $configurations;
    

    private function __construct(
        array $configurations,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->configurations = $configurations;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        $configurations = array_map(fn (array $result): Configuration =>  Configuration::from(
            $result
        ), $resourceAttributes['configurations'] );
        
        return new self($configurations, $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
        

        if($this->configurations !== []) {
            $data['configurations'] = array_map(
                fn (Configuration $configurations): array => $configurations->toArray(),
                $this->configurations
            );
        }
        return $data;
    }
}
?>