<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\AddressResponse\UpdateAddressResponse;
use Chargebee\Responses\AddressResponse\RetrieveAddressResponse;

Interface AddressActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/addresses?lang=php#retrieve_an_address
    *   @param array{
    *     subscription_id?: string,
    *     label?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return RetrieveAddressResponse
    */
    public function retrieve(array $params, array $headers = []): RetrieveAddressResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/addresses?lang=php#update_an_address
    *   @param array{
    *     subscription_id?: string,
    *     label?: string,
    *     first_name?: string,
    *     last_name?: string,
    *     email?: string,
    *     company?: string,
    *     phone?: string,
    *     addr?: string,
    *     extended_addr?: string,
    *     extended_addr2?: string,
    *     city?: string,
    *     state_code?: string,
    *     state?: string,
    *     zip?: string,
    *     country?: string,
    *     validation_status?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return UpdateAddressResponse
    */
    public function update(array $params, array $headers = []): UpdateAddressResponse;

}
?>