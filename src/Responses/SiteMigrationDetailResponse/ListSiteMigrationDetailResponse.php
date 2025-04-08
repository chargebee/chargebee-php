<?php

namespace Chargebee\Responses\SiteMigrationDetailResponse;
use Chargebee\Resources\SiteMigrationDetail\SiteMigrationDetail;

use Chargebee\ValueObjects\ResponseBase;

class ListSiteMigrationDetailResponse extends ResponseBase { 
    /**
    *
    * @var array<ListSiteMigrationDetailResponseListObject> $list
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
    )
    {
        parent::__construct($responseHeaders);
        $this->list = $list;
        $this->next_offset = $next_offset;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
            $list = array_map(function (array $result): ListSiteMigrationDetailResponseListObject {
                return new ListSiteMigrationDetailResponseListObject(
                    isset($result['site_migration_detail']) ? SiteMigrationDetail::from($result['site_migration_detail']) : null,
                );}, $resourceAttributes['list'] ?? []);
        
        return new self($list,
            $resourceAttributes['next_offset'] ?? null, $headers);
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


class ListSiteMigrationDetailResponseListObject {
    
        public SiteMigrationDetail $site_migration_detail;
    
public function __construct(
    SiteMigrationDetail $site_migration_detail,
){ 
    $this->site_migration_detail = $site_migration_detail;

}
}

?>