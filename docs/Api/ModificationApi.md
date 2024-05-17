# Camunda\Client\ModificationApi

All URIs are relative to *http://{host}:{port}/{contextPath}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**executeModification**](ModificationApi.md#executemodification) | **POST** /modification/execute | Execute Modification
[**executeModificationAsync**](ModificationApi.md#executemodificationasync) | **POST** /modification/executeAsync | Execute Modification Async (Batch)

# **executeModification**
> executeModification($body)

Execute Modification

Executes a modification synchronously for multiple process instances. To modify a single process instance, use the [Modify Process Instance Execution State](https://docs.camunda.org/manual/7.21/reference/rest/process-instance/post-modification/) method. To execute a modification asynchronously, use the [Execute Modification Async (Batch)](https://docs.camunda.org/manual/7.21/reference/rest/modification/post-modification-async/) method.  For more information about the difference between synchronous and asynchronous execution of a modification, please refer to the related section of the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/process-instance-migration.md#executing-a-migration-plan).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\ModificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Camunda\Client\Model\ModificationDto(); // \Camunda\Client\Model\ModificationDto | 

try {
    $apiInstance->executeModification($body);
} catch (Exception $e) {
    echo 'Exception when calling ModificationApi->executeModification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Camunda\Client\Model\ModificationDto**](../Model/ModificationDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **executeModificationAsync**
> \Camunda\Client\Model\BatchDto executeModificationAsync($body)

Execute Modification Async (Batch)

Executes a modification asynchronously for multiple process instances. To execute a modification synchronously, use the [Execute Modification](https://docs.camunda.org/manual/7.21/reference/rest/modification/post-modification-sync/) method.  For more information about the difference between synchronous and asynchronous execution of a modification, please refer to the related section of the [user guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/process-instance-migration.md#executing-a-migration-plan).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\ModificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Camunda\Client\Model\ModificationDto(); // \Camunda\Client\Model\ModificationDto | 

try {
    $result = $apiInstance->executeModificationAsync($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModificationApi->executeModificationAsync: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Camunda\Client\Model\ModificationDto**](../Model/ModificationDto.md)|  | [optional]

### Return type

[**\Camunda\Client\Model\BatchDto**](../Model/BatchDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

