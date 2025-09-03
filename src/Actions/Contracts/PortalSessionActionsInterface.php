<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\PortalSessionResponse\CreatePortalSessionResponse;
use Chargebee\Responses\PortalSessionResponse\RetrievePortalSessionResponse;
use Chargebee\Responses\PortalSessionResponse\ActivatePortalSessionResponse;
use Chargebee\Responses\PortalSessionResponse\LogoutPortalSessionResponse;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface PortalSessionActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/portal_sessions?lang=php#create_a_portal_session
    *   @param array{
    *     customer?: array{
    *     id?: string,
    *     },
    * redirect_url?: string,
    *     forward_url?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreatePortalSessionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function create(array $params, array $headers = []): CreatePortalSessionResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/portal_sessions?lang=php#activate_a_portal_session
    *   @param array{
    *     token?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ActivatePortalSessionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function activate(string $id, array $params, array $headers = []): ActivatePortalSessionResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/portal_sessions?lang=php#logout_a_portal_session
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return LogoutPortalSessionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function logout(string $id, array $headers = []): LogoutPortalSessionResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/portal_sessions?lang=php#retrieve_a_portal_session
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrievePortalSessionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function retrieve(string $id, array $headers = []): RetrievePortalSessionResponse;

}
?>