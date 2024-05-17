# Swagger\Client\JobDefinitionApi

All URIs are relative to *http://{host}:{port}/{contextPath}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getJobDefinition**](JobDefinitionApi.md#getjobdefinition) | **GET** /job-definition/{id} | Get Job Definition
[**getJobDefinitions**](JobDefinitionApi.md#getjobdefinitions) | **GET** /job-definition | Get Job Definitions
[**getJobDefinitionsCount**](JobDefinitionApi.md#getjobdefinitionscount) | **GET** /job-definition/count | Get Job Definition Count
[**queryJobDefinitions**](JobDefinitionApi.md#queryjobdefinitions) | **POST** /job-definition | Get Job Definitions (POST)
[**queryJobDefinitionsCount**](JobDefinitionApi.md#queryjobdefinitionscount) | **POST** /job-definition/count | Get Job Definition Count (POST)
[**setJobPriorityJobDefinition**](JobDefinitionApi.md#setjobpriorityjobdefinition) | **PUT** /job-definition/{id}/jobPriority | Set Job Definition Priority by Id
[**setJobRetriesJobDefinition**](JobDefinitionApi.md#setjobretriesjobdefinition) | **PUT** /job-definition/{id}/retries | Set Job Retries By Job Definition Id
[**updateSuspensionStateJobDefinition**](JobDefinitionApi.md#updatesuspensionstatejobdefinition) | **PUT** /job-definition/{id}/suspended | Activate/Suspend Job Definition By Id
[**updateSuspensionStateJobDefinitions**](JobDefinitionApi.md#updatesuspensionstatejobdefinitions) | **PUT** /job-definition/suspended | Activate/Suspend Job Definitions

# **getJobDefinition**
> \Swagger\Client\Model\JobDefinitionDto getJobDefinition($id)

Get Job Definition

Retrieves a job definition by id, according to the `JobDefinition` interface in the engine.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\JobDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the job definition to be retrieved.

try {
    $result = $apiInstance->getJobDefinition($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobDefinitionApi->getJobDefinition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the job definition to be retrieved. |

### Return type

[**\Swagger\Client\Model\JobDefinitionDto**](../Model/JobDefinitionDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getJobDefinitions**
> \Swagger\Client\Model\JobDefinitionDto[] getJobDefinitions($job_definition_id, $activity_id_in, $process_definition_id, $process_definition_key, $job_type, $job_configuration, $active, $suspended, $with_overriding_job_priority, $tenant_id_in, $without_tenant_id, $include_job_definitions_without_tenant_id, $sort_by, $sort_order, $first_result, $max_results)

Get Job Definitions

Queries for job definitions that fulfill given parameters. The size of the result set can be retrieved by using the [Get Job Definition Count](https://docs.camunda.org/manual/7.21/reference/rest/job-definition/get-query-count/) method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\JobDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_definition_id = "job_definition_id_example"; // string | Filter by job definition id.
$activity_id_in = "activity_id_in_example"; // string | Only include job definitions which belong to one of the passed and comma-separated activity ids.
$process_definition_id = "process_definition_id_example"; // string | Only include job definitions which exist for the given process definition id.
$process_definition_key = "process_definition_key_example"; // string | Only include job definitions which exist for the given process definition key.
$job_type = "job_type_example"; // string | Only include job definitions which exist for the given job type. See the [User Guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/the-job-executor/#job-creation) for more information about job types.
$job_configuration = "job_configuration_example"; // string | Only include job definitions which exist for the given job configuration. For example: for timer jobs it is the timer configuration.
$active = true; // bool | Only include active job definitions. Value may only be `true`, as `false` is the default behavior.
$suspended = true; // bool | Only include suspended job definitions. Value may only be `true`, as `false` is the default behavior.
$with_overriding_job_priority = true; // bool | Only include job definitions that have an overriding job priority defined. The only effective value is `true`. If set to `false`, this filter is not applied.
$tenant_id_in = "tenant_id_in_example"; // string | Only include job definitions which belong to one of the passed and comma-separated tenant ids.
$without_tenant_id = true; // bool | Only include job definitions which belong to no tenant. Value may only be `true`, as `false` is the default behavior.
$include_job_definitions_without_tenant_id = true; // bool | Include job definitions which belong to no tenant. Can be used in combination with `tenantIdIn`. Value may only be `true`, as `false` is the default behavior.
$sort_by = "sort_by_example"; // string | Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter.
$sort_order = "sort_order_example"; // string | Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter.
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.

try {
    $result = $apiInstance->getJobDefinitions($job_definition_id, $activity_id_in, $process_definition_id, $process_definition_key, $job_type, $job_configuration, $active, $suspended, $with_overriding_job_priority, $tenant_id_in, $without_tenant_id, $include_job_definitions_without_tenant_id, $sort_by, $sort_order, $first_result, $max_results);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobDefinitionApi->getJobDefinitions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_definition_id** | **string**| Filter by job definition id. | [optional]
 **activity_id_in** | **string**| Only include job definitions which belong to one of the passed and comma-separated activity ids. | [optional]
 **process_definition_id** | **string**| Only include job definitions which exist for the given process definition id. | [optional]
 **process_definition_key** | **string**| Only include job definitions which exist for the given process definition key. | [optional]
 **job_type** | **string**| Only include job definitions which exist for the given job type. See the [User Guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/the-job-executor/#job-creation) for more information about job types. | [optional]
 **job_configuration** | **string**| Only include job definitions which exist for the given job configuration. For example: for timer jobs it is the timer configuration. | [optional]
 **active** | **bool**| Only include active job definitions. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **suspended** | **bool**| Only include suspended job definitions. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **with_overriding_job_priority** | **bool**| Only include job definitions that have an overriding job priority defined. The only effective value is &#x60;true&#x60;. If set to &#x60;false&#x60;, this filter is not applied. | [optional]
 **tenant_id_in** | **string**| Only include job definitions which belong to one of the passed and comma-separated tenant ids. | [optional]
 **without_tenant_id** | **bool**| Only include job definitions which belong to no tenant. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **include_job_definitions_without_tenant_id** | **bool**| Include job definitions which belong to no tenant. Can be used in combination with &#x60;tenantIdIn&#x60;. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **sort_by** | **string**| Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter. | [optional]
 **sort_order** | **string**| Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter. | [optional]
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]

### Return type

[**\Swagger\Client\Model\JobDefinitionDto[]**](../Model/JobDefinitionDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getJobDefinitionsCount**
> \Swagger\Client\Model\CountResultDto getJobDefinitionsCount($job_definition_id, $activity_id_in, $process_definition_id, $process_definition_key, $job_type, $job_configuration, $active, $suspended, $with_overriding_job_priority, $tenant_id_in, $without_tenant_id, $include_job_definitions_without_tenant_id)

Get Job Definition Count

Queries for the number of job definitions that fulfill given parameters. Takes the same parameters as the [Get Job Definitions](https://docs.camunda.org/manual/7.21/reference/rest/job-definition/get-query/) method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\JobDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_definition_id = "job_definition_id_example"; // string | Filter by job definition id.
$activity_id_in = "activity_id_in_example"; // string | Only include job definitions which belong to one of the passed and comma-separated activity ids.
$process_definition_id = "process_definition_id_example"; // string | Only include job definitions which exist for the given process definition id.
$process_definition_key = "process_definition_key_example"; // string | Only include job definitions which exist for the given process definition key.
$job_type = "job_type_example"; // string | Only include job definitions which exist for the given job type. See the [User Guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/the-job-executor/#job-creation) for more information about job types.
$job_configuration = "job_configuration_example"; // string | Only include job definitions which exist for the given job configuration. For example: for timer jobs it is the timer configuration.
$active = true; // bool | Only include active job definitions. Value may only be `true`, as `false` is the default behavior.
$suspended = true; // bool | Only include suspended job definitions. Value may only be `true`, as `false` is the default behavior.
$with_overriding_job_priority = true; // bool | Only include job definitions that have an overriding job priority defined. The only effective value is `true`. If set to `false`, this filter is not applied.
$tenant_id_in = "tenant_id_in_example"; // string | Only include job definitions which belong to one of the passed and comma-separated tenant ids.
$without_tenant_id = true; // bool | Only include job definitions which belong to no tenant. Value may only be `true`, as `false` is the default behavior.
$include_job_definitions_without_tenant_id = true; // bool | Include job definitions which belong to no tenant. Can be used in combination with `tenantIdIn`. Value may only be `true`, as `false` is the default behavior.

try {
    $result = $apiInstance->getJobDefinitionsCount($job_definition_id, $activity_id_in, $process_definition_id, $process_definition_key, $job_type, $job_configuration, $active, $suspended, $with_overriding_job_priority, $tenant_id_in, $without_tenant_id, $include_job_definitions_without_tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobDefinitionApi->getJobDefinitionsCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_definition_id** | **string**| Filter by job definition id. | [optional]
 **activity_id_in** | **string**| Only include job definitions which belong to one of the passed and comma-separated activity ids. | [optional]
 **process_definition_id** | **string**| Only include job definitions which exist for the given process definition id. | [optional]
 **process_definition_key** | **string**| Only include job definitions which exist for the given process definition key. | [optional]
 **job_type** | **string**| Only include job definitions which exist for the given job type. See the [User Guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/the-job-executor/#job-creation) for more information about job types. | [optional]
 **job_configuration** | **string**| Only include job definitions which exist for the given job configuration. For example: for timer jobs it is the timer configuration. | [optional]
 **active** | **bool**| Only include active job definitions. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **suspended** | **bool**| Only include suspended job definitions. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **with_overriding_job_priority** | **bool**| Only include job definitions that have an overriding job priority defined. The only effective value is &#x60;true&#x60;. If set to &#x60;false&#x60;, this filter is not applied. | [optional]
 **tenant_id_in** | **string**| Only include job definitions which belong to one of the passed and comma-separated tenant ids. | [optional]
 **without_tenant_id** | **bool**| Only include job definitions which belong to no tenant. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **include_job_definitions_without_tenant_id** | **bool**| Include job definitions which belong to no tenant. Can be used in combination with &#x60;tenantIdIn&#x60;. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]

### Return type

[**\Swagger\Client\Model\CountResultDto**](../Model/CountResultDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryJobDefinitions**
> \Swagger\Client\Model\JobDefinitionDto[] queryJobDefinitions($body, $first_result, $max_results)

Get Job Definitions (POST)

Queries for job definitions that fulfill given parameters. This method is slightly more powerful than the [Get Job Definitions](https://docs.camunda.org/manual/7.21/reference/rest/job-definition/get-query/) method because it allows filtering by multiple job definitions of types `String`, `Number` or `Boolean`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\JobDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\JobDefinitionQueryDto(); // \Swagger\Client\Model\JobDefinitionQueryDto | 
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.

try {
    $result = $apiInstance->queryJobDefinitions($body, $first_result, $max_results);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobDefinitionApi->queryJobDefinitions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\JobDefinitionQueryDto**](../Model/JobDefinitionQueryDto.md)|  | [optional]
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]

### Return type

[**\Swagger\Client\Model\JobDefinitionDto[]**](../Model/JobDefinitionDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryJobDefinitionsCount**
> \Swagger\Client\Model\CountResultDto queryJobDefinitionsCount($body)

Get Job Definition Count (POST)

Queries for the number of job definitions that fulfill given parameters. This method takes the same message body as the [Get Job Definitions (POST)](https://docs.camunda.org/manual/7.21/reference/rest/job-definition/post-query/) method and therefore it is slightly more powerful than the [Get Job Definition Count](https://docs.camunda.org/manual/7.21/reference/rest/job-definition/get-query-count/) method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\JobDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\JobDefinitionQueryDto(); // \Swagger\Client\Model\JobDefinitionQueryDto | 

try {
    $result = $apiInstance->queryJobDefinitionsCount($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobDefinitionApi->queryJobDefinitionsCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\JobDefinitionQueryDto**](../Model/JobDefinitionQueryDto.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\CountResultDto**](../Model/CountResultDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setJobPriorityJobDefinition**
> setJobPriorityJobDefinition($id, $body)

Set Job Definition Priority by Id

Sets an overriding execution priority for jobs with the given definition id. Optionally, the priorities of all the definitions' existing jobs are updated accordingly. The priority can be reset by setting it to `null`, meaning that a new job's priority will not be determined based on its definition's priority any longer. See the [user guide on job prioritization](https://docs.camunda.org/manual/7.21/user-guide/process-engine/the-job-executor/#set-job-definition-priorities-via-managementservice-api) for details.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\JobDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the job definition to be updated.
$body = new \Swagger\Client\Model\JobDefinitionPriorityDto(); // \Swagger\Client\Model\JobDefinitionPriorityDto | 

try {
    $apiInstance->setJobPriorityJobDefinition($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling JobDefinitionApi->setJobPriorityJobDefinition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the job definition to be updated. |
 **body** | [**\Swagger\Client\Model\JobDefinitionPriorityDto**](../Model/JobDefinitionPriorityDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setJobRetriesJobDefinition**
> setJobRetriesJobDefinition($id, $body)

Set Job Retries By Job Definition Id

Sets the number of retries of all **failed** jobs associated with the given job definition id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\JobDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the job definition to be updated.
$body = new \Swagger\Client\Model\RetriesDto(); // \Swagger\Client\Model\RetriesDto | 

try {
    $apiInstance->setJobRetriesJobDefinition($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling JobDefinitionApi->setJobRetriesJobDefinition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the job definition to be updated. |
 **body** | [**\Swagger\Client\Model\RetriesDto**](../Model/RetriesDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSuspensionStateJobDefinition**
> updateSuspensionStateJobDefinition($id, $body)

Activate/Suspend Job Definition By Id

Activates or suspends a given job definition by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\JobDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the job definition to activate or suspend.
$body = new \Swagger\Client\Model\JobDefinitionSuspensionStateDto(); // \Swagger\Client\Model\JobDefinitionSuspensionStateDto | 

try {
    $apiInstance->updateSuspensionStateJobDefinition($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling JobDefinitionApi->updateSuspensionStateJobDefinition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the job definition to activate or suspend. |
 **body** | [**\Swagger\Client\Model\JobDefinitionSuspensionStateDto**](../Model/JobDefinitionSuspensionStateDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSuspensionStateJobDefinitions**
> updateSuspensionStateJobDefinitions($body)

Activate/Suspend Job Definitions

Activates or suspends job definitions with the given process definition id or process definition key.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\JobDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\JobDefinitionsSuspensionStateDto(); // \Swagger\Client\Model\JobDefinitionsSuspensionStateDto | 

try {
    $apiInstance->updateSuspensionStateJobDefinitions($body);
} catch (Exception $e) {
    echo 'Exception when calling JobDefinitionApi->updateSuspensionStateJobDefinitions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\JobDefinitionsSuspensionStateDto**](../Model/JobDefinitionsSuspensionStateDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

