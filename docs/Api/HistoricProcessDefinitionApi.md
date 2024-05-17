# Swagger\Client\HistoricProcessDefinitionApi

All URIs are relative to *http://{host}:{port}/{contextPath}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCleanableHistoricProcessInstanceReport**](HistoricProcessDefinitionApi.md#getcleanablehistoricprocessinstancereport) | **GET** /history/process-definition/cleanable-process-instance-report | Get Cleanable Process Instance Report
[**getCleanableHistoricProcessInstanceReportCount**](HistoricProcessDefinitionApi.md#getcleanablehistoricprocessinstancereportcount) | **GET** /history/process-definition/cleanable-process-instance-report/count | Get Cleanable Process Instance Report Count
[**getHistoricActivityStatistics**](HistoricProcessDefinitionApi.md#gethistoricactivitystatistics) | **GET** /history/process-definition/{id}/statistics | Get Historic Activity Statistics

# **getCleanableHistoricProcessInstanceReport**
> \Swagger\Client\Model\CleanableHistoricProcessInstanceReportResultDto[] getCleanableHistoricProcessInstanceReport($process_definition_id_in, $process_definition_key_in, $tenant_id_in, $without_tenant_id, $compact, $sort_by, $sort_order, $first_result, $max_results)

Get Cleanable Process Instance Report

Retrieves a report about a process definition and finished process instances relevant to history cleanup (see [History cleanup](https://docs.camunda.org/manual/7.21/user-guide/process-engine/history/#history-cleanup))  so that you can tune the history time to live. These reports include the count of the finished historic process instances, cleanable process instances and basic process definition data - id, key, name and version. The size of the result set can be retrieved by using the [Get Cleanable Process Instance Report Count](https://docs.camunda.org/manual/7.21/reference/rest/history/process-definition/get-cleanable-process-instance-report-count/) method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\HistoricProcessDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_definition_id_in = "process_definition_id_in_example"; // string | Filter by process definition ids. Must be a comma-separated list of process definition ids.
$process_definition_key_in = "process_definition_key_in_example"; // string | Filter by process definition keys. Must be a comma-separated list of process definition keys.
$tenant_id_in = "tenant_id_in_example"; // string | Filter by a comma-separated list of tenant ids. A process definition must have one of the given  tenant ids.
$without_tenant_id = true; // bool | Only include process definitions which belong to no tenant. Value may only be `true`, as `false` is the default behavior.
$compact = true; // bool | Only include process instances which have more than zero finished instances. Value may only be `true`, as `false` is the default behavior.
$sort_by = "sort_by_example"; // string | Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter.
$sort_order = "sort_order_example"; // string | Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter.
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.

try {
    $result = $apiInstance->getCleanableHistoricProcessInstanceReport($process_definition_id_in, $process_definition_key_in, $tenant_id_in, $without_tenant_id, $compact, $sort_by, $sort_order, $first_result, $max_results);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricProcessDefinitionApi->getCleanableHistoricProcessInstanceReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_definition_id_in** | **string**| Filter by process definition ids. Must be a comma-separated list of process definition ids. | [optional]
 **process_definition_key_in** | **string**| Filter by process definition keys. Must be a comma-separated list of process definition keys. | [optional]
 **tenant_id_in** | **string**| Filter by a comma-separated list of tenant ids. A process definition must have one of the given  tenant ids. | [optional]
 **without_tenant_id** | **bool**| Only include process definitions which belong to no tenant. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **compact** | **bool**| Only include process instances which have more than zero finished instances. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **sort_by** | **string**| Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter. | [optional]
 **sort_order** | **string**| Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter. | [optional]
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]

### Return type

[**\Swagger\Client\Model\CleanableHistoricProcessInstanceReportResultDto[]**](../Model/CleanableHistoricProcessInstanceReportResultDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCleanableHistoricProcessInstanceReportCount**
> \Swagger\Client\Model\CountResultDto getCleanableHistoricProcessInstanceReportCount($process_definition_id_in, $process_definition_key_in, $tenant_id_in, $without_tenant_id, $compact)

Get Cleanable Process Instance Report Count

Queries for the number of report results about a process definition and finished process instances relevant to history cleanup (see [History cleanup](https://docs.camunda.org/manual/7.21/user-guide/process-engine/history/#history-cleanup)). Takes the same parameters as the [Get Cleanable Process Instance Report](https://docs.camunda.org/manual/7.21/reference/rest/history/process-definition/get-cleanable-process-instance-report/) method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\HistoricProcessDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_definition_id_in = "process_definition_id_in_example"; // string | Filter by process definition ids. Must be a comma-separated list of process definition ids.
$process_definition_key_in = "process_definition_key_in_example"; // string | Filter by process definition keys. Must be a comma-separated list of process definition keys.
$tenant_id_in = "tenant_id_in_example"; // string | Filter by a comma-separated list of tenant ids. A process definition must have one of the given  tenant ids.
$without_tenant_id = true; // bool | Only include process definitions which belong to no tenant. Value may only be `true`, as `false` is the default behavior.
$compact = true; // bool | Only include process instances which have more than zero finished instances. Value may only be `true`, as `false` is the default behavior.

try {
    $result = $apiInstance->getCleanableHistoricProcessInstanceReportCount($process_definition_id_in, $process_definition_key_in, $tenant_id_in, $without_tenant_id, $compact);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricProcessDefinitionApi->getCleanableHistoricProcessInstanceReportCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_definition_id_in** | **string**| Filter by process definition ids. Must be a comma-separated list of process definition ids. | [optional]
 **process_definition_key_in** | **string**| Filter by process definition keys. Must be a comma-separated list of process definition keys. | [optional]
 **tenant_id_in** | **string**| Filter by a comma-separated list of tenant ids. A process definition must have one of the given  tenant ids. | [optional]
 **without_tenant_id** | **bool**| Only include process definitions which belong to no tenant. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **compact** | **bool**| Only include process instances which have more than zero finished instances. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]

### Return type

[**\Swagger\Client\Model\CountResultDto**](../Model/CountResultDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHistoricActivityStatistics**
> \Swagger\Client\Model\HistoricActivityStatisticsDto[] getHistoricActivityStatistics($id, $canceled, $finished, $complete_scope, $incidents, $started_before, $started_after, $finished_before, $finished_after, $process_instance_id_in, $sort_by, $sort_order)

Get Historic Activity Statistics

Retrieves historic statistics of a given process definition, grouped by activities. These statistics include the number of running activity instances and, optionally, the number of canceled activity instances, finished activity instances and activity instances which completed a scope (i.e., in BPMN 2.0 manner: a scope is completed by an activity instance when the activity instance consumed a token but did not emit a new token). **Note:** This only includes historic data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\HistoricProcessDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the process definition.
$canceled = true; // bool | Whether to include the number of canceled activity instances in the result or not. Valid values are `true` or `false`. Default: `false`.
$finished = true; // bool | Whether to include the number of finished activity instances in the result or not. Valid values are `true` or `false`. Default: `false`.
$complete_scope = true; // bool | Whether to include the number of activity instances which completed a scope in the result or not. Valid values are `true` or `false`. Default: `false`.
$incidents = true; // bool | Whether to include the number of incidents. Valid values are `true` or `false`. Default: `false`.
$started_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to process instances that were started before the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/),  the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`,  e.g., `2013-01-23T14:42:45.000+0200`.
$started_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to process instances that were started after the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/),  the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`,  e.g., `2013-01-23T14:42:45.000+0200`.
$finished_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to process instances that were finished before the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/),  the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`,  e.g., `2013-01-23T14:42:45.000+0200`.
$finished_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to process instances that were finished after the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/),  the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`,  e.g., `2013-01-23T14:42:45.000+0200`.
$process_instance_id_in = "process_instance_id_in_example"; // string | Restrict to process instances with the given IDs. The IDs must be provided as a comma- separated list.
$sort_by = "sort_by_example"; // string | Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter.
$sort_order = "sort_order_example"; // string | Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter.

try {
    $result = $apiInstance->getHistoricActivityStatistics($id, $canceled, $finished, $complete_scope, $incidents, $started_before, $started_after, $finished_before, $finished_after, $process_instance_id_in, $sort_by, $sort_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricProcessDefinitionApi->getHistoricActivityStatistics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the process definition. |
 **canceled** | **bool**| Whether to include the number of canceled activity instances in the result or not. Valid values are &#x60;true&#x60; or &#x60;false&#x60;. Default: &#x60;false&#x60;. | [optional]
 **finished** | **bool**| Whether to include the number of finished activity instances in the result or not. Valid values are &#x60;true&#x60; or &#x60;false&#x60;. Default: &#x60;false&#x60;. | [optional]
 **complete_scope** | **bool**| Whether to include the number of activity instances which completed a scope in the result or not. Valid values are &#x60;true&#x60; or &#x60;false&#x60;. Default: &#x60;false&#x60;. | [optional]
 **incidents** | **bool**| Whether to include the number of incidents. Valid values are &#x60;true&#x60; or &#x60;false&#x60;. Default: &#x60;false&#x60;. | [optional]
 **started_before** | **\DateTime**| Restrict to process instances that were started before the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/),  the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;,  e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **started_after** | **\DateTime**| Restrict to process instances that were started after the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/),  the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;,  e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **finished_before** | **\DateTime**| Restrict to process instances that were finished before the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/),  the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;,  e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **finished_after** | **\DateTime**| Restrict to process instances that were finished after the given date. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/),  the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;,  e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **process_instance_id_in** | **string**| Restrict to process instances with the given IDs. The IDs must be provided as a comma- separated list. | [optional]
 **sort_by** | **string**| Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter. | [optional]
 **sort_order** | **string**| Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter. | [optional]

### Return type

[**\Swagger\Client\Model\HistoricActivityStatisticsDto[]**](../Model/HistoricActivityStatisticsDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

