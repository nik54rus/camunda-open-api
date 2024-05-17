# Camunda\Client\HistoricExternalTaskLogApi

All URIs are relative to *http://{host}:{port}/{contextPath}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getErrorDetailsHistoricExternalTaskLog**](HistoricExternalTaskLogApi.md#geterrordetailshistoricexternaltasklog) | **GET** /history/external-task-log/{id}/error-details | Get External Task Log Error Details
[**getHistoricExternalTaskLog**](HistoricExternalTaskLogApi.md#gethistoricexternaltasklog) | **GET** /history/external-task-log/{id} | Get External Task Log
[**getHistoricExternalTaskLogs**](HistoricExternalTaskLogApi.md#gethistoricexternaltasklogs) | **GET** /history/external-task-log | Get External Task Logs
[**getHistoricExternalTaskLogsCount**](HistoricExternalTaskLogApi.md#gethistoricexternaltasklogscount) | **GET** /history/external-task-log/count | Get External Task Log Count
[**queryHistoricExternalTaskLogs**](HistoricExternalTaskLogApi.md#queryhistoricexternaltasklogs) | **POST** /history/external-task-log | Get External Task Logs (POST)
[**queryHistoricExternalTaskLogsCount**](HistoricExternalTaskLogApi.md#queryhistoricexternaltasklogscount) | **POST** /history/external-task-log/count | Get External Task Log Count (POST)

# **getErrorDetailsHistoricExternalTaskLog**
> getErrorDetailsHistoricExternalTaskLog($id)

Get External Task Log Error Details

Retrieves the corresponding error details of the passed historic external task log by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\HistoricExternalTaskLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the historic external task log to get the error details for.

try {
    $apiInstance->getErrorDetailsHistoricExternalTaskLog($id);
} catch (Exception $e) {
    echo 'Exception when calling HistoricExternalTaskLogApi->getErrorDetailsHistoricExternalTaskLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the historic external task log to get the error details for. |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHistoricExternalTaskLog**
> \Camunda\Client\Model\HistoricExternalTaskLogDto getHistoricExternalTaskLog($id)

Get External Task Log

Retrieves a historic external task log by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\HistoricExternalTaskLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the log entry.

try {
    $result = $apiInstance->getHistoricExternalTaskLog($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricExternalTaskLogApi->getHistoricExternalTaskLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the log entry. |

### Return type

[**\Camunda\Client\Model\HistoricExternalTaskLogDto**](../Model/HistoricExternalTaskLogDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHistoricExternalTaskLogs**
> \Camunda\Client\Model\HistoricExternalTaskLogDto[] getHistoricExternalTaskLogs($log_id, $external_task_id, $topic_name, $worker_id, $error_message, $activity_id_in, $activity_instance_id_in, $execution_id_in, $process_instance_id, $process_definition_id, $process_definition_key, $tenant_id_in, $without_tenant_id, $priority_lower_than_or_equals, $priority_higher_than_or_equals, $creation_log, $failure_log, $success_log, $deletion_log, $sort_by, $sort_order, $first_result, $max_results)

Get External Task Logs

Queries for historic external task logs that fulfill the given parameters. The size of the result set can be retrieved by using the [Get External Task Log Count](https://docs.camunda.org/manual/7.21/reference/rest/history/external-task-log/get-external-task-log-query-count/) method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\HistoricExternalTaskLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$log_id = "log_id_example"; // string | Filter by historic external task log id.
$external_task_id = "external_task_id_example"; // string | Filter by external task id.
$topic_name = "topic_name_example"; // string | Filter by an external task topic.
$worker_id = "worker_id_example"; // string | Filter by the id of the worker that the task was most recently locked by.
$error_message = "error_message_example"; // string | Filter by external task exception message.
$activity_id_in = "activity_id_in_example"; // string | Only include historic external task logs which belong to one of the passed activity ids.
$activity_instance_id_in = "activity_instance_id_in_example"; // string | Only include historic external task logs which belong to one of the passed activity instance ids.
$execution_id_in = "execution_id_in_example"; // string | Only include historic external task logs which belong to one of the passed execution ids.
$process_instance_id = "process_instance_id_example"; // string | Filter by process instance id.
$process_definition_id = "process_definition_id_example"; // string | Filter by process definition id.
$process_definition_key = "process_definition_key_example"; // string | Filter by process definition key.
$tenant_id_in = "tenant_id_in_example"; // string | Only include historic external task log entries which belong to one of the passed and comma-separated tenant ids.
$without_tenant_id = true; // bool | Only include historic external task log entries that belong to no tenant. Value may only be `true`, as `false` is the default behavior.
$priority_lower_than_or_equals = 789; // int | Only include logs for which the associated external task had a priority lower than or equal to the given value. Value must be a valid `long` value.
$priority_higher_than_or_equals = 789; // int | Only include logs for which the associated external task had a priority higher than or equal to the given value. Value must be a valid `long` value.
$creation_log = true; // bool | Only include creation logs. Value may only be `true`, as `false` is the default behavior.
$failure_log = true; // bool | Only include failure logs. Value may only be `true`, as `false` is the default behavior.
$success_log = true; // bool | Only include success logs. Value may only be `true`, as `false` is the default behavior.
$deletion_log = true; // bool | Only include deletion logs. Value may only be `true`, as `false` is the default behavior.
$sort_by = "sort_by_example"; // string | Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter.
$sort_order = "sort_order_example"; // string | Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter.
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.

try {
    $result = $apiInstance->getHistoricExternalTaskLogs($log_id, $external_task_id, $topic_name, $worker_id, $error_message, $activity_id_in, $activity_instance_id_in, $execution_id_in, $process_instance_id, $process_definition_id, $process_definition_key, $tenant_id_in, $without_tenant_id, $priority_lower_than_or_equals, $priority_higher_than_or_equals, $creation_log, $failure_log, $success_log, $deletion_log, $sort_by, $sort_order, $first_result, $max_results);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricExternalTaskLogApi->getHistoricExternalTaskLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **log_id** | **string**| Filter by historic external task log id. | [optional]
 **external_task_id** | **string**| Filter by external task id. | [optional]
 **topic_name** | **string**| Filter by an external task topic. | [optional]
 **worker_id** | **string**| Filter by the id of the worker that the task was most recently locked by. | [optional]
 **error_message** | **string**| Filter by external task exception message. | [optional]
 **activity_id_in** | **string**| Only include historic external task logs which belong to one of the passed activity ids. | [optional]
 **activity_instance_id_in** | **string**| Only include historic external task logs which belong to one of the passed activity instance ids. | [optional]
 **execution_id_in** | **string**| Only include historic external task logs which belong to one of the passed execution ids. | [optional]
 **process_instance_id** | **string**| Filter by process instance id. | [optional]
 **process_definition_id** | **string**| Filter by process definition id. | [optional]
 **process_definition_key** | **string**| Filter by process definition key. | [optional]
 **tenant_id_in** | **string**| Only include historic external task log entries which belong to one of the passed and comma-separated tenant ids. | [optional]
 **without_tenant_id** | **bool**| Only include historic external task log entries that belong to no tenant. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **priority_lower_than_or_equals** | **int**| Only include logs for which the associated external task had a priority lower than or equal to the given value. Value must be a valid &#x60;long&#x60; value. | [optional]
 **priority_higher_than_or_equals** | **int**| Only include logs for which the associated external task had a priority higher than or equal to the given value. Value must be a valid &#x60;long&#x60; value. | [optional]
 **creation_log** | **bool**| Only include creation logs. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **failure_log** | **bool**| Only include failure logs. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **success_log** | **bool**| Only include success logs. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **deletion_log** | **bool**| Only include deletion logs. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **sort_by** | **string**| Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter. | [optional]
 **sort_order** | **string**| Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter. | [optional]
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]

### Return type

[**\Camunda\Client\Model\HistoricExternalTaskLogDto[]**](../Model/HistoricExternalTaskLogDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHistoricExternalTaskLogsCount**
> \Camunda\Client\Model\CountResultDto getHistoricExternalTaskLogsCount($log_id, $external_task_id, $topic_name, $worker_id, $error_message, $activity_id_in, $activity_instance_id_in, $execution_id_in, $process_instance_id, $process_definition_id, $process_definition_key, $tenant_id_in, $without_tenant_id, $priority_lower_than_or_equals, $priority_higher_than_or_equals, $creation_log, $failure_log, $success_log, $deletion_log)

Get External Task Log Count

Queries for the number of historic external task logs that fulfill the given parameters. Takes the same parameters as the [Get External Task Logs](https://docs.camunda.org/manual/7.21/reference/rest/history/external-task-log/get-external-task-log-query/) method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\HistoricExternalTaskLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$log_id = "log_id_example"; // string | Filter by historic external task log id.
$external_task_id = "external_task_id_example"; // string | Filter by external task id.
$topic_name = "topic_name_example"; // string | Filter by an external task topic.
$worker_id = "worker_id_example"; // string | Filter by the id of the worker that the task was most recently locked by.
$error_message = "error_message_example"; // string | Filter by external task exception message.
$activity_id_in = "activity_id_in_example"; // string | Only include historic external task logs which belong to one of the passed activity ids.
$activity_instance_id_in = "activity_instance_id_in_example"; // string | Only include historic external task logs which belong to one of the passed activity instance ids.
$execution_id_in = "execution_id_in_example"; // string | Only include historic external task logs which belong to one of the passed execution ids.
$process_instance_id = "process_instance_id_example"; // string | Filter by process instance id.
$process_definition_id = "process_definition_id_example"; // string | Filter by process definition id.
$process_definition_key = "process_definition_key_example"; // string | Filter by process definition key.
$tenant_id_in = "tenant_id_in_example"; // string | Only include historic external task log entries which belong to one of the passed and comma-separated tenant ids.
$without_tenant_id = true; // bool | Only include historic external task log entries that belong to no tenant. Value may only be `true`, as `false` is the default behavior.
$priority_lower_than_or_equals = 789; // int | Only include logs for which the associated external task had a priority lower than or equal to the given value. Value must be a valid `long` value.
$priority_higher_than_or_equals = 789; // int | Only include logs for which the associated external task had a priority higher than or equal to the given value. Value must be a valid `long` value.
$creation_log = true; // bool | Only include creation logs. Value may only be `true`, as `false` is the default behavior.
$failure_log = true; // bool | Only include failure logs. Value may only be `true`, as `false` is the default behavior.
$success_log = true; // bool | Only include success logs. Value may only be `true`, as `false` is the default behavior.
$deletion_log = true; // bool | Only include deletion logs. Value may only be `true`, as `false` is the default behavior.

try {
    $result = $apiInstance->getHistoricExternalTaskLogsCount($log_id, $external_task_id, $topic_name, $worker_id, $error_message, $activity_id_in, $activity_instance_id_in, $execution_id_in, $process_instance_id, $process_definition_id, $process_definition_key, $tenant_id_in, $without_tenant_id, $priority_lower_than_or_equals, $priority_higher_than_or_equals, $creation_log, $failure_log, $success_log, $deletion_log);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricExternalTaskLogApi->getHistoricExternalTaskLogsCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **log_id** | **string**| Filter by historic external task log id. | [optional]
 **external_task_id** | **string**| Filter by external task id. | [optional]
 **topic_name** | **string**| Filter by an external task topic. | [optional]
 **worker_id** | **string**| Filter by the id of the worker that the task was most recently locked by. | [optional]
 **error_message** | **string**| Filter by external task exception message. | [optional]
 **activity_id_in** | **string**| Only include historic external task logs which belong to one of the passed activity ids. | [optional]
 **activity_instance_id_in** | **string**| Only include historic external task logs which belong to one of the passed activity instance ids. | [optional]
 **execution_id_in** | **string**| Only include historic external task logs which belong to one of the passed execution ids. | [optional]
 **process_instance_id** | **string**| Filter by process instance id. | [optional]
 **process_definition_id** | **string**| Filter by process definition id. | [optional]
 **process_definition_key** | **string**| Filter by process definition key. | [optional]
 **tenant_id_in** | **string**| Only include historic external task log entries which belong to one of the passed and comma-separated tenant ids. | [optional]
 **without_tenant_id** | **bool**| Only include historic external task log entries that belong to no tenant. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **priority_lower_than_or_equals** | **int**| Only include logs for which the associated external task had a priority lower than or equal to the given value. Value must be a valid &#x60;long&#x60; value. | [optional]
 **priority_higher_than_or_equals** | **int**| Only include logs for which the associated external task had a priority higher than or equal to the given value. Value must be a valid &#x60;long&#x60; value. | [optional]
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

# **queryHistoricExternalTaskLogs**
> \Camunda\Client\Model\HistoricExternalTaskLogDto[] queryHistoricExternalTaskLogs($body)

Get External Task Logs (POST)

Queries for historic external task logs that fulfill the given parameters. This method is slightly more powerful than the [Get External Task Logs](https://docs.camunda.org/manual/7.21/reference/rest/history/external-task-log/get-external-task-log-query/) method because it allows filtering by historic external task logs values of the different types `String`, `Number` or `Boolean`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\HistoricExternalTaskLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Camunda\Client\Model\HistoricExternalTaskLogQueryDto(); // \Camunda\Client\Model\HistoricExternalTaskLogQueryDto | 

try {
    $result = $apiInstance->queryHistoricExternalTaskLogs($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricExternalTaskLogApi->queryHistoricExternalTaskLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Camunda\Client\Model\HistoricExternalTaskLogQueryDto**](../Model/HistoricExternalTaskLogQueryDto.md)|  | [optional]

### Return type

[**\Camunda\Client\Model\HistoricExternalTaskLogDto[]**](../Model/HistoricExternalTaskLogDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryHistoricExternalTaskLogsCount**
> \Camunda\Client\Model\CountResultDto queryHistoricExternalTaskLogsCount($body)

Get External Task Log Count (POST)

Queries for the number of historic external task logs that fulfill the given parameters. This method takes the same message body as the [Get External Task Logs (POST)](https://docs.camunda.org/manual/7.21/reference/rest/history/external-task-log/post-external-task-log-query/) method and therefore it is slightly more powerful than the [Get External Task Log Count](https://docs.camunda.org/manual/7.21/reference/rest/history/external-task-log/get-external-task-log-query-count/) method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\HistoricExternalTaskLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Camunda\Client\Model\HistoricExternalTaskLogQueryDto(); // \Camunda\Client\Model\HistoricExternalTaskLogQueryDto | 

try {
    $result = $apiInstance->queryHistoricExternalTaskLogsCount($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricExternalTaskLogApi->queryHistoricExternalTaskLogsCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Camunda\Client\Model\HistoricExternalTaskLogQueryDto**](../Model/HistoricExternalTaskLogQueryDto.md)|  | [optional]

### Return type

[**\Camunda\Client\Model\CountResultDto**](../Model/CountResultDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

