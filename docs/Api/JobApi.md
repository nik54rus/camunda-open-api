# Swagger\Client\JobApi

All URIs are relative to *http://{host}:{port}/{contextPath}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteJob**](JobApi.md#deletejob) | **DELETE** /job/{id} | Delete Job
[**executeJob**](JobApi.md#executejob) | **POST** /job/{id}/execute | Execute Job
[**getJob**](JobApi.md#getjob) | **GET** /job/{id} | Get Job
[**getJobs**](JobApi.md#getjobs) | **GET** /job | Get Jobs
[**getJobsCount**](JobApi.md#getjobscount) | **GET** /job/count | Get Job Count
[**getStacktrace**](JobApi.md#getstacktrace) | **GET** /job/{id}/stacktrace | Get Exception Stacktrace
[**queryJobs**](JobApi.md#queryjobs) | **POST** /job | Get Jobs (POST)
[**queryJobsCount**](JobApi.md#queryjobscount) | **POST** /job/count | Get Job Count (POST)
[**recalculateDuedate**](JobApi.md#recalculateduedate) | **POST** /job/{id}/duedate/recalculate | Recalculate Job Due Date
[**setJobDuedate**](JobApi.md#setjobduedate) | **PUT** /job/{id}/duedate | Set Job Due Date
[**setJobPriority**](JobApi.md#setjobpriority) | **PUT** /job/{id}/priority | Set Job Priority
[**setJobRetries**](JobApi.md#setjobretries) | **PUT** /job/{id}/retries | Set Job Retries
[**setJobRetriesAsyncOperation**](JobApi.md#setjobretriesasyncoperation) | **POST** /job/retries | Set Job Retries Async (POST)
[**updateJobSuspensionState**](JobApi.md#updatejobsuspensionstate) | **PUT** /job/{id}/suspended | Activate/Suspend Job By Id
[**updateSuspensionStateBy**](JobApi.md#updatesuspensionstateby) | **PUT** /job/suspended | Activate/Suspend Jobs

# **deleteJob**
> deleteJob($id)

Delete Job

Deletes a job by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the job to be deleted.

try {
    $apiInstance->deleteJob($id);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->deleteJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the job to be deleted. |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **executeJob**
> executeJob($id)

Execute Job

Executes a job by id. **Note:** The execution of the job happens synchronously in the same thread.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the job to be executed.

try {
    $apiInstance->executeJob($id);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->executeJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the job to be executed. |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getJob**
> \Swagger\Client\Model\JobDto getJob($id)

Get Job

Retrieves a job by id, according to the `Job` interface in the engine.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the job to be retrieved.

try {
    $result = $apiInstance->getJob($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->getJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the job to be retrieved. |

### Return type

[**\Swagger\Client\Model\JobDto**](../Model/JobDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getJobs**
> \Swagger\Client\Model\JobDto[] getJobs($job_id, $job_ids, $job_definition_id, $process_instance_id, $process_instance_ids, $execution_id, $process_definition_id, $process_definition_key, $activity_id, $with_retries_left, $executable, $timers, $messages, $due_dates, $create_times, $with_exception, $exception_message, $failed_activity_id, $no_retries_left, $active, $suspended, $priority_lower_than_or_equals, $priority_higher_than_or_equals, $tenant_id_in, $without_tenant_id, $include_jobs_without_tenant_id, $sort_by, $sort_order, $first_result, $max_results)

Get Jobs

Queries for jobs that fulfill given parameters. The size of the result set can be retrieved by using the [Get Job Count](https://docs.camunda.org/manual/7.21/reference/rest/job/get-query-count/) method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_id = "job_id_example"; // string | Filter by job id.
$job_ids = "job_ids_example"; // string | Filter by a comma-separated list of job ids.
$job_definition_id = "job_definition_id_example"; // string | Only select jobs which exist for the given job definition.
$process_instance_id = "process_instance_id_example"; // string | Only select jobs which exist for the given process instance.
$process_instance_ids = "process_instance_ids_example"; // string | Only select jobs which exist for the given comma-separated list of process instance ids.
$execution_id = "execution_id_example"; // string | Only select jobs which exist for the given execution.
$process_definition_id = "process_definition_id_example"; // string | Filter by the id of the process definition the jobs run on.
$process_definition_key = "process_definition_key_example"; // string | Filter by the key of the process definition the jobs run on.
$activity_id = "activity_id_example"; // string | Only select jobs which exist for an activity with the given id.
$with_retries_left = true; // bool | Only select jobs which have retries left. Value may only be `true`, as `false` is the default behavior.
$executable = true; // bool | Only select jobs which are executable, i.e., retries > 0 and due date is `null` or due date is in the past. Value may only be `true`, as `false` is the default behavior.
$timers = true; // bool | Only select jobs that are timers. Cannot be used together with `messages`. Value may only be `true`, as `false` is the default behavior.
$messages = true; // bool | Only select jobs that are messages. Cannot be used together with `timers`. Value may only be `true`, as `false` is the default behavior.
$due_dates = "due_dates_example"; // string | Only select jobs where the due date is lower or higher than the given date. Due date expressions are comma-separated and are structured as follows:  A valid condition value has the form `operator_value`. `operator` is the comparison operator to be used and `value` the date value as string.  Valid operator values are: `gt` - greater than; `lt` - lower than. `value` may not contain underscore or comma characters.
$create_times = "create_times_example"; // string | Only select jobs created before or after the given date.  Create time expressions are comma-separated and are structured as follows:  A valid condition value has the form `operator_value`. `operator` is the comparison operator to be used and `value` the date value as string.  Valid operator values are: `gt` - greater than; `lt` - lower than. `value` may not contain underscore or comma characters.
$with_exception = true; // bool | Only select jobs that failed due to an exception. Value may only be `true`, as `false` is the default behavior.
$exception_message = "exception_message_example"; // string | Only select jobs that failed due to an exception with the given message.
$failed_activity_id = "failed_activity_id_example"; // string | Only select jobs that failed due to an exception at an activity with the given id.
$no_retries_left = true; // bool | Only select jobs which have no retries left. Value may only be `true`, as `false` is the default behavior.
$active = true; // bool | Only include active jobs. Value may only be `true`, as `false` is the default behavior.
$suspended = true; // bool | Only include suspended jobs. Value may only be `true`, as `false` is the default behavior.
$priority_lower_than_or_equals = 789; // int | Only include jobs with a priority lower than or equal to the given value. Value must be a valid `long` value.
$priority_higher_than_or_equals = 789; // int | Only include jobs with a priority higher than or equal to the given value. Value must be a valid `long` value.
$tenant_id_in = "tenant_id_in_example"; // string | Only include jobs which belong to one of the passed comma-separated tenant ids.
$without_tenant_id = true; // bool | Only include jobs which belong to no tenant. Value may only be `true`, as `false` is the default behavior.
$include_jobs_without_tenant_id = true; // bool | Include jobs which belong to no tenant. Can be used in combination with `tenantIdIn`. Value may only be `true`, as `false` is the default behavior.
$sort_by = "sort_by_example"; // string | Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter.
$sort_order = "sort_order_example"; // string | Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter.
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.

try {
    $result = $apiInstance->getJobs($job_id, $job_ids, $job_definition_id, $process_instance_id, $process_instance_ids, $execution_id, $process_definition_id, $process_definition_key, $activity_id, $with_retries_left, $executable, $timers, $messages, $due_dates, $create_times, $with_exception, $exception_message, $failed_activity_id, $no_retries_left, $active, $suspended, $priority_lower_than_or_equals, $priority_higher_than_or_equals, $tenant_id_in, $without_tenant_id, $include_jobs_without_tenant_id, $sort_by, $sort_order, $first_result, $max_results);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->getJobs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_id** | **string**| Filter by job id. | [optional]
 **job_ids** | **string**| Filter by a comma-separated list of job ids. | [optional]
 **job_definition_id** | **string**| Only select jobs which exist for the given job definition. | [optional]
 **process_instance_id** | **string**| Only select jobs which exist for the given process instance. | [optional]
 **process_instance_ids** | **string**| Only select jobs which exist for the given comma-separated list of process instance ids. | [optional]
 **execution_id** | **string**| Only select jobs which exist for the given execution. | [optional]
 **process_definition_id** | **string**| Filter by the id of the process definition the jobs run on. | [optional]
 **process_definition_key** | **string**| Filter by the key of the process definition the jobs run on. | [optional]
 **activity_id** | **string**| Only select jobs which exist for an activity with the given id. | [optional]
 **with_retries_left** | **bool**| Only select jobs which have retries left. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **executable** | **bool**| Only select jobs which are executable, i.e., retries &gt; 0 and due date is &#x60;null&#x60; or due date is in the past. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **timers** | **bool**| Only select jobs that are timers. Cannot be used together with &#x60;messages&#x60;. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **messages** | **bool**| Only select jobs that are messages. Cannot be used together with &#x60;timers&#x60;. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **due_dates** | **string**| Only select jobs where the due date is lower or higher than the given date. Due date expressions are comma-separated and are structured as follows:  A valid condition value has the form &#x60;operator_value&#x60;. &#x60;operator&#x60; is the comparison operator to be used and &#x60;value&#x60; the date value as string.  Valid operator values are: &#x60;gt&#x60; - greater than; &#x60;lt&#x60; - lower than. &#x60;value&#x60; may not contain underscore or comma characters. | [optional]
 **create_times** | **string**| Only select jobs created before or after the given date.  Create time expressions are comma-separated and are structured as follows:  A valid condition value has the form &#x60;operator_value&#x60;. &#x60;operator&#x60; is the comparison operator to be used and &#x60;value&#x60; the date value as string.  Valid operator values are: &#x60;gt&#x60; - greater than; &#x60;lt&#x60; - lower than. &#x60;value&#x60; may not contain underscore or comma characters. | [optional]
 **with_exception** | **bool**| Only select jobs that failed due to an exception. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **exception_message** | **string**| Only select jobs that failed due to an exception with the given message. | [optional]
 **failed_activity_id** | **string**| Only select jobs that failed due to an exception at an activity with the given id. | [optional]
 **no_retries_left** | **bool**| Only select jobs which have no retries left. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **active** | **bool**| Only include active jobs. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **suspended** | **bool**| Only include suspended jobs. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **priority_lower_than_or_equals** | **int**| Only include jobs with a priority lower than or equal to the given value. Value must be a valid &#x60;long&#x60; value. | [optional]
 **priority_higher_than_or_equals** | **int**| Only include jobs with a priority higher than or equal to the given value. Value must be a valid &#x60;long&#x60; value. | [optional]
 **tenant_id_in** | **string**| Only include jobs which belong to one of the passed comma-separated tenant ids. | [optional]
 **without_tenant_id** | **bool**| Only include jobs which belong to no tenant. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **include_jobs_without_tenant_id** | **bool**| Include jobs which belong to no tenant. Can be used in combination with &#x60;tenantIdIn&#x60;. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **sort_by** | **string**| Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter. | [optional]
 **sort_order** | **string**| Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter. | [optional]
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]

### Return type

[**\Swagger\Client\Model\JobDto[]**](../Model/JobDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getJobsCount**
> \Swagger\Client\Model\CountResultDto getJobsCount($job_id, $job_ids, $job_definition_id, $process_instance_id, $process_instance_ids, $execution_id, $process_definition_id, $process_definition_key, $activity_id, $with_retries_left, $executable, $timers, $messages, $due_dates, $create_times, $with_exception, $exception_message, $failed_activity_id, $no_retries_left, $active, $suspended, $priority_lower_than_or_equals, $priority_higher_than_or_equals, $tenant_id_in, $without_tenant_id, $include_jobs_without_tenant_id)

Get Job Count

Queries for the number of jobs that fulfill given parameters. Takes the same parameters as the [Get Jobs](https://docs.camunda.org/manual/7.21/reference/rest/job/get-query/) method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_id = "job_id_example"; // string | Filter by job id.
$job_ids = "job_ids_example"; // string | Filter by a comma-separated list of job ids.
$job_definition_id = "job_definition_id_example"; // string | Only select jobs which exist for the given job definition.
$process_instance_id = "process_instance_id_example"; // string | Only select jobs which exist for the given process instance.
$process_instance_ids = "process_instance_ids_example"; // string | Only select jobs which exist for the given comma-separated list of process instance ids.
$execution_id = "execution_id_example"; // string | Only select jobs which exist for the given execution.
$process_definition_id = "process_definition_id_example"; // string | Filter by the id of the process definition the jobs run on.
$process_definition_key = "process_definition_key_example"; // string | Filter by the key of the process definition the jobs run on.
$activity_id = "activity_id_example"; // string | Only select jobs which exist for an activity with the given id.
$with_retries_left = true; // bool | Only select jobs which have retries left. Value may only be `true`, as `false` is the default behavior.
$executable = true; // bool | Only select jobs which are executable, i.e., retries > 0 and due date is `null` or due date is in the past. Value may only be `true`, as `false` is the default behavior.
$timers = true; // bool | Only select jobs that are timers. Cannot be used together with `messages`. Value may only be `true`, as `false` is the default behavior.
$messages = true; // bool | Only select jobs that are messages. Cannot be used together with `timers`. Value may only be `true`, as `false` is the default behavior.
$due_dates = "due_dates_example"; // string | Only select jobs where the due date is lower or higher than the given date. Due date expressions are comma-separated and are structured as follows:  A valid condition value has the form `operator_value`. `operator` is the comparison operator to be used and `value` the date value as string.  Valid operator values are: `gt` - greater than; `lt` - lower than. `value` may not contain underscore or comma characters.
$create_times = "create_times_example"; // string | Only select jobs created before or after the given date.  Create time expressions are comma-separated and are structured as follows:  A valid condition value has the form `operator_value`. `operator` is the comparison operator to be used and `value` the date value as string.  Valid operator values are: `gt` - greater than; `lt` - lower than. `value` may not contain underscore or comma characters.
$with_exception = true; // bool | Only select jobs that failed due to an exception. Value may only be `true`, as `false` is the default behavior.
$exception_message = "exception_message_example"; // string | Only select jobs that failed due to an exception with the given message.
$failed_activity_id = "failed_activity_id_example"; // string | Only select jobs that failed due to an exception at an activity with the given id.
$no_retries_left = true; // bool | Only select jobs which have no retries left. Value may only be `true`, as `false` is the default behavior.
$active = true; // bool | Only include active jobs. Value may only be `true`, as `false` is the default behavior.
$suspended = true; // bool | Only include suspended jobs. Value may only be `true`, as `false` is the default behavior.
$priority_lower_than_or_equals = 789; // int | Only include jobs with a priority lower than or equal to the given value. Value must be a valid `long` value.
$priority_higher_than_or_equals = 789; // int | Only include jobs with a priority higher than or equal to the given value. Value must be a valid `long` value.
$tenant_id_in = "tenant_id_in_example"; // string | Only include jobs which belong to one of the passed comma-separated tenant ids.
$without_tenant_id = true; // bool | Only include jobs which belong to no tenant. Value may only be `true`, as `false` is the default behavior.
$include_jobs_without_tenant_id = true; // bool | Include jobs which belong to no tenant. Can be used in combination with `tenantIdIn`. Value may only be `true`, as `false` is the default behavior.

try {
    $result = $apiInstance->getJobsCount($job_id, $job_ids, $job_definition_id, $process_instance_id, $process_instance_ids, $execution_id, $process_definition_id, $process_definition_key, $activity_id, $with_retries_left, $executable, $timers, $messages, $due_dates, $create_times, $with_exception, $exception_message, $failed_activity_id, $no_retries_left, $active, $suspended, $priority_lower_than_or_equals, $priority_higher_than_or_equals, $tenant_id_in, $without_tenant_id, $include_jobs_without_tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->getJobsCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_id** | **string**| Filter by job id. | [optional]
 **job_ids** | **string**| Filter by a comma-separated list of job ids. | [optional]
 **job_definition_id** | **string**| Only select jobs which exist for the given job definition. | [optional]
 **process_instance_id** | **string**| Only select jobs which exist for the given process instance. | [optional]
 **process_instance_ids** | **string**| Only select jobs which exist for the given comma-separated list of process instance ids. | [optional]
 **execution_id** | **string**| Only select jobs which exist for the given execution. | [optional]
 **process_definition_id** | **string**| Filter by the id of the process definition the jobs run on. | [optional]
 **process_definition_key** | **string**| Filter by the key of the process definition the jobs run on. | [optional]
 **activity_id** | **string**| Only select jobs which exist for an activity with the given id. | [optional]
 **with_retries_left** | **bool**| Only select jobs which have retries left. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **executable** | **bool**| Only select jobs which are executable, i.e., retries &gt; 0 and due date is &#x60;null&#x60; or due date is in the past. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **timers** | **bool**| Only select jobs that are timers. Cannot be used together with &#x60;messages&#x60;. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **messages** | **bool**| Only select jobs that are messages. Cannot be used together with &#x60;timers&#x60;. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **due_dates** | **string**| Only select jobs where the due date is lower or higher than the given date. Due date expressions are comma-separated and are structured as follows:  A valid condition value has the form &#x60;operator_value&#x60;. &#x60;operator&#x60; is the comparison operator to be used and &#x60;value&#x60; the date value as string.  Valid operator values are: &#x60;gt&#x60; - greater than; &#x60;lt&#x60; - lower than. &#x60;value&#x60; may not contain underscore or comma characters. | [optional]
 **create_times** | **string**| Only select jobs created before or after the given date.  Create time expressions are comma-separated and are structured as follows:  A valid condition value has the form &#x60;operator_value&#x60;. &#x60;operator&#x60; is the comparison operator to be used and &#x60;value&#x60; the date value as string.  Valid operator values are: &#x60;gt&#x60; - greater than; &#x60;lt&#x60; - lower than. &#x60;value&#x60; may not contain underscore or comma characters. | [optional]
 **with_exception** | **bool**| Only select jobs that failed due to an exception. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **exception_message** | **string**| Only select jobs that failed due to an exception with the given message. | [optional]
 **failed_activity_id** | **string**| Only select jobs that failed due to an exception at an activity with the given id. | [optional]
 **no_retries_left** | **bool**| Only select jobs which have no retries left. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **active** | **bool**| Only include active jobs. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **suspended** | **bool**| Only include suspended jobs. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **priority_lower_than_or_equals** | **int**| Only include jobs with a priority lower than or equal to the given value. Value must be a valid &#x60;long&#x60; value. | [optional]
 **priority_higher_than_or_equals** | **int**| Only include jobs with a priority higher than or equal to the given value. Value must be a valid &#x60;long&#x60; value. | [optional]
 **tenant_id_in** | **string**| Only include jobs which belong to one of the passed comma-separated tenant ids. | [optional]
 **without_tenant_id** | **bool**| Only include jobs which belong to no tenant. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **include_jobs_without_tenant_id** | **bool**| Include jobs which belong to no tenant. Can be used in combination with &#x60;tenantIdIn&#x60;. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]

### Return type

[**\Swagger\Client\Model\CountResultDto**](../Model/CountResultDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStacktrace**
> getStacktrace($id)

Get Exception Stacktrace

Retrieves the exception stacktrace corresponding to the passed job id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the job to get the exception stacktrace for.

try {
    $apiInstance->getStacktrace($id);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->getStacktrace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the job to get the exception stacktrace for. |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryJobs**
> \Swagger\Client\Model\JobDto[] queryJobs($body, $first_result, $max_results)

Get Jobs (POST)

Queries for jobs that fulfill given parameters. This method is slightly more powerful than the [Get Jobs](https://docs.camunda.org/manual/7.21/reference/rest/job/get-query/) method because it allows filtering by multiple jobs of types `String`, `Number` or `Boolean`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\JobQueryDto(); // \Swagger\Client\Model\JobQueryDto | 
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.

try {
    $result = $apiInstance->queryJobs($body, $first_result, $max_results);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->queryJobs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\JobQueryDto**](../Model/JobQueryDto.md)|  | [optional]
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]

### Return type

[**\Swagger\Client\Model\JobDto[]**](../Model/JobDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryJobsCount**
> \Swagger\Client\Model\CountResultDto queryJobsCount($body)

Get Job Count (POST)

Queries for jobs that fulfill given parameters. This method takes the same message body as the [Get Jobs POST](https://docs.camunda.org/manual/7.21/reference/rest/job/post- query/) method and therefore it is slightly more powerful than the [Get Job Count](https://docs.camunda.org/manual/7.21/reference/rest/job/get-query-count/) method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\JobQueryDto(); // \Swagger\Client\Model\JobQueryDto | 

try {
    $result = $apiInstance->queryJobsCount($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->queryJobsCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\JobQueryDto**](../Model/JobQueryDto.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\CountResultDto**](../Model/CountResultDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recalculateDuedate**
> recalculateDuedate($id, $creation_date_based)

Recalculate Job Due Date

Recalculates the due date of a job by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the job to be updated.
$creation_date_based = true; // bool | Recalculate the due date based on the creation date of the job or the current date. Value may only be `false`, as `true` is the default behavior.

try {
    $apiInstance->recalculateDuedate($id, $creation_date_based);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->recalculateDuedate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the job to be updated. |
 **creation_date_based** | **bool**| Recalculate the due date based on the creation date of the job or the current date. Value may only be &#x60;false&#x60;, as &#x60;true&#x60; is the default behavior. | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setJobDuedate**
> setJobDuedate($id, $body)

Set Job Due Date

Updates the due date of a job by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the job to be updated.
$body = new \Swagger\Client\Model\JobDuedateDto(); // \Swagger\Client\Model\JobDuedateDto | 

try {
    $apiInstance->setJobDuedate($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->setJobDuedate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the job to be updated. |
 **body** | [**\Swagger\Client\Model\JobDuedateDto**](../Model/JobDuedateDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setJobPriority**
> setJobPriority($id, $body)

Set Job Priority

Sets the execution priority of a job by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the job to be updated.
$body = new \Swagger\Client\Model\PriorityDto(); // \Swagger\Client\Model\PriorityDto | 

try {
    $apiInstance->setJobPriority($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->setJobPriority: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the job to be updated. |
 **body** | [**\Swagger\Client\Model\PriorityDto**](../Model/PriorityDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setJobRetries**
> setJobRetries($id, $body)

Set Job Retries

Sets the retries of the job to the given number of retries by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the job to be updated.
$body = new \Swagger\Client\Model\JobRetriesDto(); // \Swagger\Client\Model\JobRetriesDto | 

try {
    $apiInstance->setJobRetries($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->setJobRetries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the job to be updated. |
 **body** | [**\Swagger\Client\Model\JobRetriesDto**](../Model/JobRetriesDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setJobRetriesAsyncOperation**
> \Swagger\Client\Model\BatchDto setJobRetriesAsyncOperation($body)

Set Job Retries Async (POST)

Create a batch to set retries of jobs asynchronously.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SetJobRetriesDto(); // \Swagger\Client\Model\SetJobRetriesDto | 

try {
    $result = $apiInstance->setJobRetriesAsyncOperation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->setJobRetriesAsyncOperation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SetJobRetriesDto**](../Model/SetJobRetriesDto.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\BatchDto**](../Model/BatchDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateJobSuspensionState**
> updateJobSuspensionState($id, $body)

Activate/Suspend Job By Id

Activates or suspends a given job by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the job to activate or suspend.
$body = new \Swagger\Client\Model\SuspensionStateDto(); // \Swagger\Client\Model\SuspensionStateDto | 

try {
    $apiInstance->updateJobSuspensionState($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->updateJobSuspensionState: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the job to activate or suspend. |
 **body** | [**\Swagger\Client\Model\SuspensionStateDto**](../Model/SuspensionStateDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSuspensionStateBy**
> updateSuspensionStateBy($body)

Activate/Suspend Jobs

Activates or suspends jobs matching the given criterion. This can only be on of: * `jobDefinitionId` * `processDefinitionId` * `processInstanceId` * `processDefinitionKey`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\JobSuspensionStateDto(); // \Swagger\Client\Model\JobSuspensionStateDto | 

try {
    $apiInstance->updateSuspensionStateBy($body);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->updateSuspensionStateBy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\JobSuspensionStateDto**](../Model/JobSuspensionStateDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

