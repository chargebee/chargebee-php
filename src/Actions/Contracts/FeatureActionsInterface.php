<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\FeatureResponse\ReactivateFeatureResponse;
use Chargebee\Responses\FeatureResponse\ActivateFeatureResponse;
use Chargebee\Responses\FeatureResponse\ListFeatureResponse;
use Chargebee\Responses\FeatureResponse\CreateFeatureResponse;
use Chargebee\Responses\FeatureResponse\DeleteFeatureResponse;
use Chargebee\Responses\FeatureResponse\UpdateFeatureResponse;
use Chargebee\Responses\FeatureResponse\ArchiveFeatureResponse;
use Chargebee\Responses\FeatureResponse\RetrieveFeatureResponse;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface FeatureActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/features/list-features?lang=php-v4
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     name?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * id?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * status?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * type?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ListFeatureResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function all(array $params = [], array $headers = []): ListFeatureResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/features/create-a-feature?lang=php-v4
    *   @param array{
    *     levels?: array<array{
    *     name?: string,
    *     value?: string,
    *     is_unlimited?: bool,
    *     level?: int,
    *     }>,
    *     id?: string,
    *     name?: string,
    *     description?: string,
    *     type?: string,
    *     unit?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateFeatureResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function create(array $params, array $headers = []): CreateFeatureResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/features/delete-a-feature?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return DeleteFeatureResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function delete(string $id, array $headers = []): DeleteFeatureResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/features/retrieve-a-feature?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveFeatureResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function retrieve(string $id, array $headers = []): RetrieveFeatureResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/features/update-a-feature?lang=php-v4
    *   @param array{
    *     levels?: array<array{
    *     name?: string,
    *     value?: string,
    *     is_unlimited?: bool,
    *     level?: int,
    *     }>,
    *     name?: string,
    *     description?: string,
    *     unit?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return UpdateFeatureResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function update(string $id, array $params = [], array $headers = []): UpdateFeatureResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/features/archive-a-feature?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ArchiveFeatureResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function archive(string $id, array $headers = []): ArchiveFeatureResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/features/activate-a-feature?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ActivateFeatureResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function activate(string $id, array $headers = []): ActivateFeatureResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/features/reactivate-a-feature?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ReactivateFeatureResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function reactivate(string $id, array $headers = []): ReactivateFeatureResponse;

}
?>