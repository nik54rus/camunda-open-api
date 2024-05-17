# Camunda\Client\HistoricJobLogApi

All URIs are relative to *http://{host}:{port}/{contextPath}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getHistoricJobLog**](HistoricJobLogApi.md#gethistoricjoblog) | **GET** /history/job-log/{id} | Get Job Log
[**getHistoricJobLogs**](HistoricJobLogApi.md#gethistoricjoblogs) | **GET** /history/job-log | Get Job Logs
[**getHistoricJobLogsCount**](HistoricJobLogApi.md#gethistoricjoblogscount) | **GET** /history/job-log/count | Get Job Log Count
[**getStacktraceHistoricJobLog**](HistoricJobLogApi.md#getstacktracehistoricjoblog) | **GET** /history/job-log/{id}/stacktrace | Get Job Log Exception Stacktrace
[**queryHistoricJobLogs**](HistoricJobLogApi.md#queryhistoricjoblogs) | **POST** /history/job-log | Get Job Logs (POST)
[**queryHistoricJobLogsCount**](HistoricJobLogApi.md#queryhistoricjoblogscount) | **POST** /history/job-log/count | Get Job Log Count (POST)

# **getHistoricJobLog**
> \Camunda\Client\Model\HistoricJobLogDto getHistoricJobLog($id)

Get Job Log

Retrieves a historic job log by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\HistoricJobLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the log entry.

try {
    $result = $apiInstance->getHistoricJobLog($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricJobLogApi->getHistoricJobLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the log entry. |

### Return type

[**\Camunda\Client\Model\HistoricJobLogDto**](../Model/HistoricJobLogDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHistoricJobLogs**
> \Camunda\Client\Model\HistoricJobLogDto[] getHistoricJobLogs($log_id, $job_id, $job_exception_message, $job_definition_id, $job_definition_type, $job_definition_configuration, $activity_id_in, $failed_activity_id_in, $execution_id_in, $process_instance_id, $process_definition_id, $process_definition_key, $deployment_id, $tenant_id_in, $without_tenant_id, $hostname, $job_priority_lower_than_or_equals, $job_priority_higher_than_or_equals, $creation_log, $failure_log, $success_log, $deletion_log, $sort_by, $sort_order, $first_result, $max_results)

Get Job Logs

Queries for historic job logs that fulfill the given parameters. The size of the result set can be retrieved by using the [Get Job Log Count](https://docs.camunda.org/manual/7.21/reference/rest/history/job-log/get-job-log-query-count/) method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\HistoricJobLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$log_id = "log_id_example"; // string | Filter by historic job log id.
$job_id = "job_id_example"; // string | Filter by job id.
$job_exception_message = "job_exception_message_example"; // string | Filter by job exception message.
$job_definition_id = "job_definition_id_example"; // string | Filter by job definition id.
$job_definition_type = "job_definition_type_example"; // string | Filter by job definition type. See the [User Guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/the-job-executor/#job-creation) for more information about job definition types.
$job_definition_configuration = "job_definition_configuration_example"; // string | Filter by job definition configuration.
$activity_id_in = "activity_id_in_example"; // string | Only include historic job logs which belong to one of the passed activity ids.
$failed_activity_id_in = "failed_activity_id_in_example"; // string | Only include historic job logs which belong to failures of one of the passed activity ids.
$execution_id_in = "execution_id_in_example"; // string | Only include historic job logs which belong to one of the passed execution ids.
$process_instance_id = "process_instance_id_example"; // string | Filter by process instance id.
$process_definition_id = "process_definition_id_example"; // string | Filter by process definition id.
$process_definition_key = "process_definition_key_example"; // string | Filter by process definition key.
$deployment_id = "deployment_id_example"; // string | Filter by deployment id.
$tenant_id_in = "tenant_id_in_example"; // string | Only include historic job log entries which belong to one of the passed and comma- separated tenant ids.
$without_tenant_id = true; // bool | Only include historic job log entries that belong to no tenant. Value may only be `true`, as `false` is the default behavior.
$hostname = "hostname_example"; // string | Filter by hostname.
$job_priority_lower_than_or_equals = 789; // int | Only include logs for which the associated job had a priority lower than or equal to the given value. Value must be a valid `long` value.
$job_priority_higher_than_or_equals = 789; // int | Only include logs for which the associated job had a priority higher than or equal to the given value. Value must be a valid `long` value.
$creation_log = true; // bool | Only include creation logs. Value may only be `true`, as `false` is the default behavior.
$failure_log = true; // bool | Only include failure logs. Value may only be `true`, as `false` is the default behavior.
$success_log = true; // bool | Only include success logs. Value may only be `true`, as `false` is the default behavior.
$deletion_log = true; // bool | Only include deletion logs. Value may only be `true`, as `false` is the default behavior.
$sort_by = "sort_by_example"; // string | Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter.
$sort_order = "sort_order_example"; // string | Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter.
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.

try {
    $result = $apiInstance->getHistoricJobLogs($log_id, $job_id, $job_exception_message, $job_definition_id, $job_definition_type, $job_definition_configuration, $activity_id_in, $failed_activity_id_in, $execution_id_in, $process_instance_id, $process_definition_id, $process_definition_key, $deployment_id, $tenant_id_in, $without_tenant_id, $hostname, $job_priority_lower_than_or_equals, $job_priority_higher_than_or_equals, $creation_log, $failure_log, $success_log, $deletion_log, $sort_by, $sort_order, $first_result, $max_results);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricJobLogApi->getHistoricJobLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **log_id** | **string**| Filter by historic job log id. | [optional]
 **job_id** | **string**| Filter by job id. | [optional]
 **job_exception_message** | **string**| Filter by job exception message. | [optional]
 **job_definition_id** | **string**| Filter by job definition id. | [optional]
 **job_definition_type** | **string**| Filter by job definition type. See the [User Guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/the-job-executor/#job-creation) for more information about job definition types. | [optional]
 **job_definition_configuration** | **string**| Filter by job definition configuration. | [optional]
 **activity_id_in** | **string**| Only include historic job logs which belong to one of the passed activity ids. | [optional]
 **failed_activity_id_in** | **string**| Only include historic job logs which belong to failures of one of the passed activity ids. | [optional]
 **execution_id_in** | **string**| Only include historic job logs which belong to one of the passed execution ids. | [optional]
 **process_instance_id** | **string**| Filter by process instance id. | [optional]
 **process_definition_id** | **string**| Filter by process definition id. | [optional]
 **process_definition_key** | **string**| Filter by process definition key. | [optional]
 **deployment_id** | **string**| Filter by deployment id. | [optional]
 **tenant_id_in** | **string**| Only include historic job log entries which belong to one of the passed and comma- separated tenant ids. | [optional]
 **without_tenant_id** | **bool**| Only include historic job log entries that belong to no tenant. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **hostname** | **string**| Filter by hostname. | [optional]
 **job_priority_lower_than_or_equals** | **int**| Only include logs for which the associated job had a priority lower than or equal to the given value. Value must be a valid &#x60;long&#x60; value. | [optional]
 **job_priority_higher_than_or_equals** | **int**| Only include logs for which the associated job had a priority higher than or equal to the given value. Value must be a valid &#x60;long&#x60; value. | [optional]
 **creation_log** | **bool**| Only include creation logs. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **failure_log** | **bool**| Only include failure logs. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **success_log** | **bool**| Only include success logs. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **deletion_log** | **bool**| Only include deletion logs. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **sort_by** | **string**| Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter. | [optional]
 **sort_order** | **string**| Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter. | [optional]
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]

### Return type

[**\Camunda\Client\Model\HistoricJobLogDto[]**](../Model/HistoricJobLogDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHistoricJobLogsCount**
> \Camunda\Client\Model\CountResultDto getHistoricJobLogsCount($log_id, $job_id, $job_exception_message, $job_definition_id, $job_definition_type, $job_definition_configuration, $activity_id_in, $failed_activity_id_in, $execution_id_in, $process_instance_id, $process_definition_id, $process_definition_key, $deployment_id, $tenant_id_in, $without_tenant_id, $hostname, $job_priority_lower_than_or_equals, $job_priority_higher_than_or_equals, $creation_log, $failure_log, $success_log, $deletion_log)

Get Job Log Count

Queries for the number of historic job logs that fulfill the given parameters. Takes the same parameters as the [Get Job Logs](https://docs.camunda.org/manual/7.21/reference/rest/history/job-log/get-job-log-query/) method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\HistoricJobLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$log_id = "log_id_example"; // string | Filter by historic job log id.
$job_id = "job_id_example"; // string | Filter by job id.
$job_exception_message = "job_exception_message_example"; // string | Filter by job exception message.
$job_definition_id = "job_definition_id_example"; // string | Filter by job definition id.
$job_definition_type = "job_definition_type_example"; // string | Filter by job definition type. See the [User Guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/the-job-executor/#job-creation) for more information about job definition types.
$job_definition_configuration = "job_definition_configuration_example"; // string | Filter by job definition configuration.
$activity_id_in = "activity_id_in_example"; // string | Only include historic job logs which belong to one of the passed activity ids.
$failed_activity_id_in = "failed_activity_id_in_example"; // string | Only include historic job logs which belong to failures of one of the passed activity ids.
$execution_id_in = "execution_id_in_example"; // string | Only include historic job logs which belong to one of the passed execution ids.
$process_instance_id = "process_instance_id_example"; // string | Filter by process instance id.
$process_definition_id = "process_definition_id_example"; // string | Filter by process definition id.
$process_definition_key = "process_definition_key_example"; // string | Filter by process definition key.
$deployment_id = "deployment_id_example"; // string | Filter by deployment id.
$tenant_id_in = "tenant_id_in_example"; // string | Only include historic job log entries which belong to one of the passed and comma- separated tenant ids.
$without_tenant_id = true; // bool | Only include historic job log entries that belong to no tenant. Value may only be `true`, as `false` is the default behavior.
$hostname = "hostname_example"; // string | Filter by hostname.
$job_priority_lower_than_or_equals = 789; // int | Only include logs for which the associated job had a priority lower than or equal to the given value. Value must be a valid `long` value.
$job_priority_higher_than_or_equals = 789; // int | Only include logs for which the associated job had a priority higher than or equal to the given value. Value must be a valid `long` value.
$creation_log = true; // bool | Only include creation logs. Value may only be `true`, as `false` is the default behavior.
$failure_log = true; // bool | Only include failure logs. Value may only be `true`, as `false` is the default behavior.
$success_log = true; // bool | Only include success logs. Value may only be `true`, as `false` is the default behavior.
$deletion_log = true; // bool | Only include deletion logs. Value may only be `true`, as `false` is the default behavior.

try {
    $result = $apiInstance->getHistoricJobLogsCount($log_id, $job_id, $job_exception_message, $job_definition_id, $job_definition_type, $job_definition_configuration, $activity_id_in, $failed_activity_id_in, $execution_id_in, $process_instance_id, $process_definition_id, $process_definition_key, $deployment_id, $tenant_id_in, $without_tenant_id, $hostname, $job_priority_lower_than_or_equals, $job_priority_higher_than_or_equals, $creation_log, $failure_log, $success_log, $deletion_log);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricJobLogApi->getHistoricJobLogsCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **log_id** | **string**| Filter by historic job log id. | [optional]
 **job_id** | **string**| Filter by job id. | [optional]
 **job_exception_message** | **string**| Filter by job exception message. | [optional]
 **job_definition_id** | **string**| Filter by job definition id. | [optional]
 **job_definition_type** | **string**| Filter by job definition type. See the [User Guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/the-job-executor/#job-creation) for more information about job definition types. | [optional]
 **job_definition_configuration** | **string**| Filter by job definition configuration. | [optional]
 **activity_id_in** | **string**| Only include historic job logs which belong to one of the passed activity ids. | [optional]
 **failed_activity_id_in** | **string**| Only include historic job logs which belong to failures of one of the passed activity ids. | [optional]
 **execution_id_in** | **string**| Only include historic job logs which belong to one of the passed execution ids. | [optional]
 **process_instance_id** | **string**| Filter by process instance id. | [optional]
 **process_definition_id** | **string**| Filter by process definition id. | [optional]
 **process_definition_key** | **string**| Filter by process definition key. | [optional]
 **deployment_id** | **string**| Filter by deployment id. | [optional]
 **tenant_id_in** | **string**| Only include historic job log entries which belong to one of the passed and comma- separated tenant ids. | [optional]
 **without_tenant_id** | **bool**| Only include historic job log entries that belong to no tenant. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **hostname** | **string**| Filter by hostname. | [optional]
 **job_priority_lower_than_or_equals** | **int**| Only include logs for which the associated job had a priority lower than or equal to the given value. Value must be a valid &#x60;long&#x60; value. | [optional]
 **job_priority_higher_than_or_equals** | **int**| Only include logs for which the associated job had a priority higher than or equal to the given value. Value must be a valid &#x60;long&#x60; value. | [optional]
 **creation_log** | **bool**| Only include creation logs. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **failure_log** | **bool**| Only include failure logs. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **success_log** | **bool**| Only include success logs. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **deletion_log** | **bool**| Only include deletion logs. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]

### Return type

[**\Camunda\Client\Model\CountResultDto**](../Model/CountResultDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStacktraceHistoricJobLog**
> getStacktraceHistoricJobLog($id)

Get Job Log Exception Stacktrace

Retrieves the corresponding exception stacktrace to the passed historic job log by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\HistoricJobLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the historic job log to get the exception stacktrace for.

try {
    $apiInstance->getStacktraceHistoricJobLog($id);
} catch (Exception $e) {
    echo 'Exception when calling HistoricJobLogApi->getStacktraceHistoricJobLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the historic job log to get the exception stacktrace for. |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryHistoricJobLogs**
> \Camunda\Client\Model\HistoricJobLogDto[] queryHistoricJobLogs($body, $first_result, $max_results)

Get Job Logs (POST)

Queries for historic job logs that fulfill the given parameters. This method is slightly more powerful than the [Get Job Logs](https://docs.camunda.org/manual/7.21/reference/rest/history/job-log/get-job-log-query/) method because it allows filtering by historic job logs values of the different types `String`, `Number` or `Boolean`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\HistoricJobLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Camunda\Client\Model\HistoricJobLogQueryDto(); // \Camunda\Client\Model\HistoricJobLogQueryDto | 
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.

try {
    $result = $apiInstance->queryHistoricJobLogs($body, $first_result, $max_results);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricJobLogApi->queryHistoricJobLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Camunda\Client\Model\HistoricJobLogQueryDto**](../Model/HistoricJobLogQueryDto.md)|  | [optional]
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]

### Return type

[**\Camunda\Client\Model\HistoricJobLogDto[]**](../Model/HistoricJobLogDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryHistoricJobLogsCount**
> \Camunda\Client\Model\CountResultDto queryHistoricJobLogsCount($body)

Get Job Log Count (POST)

Queries for the number of historic job logs that fulfill the given parameters. This method takes the same message body as the [Get Job Logs (POST)](https://docs.camunda.org/manual/7.21/reference/rest/history/job-log/post-job-log-query/) method and therefore it is slightly more powerful than the [Get Job Log Count](https://docs.camunda.org/manual/7.21/reference/rest/history/job-log/get-job-log-query-count/) method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\HistoricJobLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Camunda\Client\Model\HistoricJobLogQueryDto(); // \Camunda\Client\Model\HistoricJobLogQueryDto | 

try {
    $result = $apiInstance->queryHistoricJobLogsCount($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricJobLogApi->queryHistoricJobLogsCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Camunda\Client\Model\HistoricJobLogQueryDto**](../Model/HistoricJobLogQueryDto.md)|  | [optional]

### Return type

[**\Camunda\Client\Model\CountResultDto**](../Model/CountResultDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

