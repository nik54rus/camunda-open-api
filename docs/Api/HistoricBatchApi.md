# Swagger\Client\HistoricBatchApi

All URIs are relative to *http://{host}:{port}/{contextPath}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteHistoricBatch**](HistoricBatchApi.md#deletehistoricbatch) | **DELETE** /history/batch/{id} | Delete Historic Batch
[**getCleanableHistoricBatchesReport**](HistoricBatchApi.md#getcleanablehistoricbatchesreport) | **GET** /history/batch/cleanable-batch-report | Get Cleanable Batch Report
[**getCleanableHistoricBatchesReportCount**](HistoricBatchApi.md#getcleanablehistoricbatchesreportcount) | **GET** /history/batch/cleanable-batch-report/count | Get Cleanable Batch Report Count
[**getHistoricBatch**](HistoricBatchApi.md#gethistoricbatch) | **GET** /history/batch/{id} | Get Historic Batch
[**getHistoricBatches**](HistoricBatchApi.md#gethistoricbatches) | **GET** /history/batch | Get Historic Batches
[**getHistoricBatchesCount**](HistoricBatchApi.md#gethistoricbatchescount) | **GET** /history/batch/count | Get Historic Batch Count
[**setRemovalTimeAsyncHistoricBatch**](HistoricBatchApi.md#setremovaltimeasynchistoricbatch) | **POST** /history/batch/set-removal-time | Set Removal Time Async (POST)

# **deleteHistoricBatch**
> deleteHistoricBatch($id)

Delete Historic Batch

Deletes a historic batch by id, including related historic job logs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\HistoricBatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the batch to be deleted.

try {
    $apiInstance->deleteHistoricBatch($id);
} catch (Exception $e) {
    echo 'Exception when calling HistoricBatchApi->deleteHistoricBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the batch to be deleted. |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCleanableHistoricBatchesReport**
> \Swagger\Client\Model\CleanableHistoricBatchReportResultDto[] getCleanableHistoricBatchesReport($sort_by, $sort_order, $first_result, $max_results)

Get Cleanable Batch Report

Retrieves a report about a historic batch operations relevant to history cleanup (see [History cleanup](https://docs.camunda.org/manual/7.21/user-guide/process-engine/history/#history-cleanup) ) so that you can tune the history time to live. These reports include the count of the finished batches, cleanable batches and type of the batch. The size of the result set can be retrieved by using the [Get Cleanable Batch Report Count](https://docs.camunda.org/manual/7.21/reference/rest/history/batch/get-cleanable-batch-report-count/) method.  **Please note:** The history time to live for batch operations does not support [Multi-Tenancy](https://docs.camunda.org/manual/7.21/user-guide/process-engine/multi-tenancy.md). The report will return an information for all batch operations (for all tenants) if you have permissions to see the history.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\HistoricBatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sort_by = "sort_by_example"; // string | Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter.
$sort_order = "sort_order_example"; // string | Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter.
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.

try {
    $result = $apiInstance->getCleanableHistoricBatchesReport($sort_by, $sort_order, $first_result, $max_results);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricBatchApi->getCleanableHistoricBatchesReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort_by** | **string**| Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter. | [optional]
 **sort_order** | **string**| Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter. | [optional]
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]

### Return type

[**\Swagger\Client\Model\CleanableHistoricBatchReportResultDto[]**](../Model/CleanableHistoricBatchReportResultDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCleanableHistoricBatchesReportCount**
> \Swagger\Client\Model\CountResultDto getCleanableHistoricBatchesReportCount()

Get Cleanable Batch Report Count

Queries for the number of report results about a historic batch operations relevant to history cleanup (see [History cleanup](https://docs.camunda.org/manual/7.21/user-guide/process-engine/history/#history-cleanup) ). Takes the same parameters as the [Get Cleanable Batch Report](https://docs.camunda.org/manual/7.21/reference/rest/history/batch/get-cleanable-batch-report/) method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\HistoricBatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCleanableHistoricBatchesReportCount();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricBatchApi->getCleanableHistoricBatchesReportCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\CountResultDto**](../Model/CountResultDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHistoricBatch**
> \Swagger\Client\Model\HistoricBatchDto getHistoricBatch($id)

Get Historic Batch

Retrieves a historic batch by id, according to the `HistoricBatch` interface in the engine.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\HistoricBatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the historic batch to be retrieved.

try {
    $result = $apiInstance->getHistoricBatch($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricBatchApi->getHistoricBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the historic batch to be retrieved. |

### Return type

[**\Swagger\Client\Model\HistoricBatchDto**](../Model/HistoricBatchDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHistoricBatches**
> \Swagger\Client\Model\HistoricBatchDto[] getHistoricBatches($batch_id, $type, $completed, $tenant_id_in, $without_tenant_id, $sort_by, $sort_order, $first_result, $max_results)

Get Historic Batches

Queries for historic batches that fulfill given parameters. Parameters may be the properties of batches, such as the id or type. The size of the result set can be retrieved by using the [Get Historic Batch Count](https://docs.camunda.org/manual/7.21/reference/rest/history/batch/get-query-count/) method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\HistoricBatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$batch_id = "batch_id_example"; // string | Filter by batch id.
$type = "type_example"; // string | Filter by batch type. See the [User Guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/batch/#creating-a-batch) for more information about batch types.
$completed = true; // bool | Filter completed or not completed batches. If the value is `true`, only completed batches, i.e., end time is set, are returned. Otherwise, if the value is `false`, only running batches, i.e., end time is null, are returned.
$tenant_id_in = "tenant_id_in_example"; // string | Filter by a comma-separated list of tenant ids. A batch matches if it has one of the given tenant ids.
$without_tenant_id = true; // bool | Only include batches which belong to no tenant. Value can effectively only be `true`, as `false` is the default behavior.
$sort_by = "sort_by_example"; // string | Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter.
$sort_order = "sort_order_example"; // string | Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter.
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.

try {
    $result = $apiInstance->getHistoricBatches($batch_id, $type, $completed, $tenant_id_in, $without_tenant_id, $sort_by, $sort_order, $first_result, $max_results);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricBatchApi->getHistoricBatches: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_id** | **string**| Filter by batch id. | [optional]
 **type** | **string**| Filter by batch type. See the [User Guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/batch/#creating-a-batch) for more information about batch types. | [optional]
 **completed** | **bool**| Filter completed or not completed batches. If the value is &#x60;true&#x60;, only completed batches, i.e., end time is set, are returned. Otherwise, if the value is &#x60;false&#x60;, only running batches, i.e., end time is null, are returned. | [optional]
 **tenant_id_in** | **string**| Filter by a comma-separated list of tenant ids. A batch matches if it has one of the given tenant ids. | [optional]
 **without_tenant_id** | **bool**| Only include batches which belong to no tenant. Value can effectively only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **sort_by** | **string**| Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter. | [optional]
 **sort_order** | **string**| Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter. | [optional]
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]

### Return type

[**\Swagger\Client\Model\HistoricBatchDto[]**](../Model/HistoricBatchDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHistoricBatchesCount**
> \Swagger\Client\Model\CountResultDto getHistoricBatchesCount($batch_id, $type, $completed, $tenant_id_in, $without_tenant_id)

Get Historic Batch Count

Requests the number of historic batches that fulfill the query criteria. Takes the same filtering parameters as the [Get Historic Batches](https://docs.camunda.org/manual/7.21/reference/rest/history/batch/get-query/) method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\HistoricBatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$batch_id = "batch_id_example"; // string | Filter by batch id.
$type = "type_example"; // string | Filter by batch type. See the [User Guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/batch/#creating-a-batch) for more information about batch types.
$completed = true; // bool | Filter completed or not completed batches. If the value is `true`, only completed batches, i.e., end time is set, are returned. Otherwise, if the value is `false`, only running batches, i.e., end time is null, are returned.
$tenant_id_in = "tenant_id_in_example"; // string | Filter by a comma-separated list of tenant ids. A batch matches if it has one of the given tenant ids.
$without_tenant_id = true; // bool | Only include batches which belong to no tenant. Value can effectively only be `true`, as `false` is the default behavior.

try {
    $result = $apiInstance->getHistoricBatchesCount($batch_id, $type, $completed, $tenant_id_in, $without_tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricBatchApi->getHistoricBatchesCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_id** | **string**| Filter by batch id. | [optional]
 **type** | **string**| Filter by batch type. See the [User Guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/batch/#creating-a-batch) for more information about batch types. | [optional]
 **completed** | **bool**| Filter completed or not completed batches. If the value is &#x60;true&#x60;, only completed batches, i.e., end time is set, are returned. Otherwise, if the value is &#x60;false&#x60;, only running batches, i.e., end time is null, are returned. | [optional]
 **tenant_id_in** | **string**| Filter by a comma-separated list of tenant ids. A batch matches if it has one of the given tenant ids. | [optional]
 **without_tenant_id** | **bool**| Only include batches which belong to no tenant. Value can effectively only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]

### Return type

[**\Swagger\Client\Model\CountResultDto**](../Model/CountResultDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setRemovalTimeAsyncHistoricBatch**
> \Swagger\Client\Model\BatchDto setRemovalTimeAsyncHistoricBatch($body)

Set Removal Time Async (POST)

Sets the removal time to multiple historic batches asynchronously (batch).  At least __historicBatchIds__ or __historicBatchQuery__ has to be provided. If both are provided, all instances matching query criterion and instances from the list will be updated with a removal time.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\HistoricBatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SetRemovalTimeToHistoricBatchesDto(); // \Swagger\Client\Model\SetRemovalTimeToHistoricBatchesDto | 

try {
    $result = $apiInstance->setRemovalTimeAsyncHistoricBatch($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricBatchApi->setRemovalTimeAsyncHistoricBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SetRemovalTimeToHistoricBatchesDto**](../Model/SetRemovalTimeToHistoricBatchesDto.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\BatchDto**](../Model/BatchDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

