# Swagger\Client\ExternalTaskApi

All URIs are relative to *http://{host}:{port}/{contextPath}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**completeExternalTaskResource**](ExternalTaskApi.md#completeexternaltaskresource) | **POST** /external-task/{id}/complete | Complete
[**extendLock**](ExternalTaskApi.md#extendlock) | **POST** /external-task/{id}/extendLock | Extend Lock
[**fetchAndLock**](ExternalTaskApi.md#fetchandlock) | **POST** /external-task/fetchAndLock | Fetch and Lock
[**getExternalTask**](ExternalTaskApi.md#getexternaltask) | **GET** /external-task/{id} | Get
[**getExternalTaskErrorDetails**](ExternalTaskApi.md#getexternaltaskerrordetails) | **GET** /external-task/{id}/errorDetails | Get Error Details
[**getExternalTasks**](ExternalTaskApi.md#getexternaltasks) | **GET** /external-task | Get List
[**getExternalTasksCount**](ExternalTaskApi.md#getexternaltaskscount) | **GET** /external-task/count | Get List Count
[**getTopicNames**](ExternalTaskApi.md#gettopicnames) | **GET** /external-task/topic-names | Get External Task Topic Names
[**handleExternalTaskBpmnError**](ExternalTaskApi.md#handleexternaltaskbpmnerror) | **POST** /external-task/{id}/bpmnError | Handle BPMN Error
[**handleFailure**](ExternalTaskApi.md#handlefailure) | **POST** /external-task/{id}/failure | Handle Failure
[**lock**](ExternalTaskApi.md#lock) | **POST** /external-task/{id}/lock | 
[**queryExternalTasks**](ExternalTaskApi.md#queryexternaltasks) | **POST** /external-task | Get List (POST)
[**queryExternalTasksCount**](ExternalTaskApi.md#queryexternaltaskscount) | **POST** /external-task/count | Get List Count (POST)
[**setExternalTaskResourcePriority**](ExternalTaskApi.md#setexternaltaskresourcepriority) | **PUT** /external-task/{id}/priority | Set Priority
[**setExternalTaskResourceRetries**](ExternalTaskApi.md#setexternaltaskresourceretries) | **PUT** /external-task/{id}/retries | Set Retries
[**setExternalTaskRetries**](ExternalTaskApi.md#setexternaltaskretries) | **PUT** /external-task/retries | Set Retries Sync
[**setExternalTaskRetriesAsyncOperation**](ExternalTaskApi.md#setexternaltaskretriesasyncoperation) | **POST** /external-task/retries-async | Set Retries Async
[**unlock**](ExternalTaskApi.md#unlock) | **POST** /external-task/{id}/unlock | Unlock

# **completeExternalTaskResource**
> completeExternalTaskResource($id, $body)

Complete

Completes an external task by id and updates process variables.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ExternalTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the task to complete.
$body = new \Swagger\Client\Model\CompleteExternalTaskDto(); // \Swagger\Client\Model\CompleteExternalTaskDto | 

try {
    $apiInstance->completeExternalTaskResource($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ExternalTaskApi->completeExternalTaskResource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task to complete. |
 **body** | [**\Swagger\Client\Model\CompleteExternalTaskDto**](../Model/CompleteExternalTaskDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **extendLock**
> extendLock($id, $body)

Extend Lock

Extends the timeout of the lock by a given amount of time.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ExternalTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the external task.
$body = new \Swagger\Client\Model\ExtendLockOnExternalTaskDto(); // \Swagger\Client\Model\ExtendLockOnExternalTaskDto | 

try {
    $apiInstance->extendLock($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ExternalTaskApi->extendLock: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the external task. |
 **body** | [**\Swagger\Client\Model\ExtendLockOnExternalTaskDto**](../Model/ExtendLockOnExternalTaskDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchAndLock**
> \Swagger\Client\Model\LockedExternalTaskDto[] fetchAndLock($body)

Fetch and Lock

Fetches and locks a specific number of external tasks for execution by a worker. Query can be restricted to specific task topics and for each task topic an individual lock time can be provided.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ExternalTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\FetchExternalTasksDto(); // \Swagger\Client\Model\FetchExternalTasksDto | 

try {
    $result = $apiInstance->fetchAndLock($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalTaskApi->fetchAndLock: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\FetchExternalTasksDto**](../Model/FetchExternalTasksDto.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\LockedExternalTaskDto[]**](../Model/LockedExternalTaskDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExternalTask**
> \Swagger\Client\Model\ExternalTaskDto getExternalTask($id)

Get

Retrieves an external task by id, corresponding to the `ExternalTask` interface in the engine.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ExternalTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the external task to be retrieved.

try {
    $result = $apiInstance->getExternalTask($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalTaskApi->getExternalTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the external task to be retrieved. |

### Return type

[**\Swagger\Client\Model\ExternalTaskDto**](../Model/ExternalTaskDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExternalTaskErrorDetails**
> string getExternalTaskErrorDetails($id)

Get Error Details

Retrieves the error details in the context of a running external task by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ExternalTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the external task for which the error details should be retrieved.

try {
    $result = $apiInstance->getExternalTaskErrorDetails($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalTaskApi->getExternalTaskErrorDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the external task for which the error details should be retrieved. |

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExternalTasks**
> \Swagger\Client\Model\ExternalTaskDto[] getExternalTasks($external_task_id, $external_task_id_in, $topic_name, $worker_id, $locked, $not_locked, $with_retries_left, $no_retries_left, $lock_expiration_after, $lock_expiration_before, $activity_id, $activity_id_in, $execution_id, $process_instance_id, $process_instance_id_in, $process_definition_id, $tenant_id_in, $active, $suspended, $priority_higher_than_or_equals, $priority_lower_than_or_equals, $sort_by, $sort_order, $first_result, $max_results)

Get List

Queries for the external tasks that fulfill given parameters. Parameters may be static as well as dynamic runtime properties of executions. The size of the result set can be retrieved by using the [Get External Task Count](https://docs.camunda.org/manual/7.21/reference/rest/external-task/get-query-count/) method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ExternalTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_task_id = "external_task_id_example"; // string | Filter by an external task's id.
$external_task_id_in = "external_task_id_in_example"; // string | Filter by the comma-separated list of external task ids.
$topic_name = "topic_name_example"; // string | Filter by an external task topic.
$worker_id = "worker_id_example"; // string | Filter by the id of the worker that the task was most recently locked by.
$locked = true; // bool | Only include external tasks that are currently locked (i.e., they have a lock time and it has not expired). Value may only be `true`, as `false` matches any external task.
$not_locked = true; // bool | Only include external tasks that are currently not locked (i.e., they have no lock or it has expired). Value may only be `true`, as `false` matches any external task.
$with_retries_left = true; // bool | Only include external tasks that have a positive (&gt; 0) number of retries (or `null`). Value may only be `true`, as `false` matches any external task.
$no_retries_left = true; // bool | Only include external tasks that have 0 retries. Value may only be `true`, as `false` matches any external task.
$lock_expiration_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to external tasks that have a lock that expires after a given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$lock_expiration_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to external tasks that have a lock that expires before a given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$activity_id = "activity_id_example"; // string | Filter by the id of the activity that an external task is created for.
$activity_id_in = "activity_id_in_example"; // string | Filter by the comma-separated list of ids of the activities that an external task is created for.
$execution_id = "execution_id_example"; // string | Filter by the id of the execution that an external task belongs to.
$process_instance_id = "process_instance_id_example"; // string | Filter by the id of the process instance that an external task belongs to.
$process_instance_id_in = "process_instance_id_in_example"; // string | Filter by a comma-separated list of process instance ids that an external task may belong to.
$process_definition_id = "process_definition_id_example"; // string | Filter by the id of the process definition that an external task belongs to.
$tenant_id_in = "tenant_id_in_example"; // string | Filter by a comma-separated list of tenant ids. An external task must have one of the given tenant ids.
$active = true; // bool | Only include active tasks. Value may only be `true`, as `false` matches any external task.
$suspended = true; // bool | Only include suspended tasks. Value may only be `true`, as `false` matches any external task.
$priority_higher_than_or_equals = 789; // int | Only include jobs with a priority higher than or equal to the given value. Value must be a valid `long` value.
$priority_lower_than_or_equals = 789; // int | Only include jobs with a priority lower than or equal to the given value. Value must be a valid `long` value.
$sort_by = "sort_by_example"; // string | Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter.
$sort_order = "sort_order_example"; // string | Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter.
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.

try {
    $result = $apiInstance->getExternalTasks($external_task_id, $external_task_id_in, $topic_name, $worker_id, $locked, $not_locked, $with_retries_left, $no_retries_left, $lock_expiration_after, $lock_expiration_before, $activity_id, $activity_id_in, $execution_id, $process_instance_id, $process_instance_id_in, $process_definition_id, $tenant_id_in, $active, $suspended, $priority_higher_than_or_equals, $priority_lower_than_or_equals, $sort_by, $sort_order, $first_result, $max_results);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalTaskApi->getExternalTasks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_task_id** | **string**| Filter by an external task&#x27;s id. | [optional]
 **external_task_id_in** | **string**| Filter by the comma-separated list of external task ids. | [optional]
 **topic_name** | **string**| Filter by an external task topic. | [optional]
 **worker_id** | **string**| Filter by the id of the worker that the task was most recently locked by. | [optional]
 **locked** | **bool**| Only include external tasks that are currently locked (i.e., they have a lock time and it has not expired). Value may only be &#x60;true&#x60;, as &#x60;false&#x60; matches any external task. | [optional]
 **not_locked** | **bool**| Only include external tasks that are currently not locked (i.e., they have no lock or it has expired). Value may only be &#x60;true&#x60;, as &#x60;false&#x60; matches any external task. | [optional]
 **with_retries_left** | **bool**| Only include external tasks that have a positive (&amp;gt; 0) number of retries (or &#x60;null&#x60;). Value may only be &#x60;true&#x60;, as &#x60;false&#x60; matches any external task. | [optional]
 **no_retries_left** | **bool**| Only include external tasks that have 0 retries. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; matches any external task. | [optional]
 **lock_expiration_after** | **\DateTime**| Restrict to external tasks that have a lock that expires after a given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **lock_expiration_before** | **\DateTime**| Restrict to external tasks that have a lock that expires before a given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **activity_id** | **string**| Filter by the id of the activity that an external task is created for. | [optional]
 **activity_id_in** | **string**| Filter by the comma-separated list of ids of the activities that an external task is created for. | [optional]
 **execution_id** | **string**| Filter by the id of the execution that an external task belongs to. | [optional]
 **process_instance_id** | **string**| Filter by the id of the process instance that an external task belongs to. | [optional]
 **process_instance_id_in** | **string**| Filter by a comma-separated list of process instance ids that an external task may belong to. | [optional]
 **process_definition_id** | **string**| Filter by the id of the process definition that an external task belongs to. | [optional]
 **tenant_id_in** | **string**| Filter by a comma-separated list of tenant ids. An external task must have one of the given tenant ids. | [optional]
 **active** | **bool**| Only include active tasks. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; matches any external task. | [optional]
 **suspended** | **bool**| Only include suspended tasks. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; matches any external task. | [optional]
 **priority_higher_than_or_equals** | **int**| Only include jobs with a priority higher than or equal to the given value. Value must be a valid &#x60;long&#x60; value. | [optional]
 **priority_lower_than_or_equals** | **int**| Only include jobs with a priority lower than or equal to the given value. Value must be a valid &#x60;long&#x60; value. | [optional]
 **sort_by** | **string**| Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter. | [optional]
 **sort_order** | **string**| Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter. | [optional]
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]

### Return type

[**\Swagger\Client\Model\ExternalTaskDto[]**](../Model/ExternalTaskDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExternalTasksCount**
> \Swagger\Client\Model\CountResultDto getExternalTasksCount($external_task_id, $external_task_id_in, $topic_name, $worker_id, $locked, $not_locked, $with_retries_left, $no_retries_left, $lock_expiration_after, $lock_expiration_before, $activity_id, $activity_id_in, $execution_id, $process_instance_id, $process_instance_id_in, $process_definition_id, $tenant_id_in, $active, $suspended, $priority_higher_than_or_equals, $priority_lower_than_or_equals)

Get List Count

Queries for the number of external tasks that fulfill given parameters. Takes the same parameters as the [Get External Tasks](https://docs.camunda.org/manual/7.21/reference/rest/external-task/get-query/) method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ExternalTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_task_id = "external_task_id_example"; // string | Filter by an external task's id.
$external_task_id_in = "external_task_id_in_example"; // string | Filter by the comma-separated list of external task ids.
$topic_name = "topic_name_example"; // string | Filter by an external task topic.
$worker_id = "worker_id_example"; // string | Filter by the id of the worker that the task was most recently locked by.
$locked = true; // bool | Only include external tasks that are currently locked (i.e., they have a lock time and it has not expired). Value may only be `true`, as `false` matches any external task.
$not_locked = true; // bool | Only include external tasks that are currently not locked (i.e., they have no lock or it has expired). Value may only be `true`, as `false` matches any external task.
$with_retries_left = true; // bool | Only include external tasks that have a positive (&gt; 0) number of retries (or `null`). Value may only be `true`, as `false` matches any external task.
$no_retries_left = true; // bool | Only include external tasks that have 0 retries. Value may only be `true`, as `false` matches any external task.
$lock_expiration_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to external tasks that have a lock that expires after a given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$lock_expiration_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to external tasks that have a lock that expires before a given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$activity_id = "activity_id_example"; // string | Filter by the id of the activity that an external task is created for.
$activity_id_in = "activity_id_in_example"; // string | Filter by the comma-separated list of ids of the activities that an external task is created for.
$execution_id = "execution_id_example"; // string | Filter by the id of the execution that an external task belongs to.
$process_instance_id = "process_instance_id_example"; // string | Filter by the id of the process instance that an external task belongs to.
$process_instance_id_in = "process_instance_id_in_example"; // string | Filter by a comma-separated list of process instance ids that an external task may belong to.
$process_definition_id = "process_definition_id_example"; // string | Filter by the id of the process definition that an external task belongs to.
$tenant_id_in = "tenant_id_in_example"; // string | Filter by a comma-separated list of tenant ids. An external task must have one of the given tenant ids.
$active = true; // bool | Only include active tasks. Value may only be `true`, as `false` matches any external task.
$suspended = true; // bool | Only include suspended tasks. Value may only be `true`, as `false` matches any external task.
$priority_higher_than_or_equals = 789; // int | Only include jobs with a priority higher than or equal to the given value. Value must be a valid `long` value.
$priority_lower_than_or_equals = 789; // int | Only include jobs with a priority lower than or equal to the given value. Value must be a valid `long` value.

try {
    $result = $apiInstance->getExternalTasksCount($external_task_id, $external_task_id_in, $topic_name, $worker_id, $locked, $not_locked, $with_retries_left, $no_retries_left, $lock_expiration_after, $lock_expiration_before, $activity_id, $activity_id_in, $execution_id, $process_instance_id, $process_instance_id_in, $process_definition_id, $tenant_id_in, $active, $suspended, $priority_higher_than_or_equals, $priority_lower_than_or_equals);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalTaskApi->getExternalTasksCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_task_id** | **string**| Filter by an external task&#x27;s id. | [optional]
 **external_task_id_in** | **string**| Filter by the comma-separated list of external task ids. | [optional]
 **topic_name** | **string**| Filter by an external task topic. | [optional]
 **worker_id** | **string**| Filter by the id of the worker that the task was most recently locked by. | [optional]
 **locked** | **bool**| Only include external tasks that are currently locked (i.e., they have a lock time and it has not expired). Value may only be &#x60;true&#x60;, as &#x60;false&#x60; matches any external task. | [optional]
 **not_locked** | **bool**| Only include external tasks that are currently not locked (i.e., they have no lock or it has expired). Value may only be &#x60;true&#x60;, as &#x60;false&#x60; matches any external task. | [optional]
 **with_retries_left** | **bool**| Only include external tasks that have a positive (&amp;gt; 0) number of retries (or &#x60;null&#x60;). Value may only be &#x60;true&#x60;, as &#x60;false&#x60; matches any external task. | [optional]
 **no_retries_left** | **bool**| Only include external tasks that have 0 retries. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; matches any external task. | [optional]
 **lock_expiration_after** | **\DateTime**| Restrict to external tasks that have a lock that expires after a given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **lock_expiration_before** | **\DateTime**| Restrict to external tasks that have a lock that expires before a given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **activity_id** | **string**| Filter by the id of the activity that an external task is created for. | [optional]
 **activity_id_in** | **string**| Filter by the comma-separated list of ids of the activities that an external task is created for. | [optional]
 **execution_id** | **string**| Filter by the id of the execution that an external task belongs to. | [optional]
 **process_instance_id** | **string**| Filter by the id of the process instance that an external task belongs to. | [optional]
 **process_instance_id_in** | **string**| Filter by a comma-separated list of process instance ids that an external task may belong to. | [optional]
 **process_definition_id** | **string**| Filter by the id of the process definition that an external task belongs to. | [optional]
 **tenant_id_in** | **string**| Filter by a comma-separated list of tenant ids. An external task must have one of the given tenant ids. | [optional]
 **active** | **bool**| Only include active tasks. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; matches any external task. | [optional]
 **suspended** | **bool**| Only include suspended tasks. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; matches any external task. | [optional]
 **priority_higher_than_or_equals** | **int**| Only include jobs with a priority higher than or equal to the given value. Value must be a valid &#x60;long&#x60; value. | [optional]
 **priority_lower_than_or_equals** | **int**| Only include jobs with a priority lower than or equal to the given value. Value must be a valid &#x60;long&#x60; value. | [optional]

### Return type

[**\Swagger\Client\Model\CountResultDto**](../Model/CountResultDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTopicNames**
> string[] getTopicNames($with_locked_tasks, $with_unlocked_tasks, $with_retries_left)

Get External Task Topic Names

Queries for distinct topic names of external tasks that fulfill given parameters. Query can be restricted to only tasks with retries left, tasks that are locked, or tasks that are unlocked. The parameters withLockedTasks and withUnlockedTasks are exclusive. Setting them both to true will return an empty list. Providing no parameters will return a list of all distinct topic names with external tasks.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ExternalTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$with_locked_tasks = true; // bool | Only include external tasks that are currently locked (i.e., they have a lock time and it has not expired). Value may only be `true`, as `false` matches any external task.
$with_unlocked_tasks = true; // bool | Only include external tasks that are currently not locked (i.e., they have no lock or it has expired). Value may only be `true`, as `false` matches any external task.
$with_retries_left = true; // bool | Only include external tasks that have a positive (&gt; 0) number of retries (or `null`). Value may only be `true`, as `false` matches any external task.

try {
    $result = $apiInstance->getTopicNames($with_locked_tasks, $with_unlocked_tasks, $with_retries_left);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalTaskApi->getTopicNames: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **with_locked_tasks** | **bool**| Only include external tasks that are currently locked (i.e., they have a lock time and it has not expired). Value may only be &#x60;true&#x60;, as &#x60;false&#x60; matches any external task. | [optional]
 **with_unlocked_tasks** | **bool**| Only include external tasks that are currently not locked (i.e., they have no lock or it has expired). Value may only be &#x60;true&#x60;, as &#x60;false&#x60; matches any external task. | [optional]
 **with_retries_left** | **bool**| Only include external tasks that have a positive (&amp;gt; 0) number of retries (or &#x60;null&#x60;). Value may only be &#x60;true&#x60;, as &#x60;false&#x60; matches any external task. | [optional]

### Return type

**string[]**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **handleExternalTaskBpmnError**
> handleExternalTaskBpmnError($id, $body)

Handle BPMN Error

Reports a business error in the context of a running external task by id. The error code must be specified to identify the BPMN error handler.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ExternalTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the external task in which context a BPMN error is reported.
$body = new \Swagger\Client\Model\ExternalTaskBpmnError(); // \Swagger\Client\Model\ExternalTaskBpmnError | 

try {
    $apiInstance->handleExternalTaskBpmnError($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ExternalTaskApi->handleExternalTaskBpmnError: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the external task in which context a BPMN error is reported. |
 **body** | [**\Swagger\Client\Model\ExternalTaskBpmnError**](../Model/ExternalTaskBpmnError.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **handleFailure**
> handleFailure($id, $body)

Handle Failure

Reports a failure to execute an external task by id. A number of retries and a timeout until the task can be retried can be specified. If retries are set to 0, an incident for this task is created.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ExternalTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the external task to report a failure for.
$body = new \Swagger\Client\Model\ExternalTaskFailureDto(); // \Swagger\Client\Model\ExternalTaskFailureDto | 

try {
    $apiInstance->handleFailure($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ExternalTaskApi->handleFailure: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the external task to report a failure for. |
 **body** | [**\Swagger\Client\Model\ExternalTaskFailureDto**](../Model/ExternalTaskFailureDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lock**
> lock($id, $body)



Lock an external task by a given id for a specified worker and amount of time.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ExternalTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the external task.
$body = new \Swagger\Client\Model\LockExternalTaskDto(); // \Swagger\Client\Model\LockExternalTaskDto | 

try {
    $apiInstance->lock($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ExternalTaskApi->lock: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the external task. |
 **body** | [**\Swagger\Client\Model\LockExternalTaskDto**](../Model/LockExternalTaskDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryExternalTasks**
> \Swagger\Client\Model\ExternalTaskDto[] queryExternalTasks($body, $first_result, $max_results)

Get List (POST)

Queries for external tasks that fulfill given parameters in the form of a JSON object.  This method is slightly more powerful than the [Get External Tasks](https://docs.camunda.org/manual/7.21/reference/rest/external-task/get-query/) method because it allows to specify a hierarchical result sorting.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ExternalTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ExternalTaskQueryDto(); // \Swagger\Client\Model\ExternalTaskQueryDto | 
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.

try {
    $result = $apiInstance->queryExternalTasks($body, $first_result, $max_results);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalTaskApi->queryExternalTasks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ExternalTaskQueryDto**](../Model/ExternalTaskQueryDto.md)|  | [optional]
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]

### Return type

[**\Swagger\Client\Model\ExternalTaskDto[]**](../Model/ExternalTaskDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryExternalTasksCount**
> \Swagger\Client\Model\CountResultDto queryExternalTasksCount($body)

Get List Count (POST)

Queries for the number of external tasks that fulfill given parameters. This method takes the same message body as the [Get External Tasks (POST)](https://docs.camunda.org/manual/7.21/reference/rest/external-task/post-query/) method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ExternalTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ExternalTaskQueryDto(); // \Swagger\Client\Model\ExternalTaskQueryDto | 

try {
    $result = $apiInstance->queryExternalTasksCount($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalTaskApi->queryExternalTasksCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ExternalTaskQueryDto**](../Model/ExternalTaskQueryDto.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\CountResultDto**](../Model/CountResultDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setExternalTaskResourcePriority**
> setExternalTaskResourcePriority($id, $body)

Set Priority

Sets the priority of an existing external task by id. The default value of a priority is 0.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ExternalTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the external task to set the priority for.
$body = new \Swagger\Client\Model\PriorityDto(); // \Swagger\Client\Model\PriorityDto | 

try {
    $apiInstance->setExternalTaskResourcePriority($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ExternalTaskApi->setExternalTaskResourcePriority: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the external task to set the priority for. |
 **body** | [**\Swagger\Client\Model\PriorityDto**](../Model/PriorityDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setExternalTaskResourceRetries**
> setExternalTaskResourceRetries($id, $body)

Set Retries

Sets the number of retries left to execute an external task by id. If retries are set to 0, an  incident is created.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ExternalTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the external task to set the number of retries for.
$body = new \Swagger\Client\Model\RetriesDto(); // \Swagger\Client\Model\RetriesDto | 

try {
    $apiInstance->setExternalTaskResourceRetries($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ExternalTaskApi->setExternalTaskResourceRetries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the external task to set the number of retries for. |
 **body** | [**\Swagger\Client\Model\RetriesDto**](../Model/RetriesDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setExternalTaskRetries**
> setExternalTaskRetries($body)

Set Retries Sync

Sets the number of retries left to execute external tasks by id synchronously. If retries are set to 0,  an incident is created.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ExternalTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SetRetriesForExternalTasksDto(); // \Swagger\Client\Model\SetRetriesForExternalTasksDto | 

try {
    $apiInstance->setExternalTaskRetries($body);
} catch (Exception $e) {
    echo 'Exception when calling ExternalTaskApi->setExternalTaskRetries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SetRetriesForExternalTasksDto**](../Model/SetRetriesForExternalTasksDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setExternalTaskRetriesAsyncOperation**
> \Swagger\Client\Model\BatchDto setExternalTaskRetriesAsyncOperation($body)

Set Retries Async

Sets the number of retries left to execute external tasks by id asynchronously. If retries are set to 0, an incident is created.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ExternalTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SetRetriesForExternalTasksDto(); // \Swagger\Client\Model\SetRetriesForExternalTasksDto | 

try {
    $result = $apiInstance->setExternalTaskRetriesAsyncOperation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalTaskApi->setExternalTaskRetriesAsyncOperation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SetRetriesForExternalTasksDto**](../Model/SetRetriesForExternalTasksDto.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\BatchDto**](../Model/BatchDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unlock**
> unlock($id)

Unlock

Unlocks an external task by id. Clears the task's lock expiration time and worker id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ExternalTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the external task to unlock.

try {
    $apiInstance->unlock($id);
} catch (Exception $e) {
    echo 'Exception when calling ExternalTaskApi->unlock: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the external task to unlock. |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

