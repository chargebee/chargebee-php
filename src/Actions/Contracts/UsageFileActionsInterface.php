<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\UsageFileResponse\UploadUrlUsageFileResponse;
use Chargebee\Responses\UsageFileResponse\ProcessingStatusUsageFileResponse;

Interface UsageFileActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/usage_files?lang=php#get_uploaded_file_processing_status
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ProcessingStatusUsageFileResponse
    */
    public function processingStatus(string $id, array $headers = []): ProcessingStatusUsageFileResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/usage_files?lang=php#get_usages_file_upload_url
    *   @param array{
    *     file_name?: string,
    *     mime_type?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return UploadUrlUsageFileResponse
    */
    public function uploadUrl(array $params, array $headers = []): UploadUrlUsageFileResponse;

}
?>