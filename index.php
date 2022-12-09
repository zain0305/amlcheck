<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountCOMPANYReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = "zain"; // string | unique id of the client
$account_id = "asas"; // string | unique id of the account

try {
    $result = $apiInstance->apiClientsClientIdAccountsAccountIdReportsCompanyGet($client_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountCOMPANYReportApi->apiClientsClientIdAccountsAccountIdReportsCompanyGet: ', $e->getMessage(), PHP_EOL;
}

?>