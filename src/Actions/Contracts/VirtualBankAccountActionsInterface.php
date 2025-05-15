<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\VirtualBankAccountResponse\CreateUsingPermanentTokenVirtualBankAccountResponse;
use Chargebee\Responses\VirtualBankAccountResponse\RetrieveVirtualBankAccountResponse;
use Chargebee\Responses\VirtualBankAccountResponse\SyncFundVirtualBankAccountResponse;
use Chargebee\Responses\VirtualBankAccountResponse\DeleteVirtualBankAccountResponse;
use Chargebee\Responses\VirtualBankAccountResponse\ListVirtualBankAccountResponse;
use Chargebee\Responses\VirtualBankAccountResponse\CreateVirtualBankAccountResponse;
use Chargebee\Responses\VirtualBankAccountResponse\DeleteLocalVirtualBankAccountResponse;

Interface VirtualBankAccountActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/virtual_bank_accounts?lang=php#local_delete_a_virtual_bank_account
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return DeleteLocalVirtualBankAccountResponse
    */
    public function deleteLocal(string $id, array $headers = []): DeleteLocalVirtualBankAccountResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/virtual_bank_accounts?lang=php#delete_a_virtual_bank_account
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return DeleteVirtualBankAccountResponse
    */
    public function delete(string $id, array $headers = []): DeleteVirtualBankAccountResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/virtual_bank_accounts?lang=php#list_virtual_bank_accounts
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     customer_id?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * updated_at?: array{
    *     after?: mixed,
    *     before?: mixed,
    *     on?: mixed,
    *     between?: mixed,
    *     },
    * created_at?: array{
    *     after?: mixed,
    *     before?: mixed,
    *     on?: mixed,
    *     between?: mixed,
    *     },
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ListVirtualBankAccountResponse
    */
    public function all(array $params = [], array $headers = []): ListVirtualBankAccountResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/virtual_bank_accounts?lang=php#create_a_virtual_bank_account
    *   @param array{
    *     customer_id?: string,
    *     email?: string,
    *     scheme?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateVirtualBankAccountResponse
    */
    public function create(array $params, array $headers = []): CreateVirtualBankAccountResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/virtual_bank_accounts?lang=php#charge_virtual_bank_account
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return SyncFundVirtualBankAccountResponse
    */
    public function syncFund(string $id, array $headers = []): SyncFundVirtualBankAccountResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/virtual_bank_accounts?lang=php#retrieve_a_virtual_bank_account
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveVirtualBankAccountResponse
    */
    public function retrieve(string $id, array $headers = []): RetrieveVirtualBankAccountResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/virtual_bank_accounts?lang=php#create_a_virtual_bank_account_using_permanent_token
    *   @param array{
    *     customer_id?: string,
    *     reference_id?: string,
    *     scheme?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateUsingPermanentTokenVirtualBankAccountResponse
    */
    public function createUsingPermanentToken(array $params, array $headers = []): CreateUsingPermanentTokenVirtualBankAccountResponse;

}
?>