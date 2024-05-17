# Camunda\Client\EngineApi

All URIs are relative to *http://{host}:{port}/{contextPath}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getProcessEngineNames**](EngineApi.md#getprocessenginenames) | **GET** /engine | Get List

# **getProcessEngineNames**
> \Camunda\Client\Model\ProcessEngineDto[] getProcessEngineNames()

Get List

Retrieves the names of all process engines available on your platform. **Note**: You cannot prepend `/engine/{name}` to this method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\EngineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getProcessEngineNames();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EngineApi->getProcessEngineNames: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Camunda\Client\Model\ProcessEngineDto[]**](../Model/ProcessEngineDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

