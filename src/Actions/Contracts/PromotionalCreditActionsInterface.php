<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\PromotionalCreditResponse\RetrievePromotionalCreditResponse;
use Chargebee\Responses\PromotionalCreditResponse\AddPromotionalCreditResponse;
use Chargebee\Responses\PromotionalCreditResponse\ListPromotionalCreditResponse;
use Chargebee\Responses\PromotionalCreditResponse\DeductPromotionalCreditResponse;
use Chargebee\Responses\PromotionalCreditResponse\SetPromotionalCreditResponse;

Interface PromotionalCreditActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/promotional_credits?lang=php#retrieve_a_promotional_credit
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrievePromotionalCreditResponse
    */
    public function retrieve(string $id, array $headers = []): RetrievePromotionalCreditResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/promotional_credits?lang=php#list_promotional_credits
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     id?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     },
    * created_at?: array{
    *     after?: mixed,
    *     before?: mixed,
    *     on?: mixed,
    *     between?: mixed,
    *     },
    * type?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * customer_id?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     },
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ListPromotionalCreditResponse
    */
    public function all(array $params = [], array $headers = []): ListPromotionalCreditResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/promotional_credits?lang=php#deduct_promotional_credits
    *   @param array{
    *     customer_id?: string,
    *     amount?: int,
    *     amount_in_decimal?: string,
    *     currency_code?: string,
    *     description?: string,
    *     credit_type?: string,
    *     reference?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return DeductPromotionalCreditResponse
    */
    public function deduct(array $params, array $headers = []): DeductPromotionalCreditResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/promotional_credits?lang=php#set_promotional_credits
    *   @param array{
    *     customer_id?: string,
    *     amount?: int,
    *     amount_in_decimal?: string,
    *     currency_code?: string,
    *     description?: string,
    *     credit_type?: string,
    *     reference?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return SetPromotionalCreditResponse
    */
    public function set(array $params, array $headers = []): SetPromotionalCreditResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/promotional_credits?lang=php#add_promotional_credits
    *   @param array{
    *     customer_id?: string,
    *     amount?: int,
    *     amount_in_decimal?: string,
    *     currency_code?: string,
    *     description?: string,
    *     credit_type?: string,
    *     reference?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return AddPromotionalCreditResponse
    */
    public function add(array $params, array $headers = []): AddPromotionalCreditResponse;

}
?>