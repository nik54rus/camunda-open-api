# Swagger\Client\MetricsApi

All URIs are relative to *http://{host}:{port}/{contextPath}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteTaskMetrics**](MetricsApi.md#deletetaskmetrics) | **DELETE** /metrics/task-worker | Delete Task Worker Metrics
[**getMetrics**](MetricsApi.md#getmetrics) | **GET** /metrics/{metrics-name}/sum | Get Sum
[**interval**](MetricsApi.md#interval) | **GET** /metrics | Get Metrics in Interval

# **deleteTaskMetrics**
> deleteTaskMetrics($date)

Delete Task Worker Metrics

Deletes all task worker metrics prior to the given date or all if no date is provided.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date prior to which all task worker metrics should be deleted.

try {
    $apiInstance->deleteTaskMetrics($date);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->deleteTaskMetrics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date** | **\DateTime**| The date prior to which all task worker metrics should be deleted. | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMetrics**
> \Swagger\Client\Model\MetricsResultDto getMetrics($metrics_name, $start_date, $end_date)

Get Sum

Retrieves the `sum` (count) for a given metric.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$metrics_name = "metrics_name_example"; // string | The name of the metric.
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date (inclusive).
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date (exclusive).

try {
    $result = $apiInstance->getMetrics($metrics_name, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->getMetrics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **metrics_name** | **string**| The name of the metric. |
 **start_date** | **\DateTime**| The start date (inclusive). | [optional]
 **end_date** | **\DateTime**| The end date (exclusive). | [optional]

### Return type

[**\Swagger\Client\Model\MetricsResultDto**](../Model/MetricsResultDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **interval**
> \Swagger\Client\Model\MetricsIntervalResultDto[] interval($name, $reporter, $start_date, $end_date, $first_result, $max_results, $interval, $aggregate_by_reporter)

Get Metrics in Interval

Retrieves a list of metrics, aggregated for a given interval.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | The name of the metric.
$reporter = "reporter_example"; // string | The name of the reporter (host), on which the metrics was logged. This will have value provided by the [hostname configuration property](https://docs.camunda.org/manual/7.21/reference/deployment-descriptors/tags/process-engine/#hostname).
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date (inclusive).
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date (exclusive).
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.
$interval = "900"; // string | The interval for which the metrics should be aggregated. Time unit is seconds. Default: The interval is set to 15 minutes (900 seconds).
$aggregate_by_reporter = "aggregate_by_reporter_example"; // string | Aggregate metrics by reporter.

try {
    $result = $apiInstance->interval($name, $reporter, $start_date, $end_date, $first_result, $max_results, $interval, $aggregate_by_reporter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->interval: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the metric. | [optional]
 **reporter** | **string**| The name of the reporter (host), on which the metrics was logged. This will have value provided by the [hostname configuration property](https://docs.camunda.org/manual/7.21/reference/deployment-descriptors/tags/process-engine/#hostname). | [optional]
 **start_date** | **\DateTime**| The start date (inclusive). | [optional]
 **end_date** | **\DateTime**| The end date (exclusive). | [optional]
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]
 **interval** | **string**| The interval for which the metrics should be aggregated. Time unit is seconds. Default: The interval is set to 15 minutes (900 seconds). | [optional] [default to 900]
 **aggregate_by_reporter** | **string**| Aggregate metrics by reporter. | [optional]

### Return type

[**\Swagger\Client\Model\MetricsIntervalResultDto[]**](../Model/MetricsIntervalResultDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

