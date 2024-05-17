# Camunda\Client\HistoryCleanupApi

All URIs are relative to *http://{host}:{port}/{contextPath}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cleanupAsync**](HistoryCleanupApi.md#cleanupasync) | **POST** /history/cleanup | Clean up history (POST)
[**findCleanupJob**](HistoryCleanupApi.md#findcleanupjob) | **GET** /history/cleanup/job | Find clean up history job (GET)
[**findCleanupJobs**](HistoryCleanupApi.md#findcleanupjobs) | **GET** /history/cleanup/jobs | Find clean up history jobs (GET)
[**getHistoryCleanupConfiguration**](HistoryCleanupApi.md#gethistorycleanupconfiguration) | **GET** /history/cleanup/configuration | Get History Cleanup Configuration

# **cleanupAsync**
> \Camunda\Client\Model\JobDto cleanupAsync($immediately_due)

Clean up history (POST)

Schedules asynchronous history cleanup (See [History cleanup](https://docs.camunda.org/manual/7.21/user-guide/process-engine/history/#history-cleanup)).  **Note:** This endpoint will return at most a single history cleanup job. Since version `7.9.0` it is possible to configure multiple [parallel history cleanup jobs](https://docs.camunda.org/manual/7.21/user-guide/process-engine/history/#parallel-execution). Use [`GET /history/cleanup/jobs`](https://docs.camunda.org/manual/7.21/reference/rest/history/history-cleanup/get-history-cleanup-jobs) to find all the available history cleanup jobs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\HistoryCleanupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$immediately_due = true; // bool | When true the job will be scheduled for nearest future. When `false`, the job will be scheduled for next batch window start time. Default is `true`.

try {
    $result = $apiInstance->cleanupAsync($immediately_due);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryCleanupApi->cleanupAsync: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **immediately_due** | **bool**| When true the job will be scheduled for nearest future. When &#x60;false&#x60;, the job will be scheduled for next batch window start time. Default is &#x60;true&#x60;. | [optional]

### Return type

[**\Camunda\Client\Model\JobDto**](../Model/JobDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findCleanupJob**
> \Camunda\Client\Model\JobDto findCleanupJob()

Find clean up history job (GET)

**Deprecated!** Use `GET /history/cleanup/jobs` instead.  Finds history cleanup job (See [History cleanup](https://docs.camunda.org/manual/7.21/user-guide/process-engine/history/#history-cleanup)).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\HistoryCleanupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->findCleanupJob();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryCleanupApi->findCleanupJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Camunda\Client\Model\JobDto**](../Model/JobDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findCleanupJobs**
> \Camunda\Client\Model\JobDto[] findCleanupJobs()

Find clean up history jobs (GET)

Finds history cleanup jobs (See [History cleanup](https://docs.camunda.org/manual/7.21/user-guide/process-engine/history/#history-cleanup)).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\HistoryCleanupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->findCleanupJobs();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryCleanupApi->findCleanupJobs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Camunda\Client\Model\JobDto[]**](../Model/JobDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHistoryCleanupConfiguration**
> \Camunda\Client\Model\HistoryCleanupConfigurationDto getHistoryCleanupConfiguration()

Get History Cleanup Configuration

Retrieves history cleanup batch window configuration (See [History cleanup](https://docs.camunda.org/manual/7.21/user-guide/process-engine/history/#history-cleanup)).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\HistoryCleanupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getHistoryCleanupConfiguration();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryCleanupApi->getHistoryCleanupConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Camunda\Client\Model\HistoryCleanupConfigurationDto**](../Model/HistoryCleanupConfigurationDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

