<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\ConfigurationResponse\ListConfigurationResponse;
use Exception;
use Psr\Http\Client\ClientExceptionInterface;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface ConfigurationActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/configurations?lang=php#list_site_configurations
    *   
    *   
    *   @param array<string, string> $headers
    *   @return ListConfigurationResponse
    *   @throws PaymentException
    *   @throws ClientExceptionInterface
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    *   @throws ClientExceptionInterface
    */
    public function all(array $headers = []): ListConfigurationResponse;

}
?>