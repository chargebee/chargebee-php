<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\ConfigurationResponse\ListConfigurationResponse;

Interface ConfigurationActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/configurations?lang=php#list_site_configurations
    *   
    *   
    *   @param array<string, string> $headers
    *   @return ListConfigurationResponse
    */
    public function all(array $headers = []): ListConfigurationResponse;

}
?>