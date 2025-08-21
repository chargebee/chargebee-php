<?php

namespace Chargebee\Responses\UsageFileResponse;
use Chargebee\Resources\UsageFile\UsageFile;

use Chargebee\ValueObjects\ResponseBase;

class ProcessingStatusUsageFileResponse extends ResponseBase { 
    /**
    *
    * @var ?UsageFile $usage_file
    */
    public ?UsageFile $usage_file;
    

    private function __construct(
        ?UsageFile $usage_file,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->usage_file = $usage_file;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['usage_file']) ? UsageFile::from($resourceAttributes['usage_file']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->usage_file instanceof UsageFile){
            $data['usage_file'] = $this->usage_file->toArray();
        } 

        return $data;
    }
}
?>