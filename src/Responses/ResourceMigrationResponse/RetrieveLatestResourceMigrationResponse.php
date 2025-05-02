<?php

namespace Chargebee\Responses\ResourceMigrationResponse;
use Chargebee\Resources\ResourceMigration\ResourceMigration;

use Chargebee\ValueObjects\ResponseBase;

class RetrieveLatestResourceMigrationResponse extends ResponseBase { 
    /**
    *
    * @var ?ResourceMigration $resource_migration
    */
    public ?ResourceMigration $resource_migration;
    

    private function __construct(
        ?ResourceMigration $resource_migration,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->resource_migration = $resource_migration;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['resource_migration']) ? ResourceMigration::from($resourceAttributes['resource_migration']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->resource_migration instanceof ResourceMigration){
            $data['resource_migration'] = $this->resource_migration->toArray();
        } 

        return $data;
    }
}
?>