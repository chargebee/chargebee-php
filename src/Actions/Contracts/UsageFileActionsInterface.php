<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\UsageFileResponse\UploadUsageFileResponse;
use Chargebee\Responses\UsageFileResponse\StatusUsageFileResponse;

Interface UsageFileActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/usage_files?lang=php#get_upload_status
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return StatusUsageFileResponse
    */
    public function status(string $id, array $headers = []): StatusUsageFileResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/usage_files?lang=php#upload_usages_file
    *   @param array{
    *     file_name?: string,
    *     mime_type?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return UploadUsageFileResponse
    */
    public function upload(array $params, array $headers = []): UploadUsageFileResponse;

}
?>