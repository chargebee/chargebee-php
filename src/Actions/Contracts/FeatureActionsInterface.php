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

Interface FeatureActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/features?lang=php#list_features
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
    */
    public function all(array $params = [], array $headers = []): ListFeatureResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/features?lang=php#create_a_feature
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
    */
    public function create(array $params, array $headers = []): CreateFeatureResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/features?lang=php#delete_a_feature
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return DeleteFeatureResponse
    */
    public function delete(string $id, array $headers = []): DeleteFeatureResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/features?lang=php#retrieve_a_feature
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveFeatureResponse
    */
    public function retrieve(string $id, array $headers = []): RetrieveFeatureResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/features?lang=php#update_a_feature
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
    */
    public function update(string $id, array $params = [], array $headers = []): UpdateFeatureResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/features?lang=php#archive_a_feature
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ArchiveFeatureResponse
    */
    public function archive(string $id, array $headers = []): ArchiveFeatureResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/features?lang=php#activate_a_feature
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ActivateFeatureResponse
    */
    public function activate(string $id, array $headers = []): ActivateFeatureResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/features?lang=php#reactivate_a_feature
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ReactivateFeatureResponse
    */
    public function reactivate(string $id, array $headers = []): ReactivateFeatureResponse;

}
?>