# Swagger\Client\BatchApi

All URIs are relative to *http://{host}:{port}/{contextPath}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteBatch**](BatchApi.md#deletebatch) | **DELETE** /batch/{id} | Delete
[**getBatch**](BatchApi.md#getbatch) | **GET** /batch/{id} | Get
[**getBatchStatistics**](BatchApi.md#getbatchstatistics) | **GET** /batch/statistics | Get Statistics
[**getBatchStatisticsCount**](BatchApi.md#getbatchstatisticscount) | **GET** /batch/statistics/count | Get Statistics Count
[**getBatches**](BatchApi.md#getbatches) | **GET** /batch | Get List
[**getBatchesCount**](BatchApi.md#getbatchescount) | **GET** /batch/count | Get List Count
[**updateBatchSuspensionState**](BatchApi.md#updatebatchsuspensionstate) | **PUT** /batch/{id}/suspended | Activate/Suspend

# **deleteBatch**
> deleteBatch($id, $cascade)

Delete

Deletes a batch by id, including all related jobs and job definitions. Optionally also deletes the batch history.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\BatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the batch to be deleted.
$cascade = true; // bool | `true`, if the historic batch and historic job logs for this batch should also be deleted.

try {
    $apiInstance->deleteBatch($id, $cascade);
} catch (Exception $e) {
    echo 'Exception when calling BatchApi->deleteBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the batch to be deleted. |
 **cascade** | **bool**| &#x60;true&#x60;, if the historic batch and historic job logs for this batch should also be deleted. | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBatch**
> \Swagger\Client\Model\BatchDto getBatch($id)

Get

Retrieves a batch by id, according to the Batch interface in the engine.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\BatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the batch to be retrieved.

try {
    $result = $apiInstance->getBatch($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchApi->getBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the batch to be retrieved. |

### Return type

[**\Swagger\Client\Model\BatchDto**](../Model/BatchDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBatchStatistics**
> \Swagger\Client\Model\BatchStatisticsDto[] getBatchStatistics($sort_by, $sort_order, $first_result, $max_results, $batch_id, $type, $tenant_id_in, $without_tenant_id, $suspended, $created_by, $started_before, $started_after, $with_failures, $without_failures)

Get Statistics

Queries for batch statistics that fulfill given parameters. Parameters may be the properties of batches, such as the id or type. The size of the result set can be retrieved by using the  [Get Batch Statistics Count](https://docs.camunda.org/manual/7.21/reference/rest/batch/get-statistics-query-count/) method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\BatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sort_by = "sort_by_example"; // string | Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter.
$sort_order = "sort_order_example"; // string | Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter.
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.
$batch_id = "batch_id_example"; // string | Filter by batch id.
$type = "type_example"; // string | Filter by batch type. See the [User Guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/batch/#creating-a-batch) for more information about batch types.
$tenant_id_in = "tenant_id_in_example"; // string | Filter by a comma-separated list of `Strings`. A batch matches if it has one of the given tenant ids.
$without_tenant_id = true; // bool | Only include batches which belong to no tenant. Value can effectively only be `true`, as `false` is the default behavior.
$suspended = true; // bool | A `Boolean` value which indicates whether only active or suspended batches should be included. When the value is set to `true`, only suspended batches will be returned and when the value is set to `false`, only active batches will be returned.
$created_by = "created_by_example"; // string | Only include batches that were started by this user id.
$started_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only include batches that were started before the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$started_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only include batches that were started after the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$with_failures = true; // bool | Only include batches having jobs with failures. Value can only be `true`.
$without_failures = true; // bool | Only include batches having jobs without failures. Value can only be `true`.

try {
    $result = $apiInstance->getBatchStatistics($sort_by, $sort_order, $first_result, $max_results, $batch_id, $type, $tenant_id_in, $without_tenant_id, $suspended, $created_by, $started_before, $started_after, $with_failures, $without_failures);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchApi->getBatchStatistics: ', $e->getMessage(), PHP_EOL;
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
 **batch_id** | **string**| Filter by batch id. | [optional]
 **type** | **string**| Filter by batch type. See the [User Guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/batch/#creating-a-batch) for more information about batch types. | [optional]
 **tenant_id_in** | **string**| Filter by a comma-separated list of &#x60;Strings&#x60;. A batch matches if it has one of the given tenant ids. | [optional]
 **without_tenant_id** | **bool**| Only include batches which belong to no tenant. Value can effectively only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **suspended** | **bool**| A &#x60;Boolean&#x60; value which indicates whether only active or suspended batches should be included. When the value is set to &#x60;true&#x60;, only suspended batches will be returned and when the value is set to &#x60;false&#x60;, only active batches will be returned. | [optional]
 **created_by** | **string**| Only include batches that were started by this user id. | [optional]
 **started_before** | **\DateTime**| Only include batches that were started before the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **started_after** | **\DateTime**| Only include batches that were started after the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **with_failures** | **bool**| Only include batches having jobs with failures. Value can only be &#x60;true&#x60;. | [optional]
 **without_failures** | **bool**| Only include batches having jobs without failures. Value can only be &#x60;true&#x60;. | [optional]

### Return type

[**\Swagger\Client\Model\BatchStatisticsDto[]**](../Model/BatchStatisticsDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBatchStatisticsCount**
> \Swagger\Client\Model\CountResultDto getBatchStatisticsCount($batch_id, $type, $tenant_id_in, $without_tenant_id, $suspended, $created_by, $started_before, $started_after, $with_failures, $without_failures)

Get Statistics Count

Requests the number of batch statistics that fulfill the query criteria. Takes the same filtering parameters as the [Get Batch Statistics](https://docs.camunda.org/manual/7.21/reference/rest/batch/get-statistics-query/) method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\BatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$batch_id = "batch_id_example"; // string | Filter by batch id.
$type = "type_example"; // string | Filter by batch type. See the [User Guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/batch/#creating-a-batch) for more information about batch types.
$tenant_id_in = "tenant_id_in_example"; // string | Filter by a comma-separated list of `Strings`. A batch matches if it has one of the given tenant ids.
$without_tenant_id = true; // bool | Only include batches which belong to no tenant. Value can effectively only be `true`, as `false` is the default behavior.
$suspended = true; // bool | A `Boolean` value which indicates whether only active or suspended batches should be included. When the value is set to `true`, only suspended batches will be returned and when the value is set to `false`, only active batches will be returned.
$created_by = "created_by_example"; // string | Only include batches that were started by this user id.
$started_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only include batches that were started before the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$started_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only include batches that were started after the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$with_failures = true; // bool | Only include batches having jobs with failures. Value can only be `true`.
$without_failures = true; // bool | Only include batches having jobs without failures. Value can only be `true`.

try {
    $result = $apiInstance->getBatchStatisticsCount($batch_id, $type, $tenant_id_in, $without_tenant_id, $suspended, $created_by, $started_before, $started_after, $with_failures, $without_failures);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchApi->getBatchStatisticsCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_id** | **string**| Filter by batch id. | [optional]
 **type** | **string**| Filter by batch type. See the [User Guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/batch/#creating-a-batch) for more information about batch types. | [optional]
 **tenant_id_in** | **string**| Filter by a comma-separated list of &#x60;Strings&#x60;. A batch matches if it has one of the given tenant ids. | [optional]
 **without_tenant_id** | **bool**| Only include batches which belong to no tenant. Value can effectively only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **suspended** | **bool**| A &#x60;Boolean&#x60; value which indicates whether only active or suspended batches should be included. When the value is set to &#x60;true&#x60;, only suspended batches will be returned and when the value is set to &#x60;false&#x60;, only active batches will be returned. | [optional]
 **created_by** | **string**| Only include batches that were started by this user id. | [optional]
 **started_before** | **\DateTime**| Only include batches that were started before the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **started_after** | **\DateTime**| Only include batches that were started after the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **with_failures** | **bool**| Only include batches having jobs with failures. Value can only be &#x60;true&#x60;. | [optional]
 **without_failures** | **bool**| Only include batches having jobs without failures. Value can only be &#x60;true&#x60;. | [optional]

### Return type

[**\Swagger\Client\Model\CountResultDto**](../Model/CountResultDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBatches**
> \Swagger\Client\Model\BatchDto[] getBatches($sort_by, $sort_order, $first_result, $max_results, $batch_id, $type, $tenant_id_in, $without_tenant_id, $suspended, $created_by, $started_before, $started_after, $with_failures, $without_failures)

Get List

Queries for batches that fulfill given parameters. Parameters may be the properties of batches, such as the id or type. The size of the result set can be retrieved by using the [Get Batch Count](https://docs.camunda.org/manual/7.21/reference/rest/batch/get-query-count/) method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\BatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sort_by = "sort_by_example"; // string | Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter.
$sort_order = "sort_order_example"; // string | Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter.
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.
$batch_id = "batch_id_example"; // string | Filter by batch id.
$type = "type_example"; // string | Filter by batch type. See the [User Guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/batch/#creating-a-batch) for more information about batch types.
$tenant_id_in = "tenant_id_in_example"; // string | Filter by a comma-separated list of `Strings`. A batch matches if it has one of the given tenant ids.
$without_tenant_id = true; // bool | Only include batches which belong to no tenant. Value can effectively only be `true`, as `false` is the default behavior.
$suspended = true; // bool | A `Boolean` value which indicates whether only active or suspended batches should be included. When the value is set to `true`, only suspended batches will be returned and when the value is set to `false`, only active batches will be returned.
$created_by = "created_by_example"; // string | Only include batches that were started by this user id.
$started_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only include batches that were started before the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$started_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only include batches that were started after the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$with_failures = true; // bool | Only include batches having jobs with failures. Value can only be `true`.
$without_failures = true; // bool | Only include batches having jobs without failures. Value can only be `true`.

try {
    $result = $apiInstance->getBatches($sort_by, $sort_order, $first_result, $max_results, $batch_id, $type, $tenant_id_in, $without_tenant_id, $suspended, $created_by, $started_before, $started_after, $with_failures, $without_failures);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchApi->getBatches: ', $e->getMessage(), PHP_EOL;
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
 **batch_id** | **string**| Filter by batch id. | [optional]
 **type** | **string**| Filter by batch type. See the [User Guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/batch/#creating-a-batch) for more information about batch types. | [optional]
 **tenant_id_in** | **string**| Filter by a comma-separated list of &#x60;Strings&#x60;. A batch matches if it has one of the given tenant ids. | [optional]
 **without_tenant_id** | **bool**| Only include batches which belong to no tenant. Value can effectively only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **suspended** | **bool**| A &#x60;Boolean&#x60; value which indicates whether only active or suspended batches should be included. When the value is set to &#x60;true&#x60;, only suspended batches will be returned and when the value is set to &#x60;false&#x60;, only active batches will be returned. | [optional]
 **created_by** | **string**| Only include batches that were started by this user id. | [optional]
 **started_before** | **\DateTime**| Only include batches that were started before the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **started_after** | **\DateTime**| Only include batches that were started after the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **with_failures** | **bool**| Only include batches having jobs with failures. Value can only be &#x60;true&#x60;. | [optional]
 **without_failures** | **bool**| Only include batches having jobs without failures. Value can only be &#x60;true&#x60;. | [optional]

### Return type

[**\Swagger\Client\Model\BatchDto[]**](../Model/BatchDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBatchesCount**
> \Swagger\Client\Model\CountResultDto getBatchesCount($batch_id, $type, $tenant_id_in, $without_tenant_id, $suspended, $created_by, $started_before, $started_after, $with_failures, $without_failures)

Get List Count

Requests the number of batches that fulfill the query criteria. Takes the same filtering parameters as the [Get Batches](https://docs.camunda.org/manual/7.21/reference/rest/batch/get-query/) method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\BatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$batch_id = "batch_id_example"; // string | Filter by batch id.
$type = "type_example"; // string | Filter by batch type. See the [User Guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/batch/#creating-a-batch) for more information about batch types.
$tenant_id_in = "tenant_id_in_example"; // string | Filter by a comma-separated list of `Strings`. A batch matches if it has one of the given tenant ids.
$without_tenant_id = true; // bool | Only include batches which belong to no tenant. Value can effectively only be `true`, as `false` is the default behavior.
$suspended = true; // bool | A `Boolean` value which indicates whether only active or suspended batches should be included. When the value is set to `true`, only suspended batches will be returned and when the value is set to `false`, only active batches will be returned.
$created_by = "created_by_example"; // string | Only include batches that were started by this user id.
$started_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only include batches that were started before the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$started_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only include batches that were started after the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$with_failures = true; // bool | Only include batches having jobs with failures. Value can only be `true`.
$without_failures = true; // bool | Only include batches having jobs without failures. Value can only be `true`.

try {
    $result = $apiInstance->getBatchesCount($batch_id, $type, $tenant_id_in, $without_tenant_id, $suspended, $created_by, $started_before, $started_after, $with_failures, $without_failures);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchApi->getBatchesCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_id** | **string**| Filter by batch id. | [optional]
 **type** | **string**| Filter by batch type. See the [User Guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/batch/#creating-a-batch) for more information about batch types. | [optional]
 **tenant_id_in** | **string**| Filter by a comma-separated list of &#x60;Strings&#x60;. A batch matches if it has one of the given tenant ids. | [optional]
 **without_tenant_id** | **bool**| Only include batches which belong to no tenant. Value can effectively only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **suspended** | **bool**| A &#x60;Boolean&#x60; value which indicates whether only active or suspended batches should be included. When the value is set to &#x60;true&#x60;, only suspended batches will be returned and when the value is set to &#x60;false&#x60;, only active batches will be returned. | [optional]
 **created_by** | **string**| Only include batches that were started by this user id. | [optional]
 **started_before** | **\DateTime**| Only include batches that were started before the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **started_after** | **\DateTime**| Only include batches that were started after the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **with_failures** | **bool**| Only include batches having jobs with failures. Value can only be &#x60;true&#x60;. | [optional]
 **without_failures** | **bool**| Only include batches having jobs without failures. Value can only be &#x60;true&#x60;. | [optional]

### Return type

[**\Swagger\Client\Model\CountResultDto**](../Model/CountResultDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBatchSuspensionState**
> updateBatchSuspensionState($id, $body)

Activate/Suspend

Activates or suspends a batch by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\BatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the batch to activate or suspend.
$body = new \Swagger\Client\Model\SuspensionStateDto(); // \Swagger\Client\Model\SuspensionStateDto | 

try {
    $apiInstance->updateBatchSuspensionState($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling BatchApi->updateBatchSuspensionState: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the batch to activate or suspend. |
 **body** | [**\Swagger\Client\Model\SuspensionStateDto**](../Model/SuspensionStateDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

