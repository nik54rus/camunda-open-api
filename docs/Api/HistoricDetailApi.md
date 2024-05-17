# Camunda\Client\HistoricDetailApi

All URIs are relative to *http://{host}:{port}/{contextPath}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getHistoricDetails**](HistoricDetailApi.md#gethistoricdetails) | **GET** /history/detail | Get Historic Details
[**getHistoricDetailsCount**](HistoricDetailApi.md#gethistoricdetailscount) | **GET** /history/detail/count | Get Historic Detail Count
[**historicDetail**](HistoricDetailApi.md#historicdetail) | **GET** /history/detail/{id} | Get Historic Detail
[**historicDetailBinary**](HistoricDetailApi.md#historicdetailbinary) | **GET** /history/detail/{id}/data | Get Historic Detail (Binary)
[**queryHistoricDetails**](HistoricDetailApi.md#queryhistoricdetails) | **POST** /history/detail | Get Historic Details (POST)

# **getHistoricDetails**
> \Camunda\Client\Model\HistoricDetailDto[] getHistoricDetails($process_instance_id, $process_instance_id_in, $execution_id, $task_id, $activity_instance_id, $case_instance_id, $case_execution_id, $variable_instance_id, $variable_type_in, $tenant_id_in, $without_tenant_id, $user_operation_id, $form_fields, $variable_updates, $exclude_task_details, $initial, $occurred_before, $occurred_after, $sort_by, $sort_order, $first_result, $max_results, $deserialize_values)

Get Historic Details

Queries for historic details that fulfill the given parameters. The size of the result set can be retrieved by using the [Get Historic Detail Count](https://docs.camunda.org/manual/7.21/reference/rest/history/detail/get-detail-query-count/) method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\HistoricDetailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_instance_id = "process_instance_id_example"; // string | Filter by process instance id.
$process_instance_id_in = "process_instance_id_in_example"; // string | Only include historic details which belong to one of the passed comma-separated process instance ids.
$execution_id = "execution_id_example"; // string | Filter by execution id.
$task_id = "task_id_example"; // string | Filter by task id.
$activity_instance_id = "activity_instance_id_example"; // string | Filter by activity instance id.
$case_instance_id = "case_instance_id_example"; // string | Filter by case instance id.
$case_execution_id = "case_execution_id_example"; // string | Filter by case execution id.
$variable_instance_id = "variable_instance_id_example"; // string | Filter by variable instance id.
$variable_type_in = "variable_type_in_example"; // string | Only include historic details where the variable updates belong to one of the passed comma-separated list of variable types. A list of all supported variable types can be found [here](https://docs.camunda.org/manual/7.21/user-guide/process-engine/variables/#supported-variable-values). **Note:** All non-primitive variables are associated with the type `serializable`.
$tenant_id_in = "tenant_id_in_example"; // string | Filter by a comma-separated list of tenant ids.
$without_tenant_id = true; // bool | Only include historic details that belong to no tenant. Value may only be `true`, as `false` is the default behavior.
$user_operation_id = "user_operation_id_example"; // string | Filter by a user operation id.
$form_fields = true; // bool | Only include `HistoricFormFields`. Value may only be `true`, as `false` is the default behavior.
$variable_updates = true; // bool | Only include `HistoricVariableUpdates`. Value may only be `true`, as `false` is the default behavior.
$exclude_task_details = true; // bool | Excludes all task-related `HistoricDetails`, so only items which have no task id set will be selected. When this parameter is used together with `taskId`, this call is ignored and task details are not excluded. Value may only be `true`, as `false` is the default behavior.
$initial = true; // bool | Restrict to historic variable updates that contain only initial variable values. Value may only be `true`, as `false` is the default behavior.
$occurred_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to historic details that occured before the given date (including the date). Default [format](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/) `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., 2013-01-23T14:42:45.000+0200.
$occurred_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to historic details that occured after the given date (including the date). Default [format](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/) `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., 2013-01-23T14:42:45.000+0200.
$sort_by = "sort_by_example"; // string | Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter.
$sort_order = "sort_order_example"; // string | Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter.
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.
$deserialize_values = true; // bool | Determines whether serializable variable values (typically variables that store custom Java objects) should be deserialized on server side (default `true`).  If set to `true`, a serializable variable will be deserialized on server side and transformed to JSON using [Jackson's](https://github.com/FasterXML/jackson) POJO/bean property introspection feature. Note that this requires the Java classes of the variable value to be on the REST API's classpath.  If set to `false`, a serializable variable will be returned in its serialized format. For example, a variable that is serialized as XML will be returned as a JSON string containing XML.  **Note:** While `true` is the default value for reasons of backward compatibility, we recommend setting this parameter to `false` when developing web applications that are independent of the Java process applications deployed to the engine.

try {
    $result = $apiInstance->getHistoricDetails($process_instance_id, $process_instance_id_in, $execution_id, $task_id, $activity_instance_id, $case_instance_id, $case_execution_id, $variable_instance_id, $variable_type_in, $tenant_id_in, $without_tenant_id, $user_operation_id, $form_fields, $variable_updates, $exclude_task_details, $initial, $occurred_before, $occurred_after, $sort_by, $sort_order, $first_result, $max_results, $deserialize_values);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricDetailApi->getHistoricDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_instance_id** | **string**| Filter by process instance id. | [optional]
 **process_instance_id_in** | **string**| Only include historic details which belong to one of the passed comma-separated process instance ids. | [optional]
 **execution_id** | **string**| Filter by execution id. | [optional]
 **task_id** | **string**| Filter by task id. | [optional]
 **activity_instance_id** | **string**| Filter by activity instance id. | [optional]
 **case_instance_id** | **string**| Filter by case instance id. | [optional]
 **case_execution_id** | **string**| Filter by case execution id. | [optional]
 **variable_instance_id** | **string**| Filter by variable instance id. | [optional]
 **variable_type_in** | **string**| Only include historic details where the variable updates belong to one of the passed comma-separated list of variable types. A list of all supported variable types can be found [here](https://docs.camunda.org/manual/7.21/user-guide/process-engine/variables/#supported-variable-values). **Note:** All non-primitive variables are associated with the type &#x60;serializable&#x60;. | [optional]
 **tenant_id_in** | **string**| Filter by a comma-separated list of tenant ids. | [optional]
 **without_tenant_id** | **bool**| Only include historic details that belong to no tenant. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **user_operation_id** | **string**| Filter by a user operation id. | [optional]
 **form_fields** | **bool**| Only include &#x60;HistoricFormFields&#x60;. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **variable_updates** | **bool**| Only include &#x60;HistoricVariableUpdates&#x60;. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **exclude_task_details** | **bool**| Excludes all task-related &#x60;HistoricDetails&#x60;, so only items which have no task id set will be selected. When this parameter is used together with &#x60;taskId&#x60;, this call is ignored and task details are not excluded. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **initial** | **bool**| Restrict to historic variable updates that contain only initial variable values. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **occurred_before** | **\DateTime**| Restrict to historic details that occured before the given date (including the date). Default [format](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/) &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., 2013-01-23T14:42:45.000+0200. | [optional]
 **occurred_after** | **\DateTime**| Restrict to historic details that occured after the given date (including the date). Default [format](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/) &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., 2013-01-23T14:42:45.000+0200. | [optional]
 **sort_by** | **string**| Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter. | [optional]
 **sort_order** | **string**| Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter. | [optional]
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]
 **deserialize_values** | **bool**| Determines whether serializable variable values (typically variables that store custom Java objects) should be deserialized on server side (default &#x60;true&#x60;).  If set to &#x60;true&#x60;, a serializable variable will be deserialized on server side and transformed to JSON using [Jackson&#x27;s](https://github.com/FasterXML/jackson) POJO/bean property introspection feature. Note that this requires the Java classes of the variable value to be on the REST API&#x27;s classpath.  If set to &#x60;false&#x60;, a serializable variable will be returned in its serialized format. For example, a variable that is serialized as XML will be returned as a JSON string containing XML.  **Note:** While &#x60;true&#x60; is the default value for reasons of backward compatibility, we recommend setting this parameter to &#x60;false&#x60; when developing web applications that are independent of the Java process applications deployed to the engine. | [optional]

### Return type

[**\Camunda\Client\Model\HistoricDetailDto[]**](../Model/HistoricDetailDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHistoricDetailsCount**
> \Camunda\Client\Model\CountResultDto getHistoricDetailsCount($process_instance_id, $process_instance_id_in, $execution_id, $task_id, $activity_instance_id, $case_instance_id, $case_execution_id, $variable_instance_id, $variable_type_in, $tenant_id_in, $without_tenant_id, $user_operation_id, $form_fields, $variable_updates, $exclude_task_details, $initial, $occurred_before, $occurred_after)

Get Historic Detail Count

Queries for the number of historic details that fulfill the given parameters. Takes the same parameters as the [Get Historic Details](https://docs.camunda.org/manual/7.21/reference/rest/history/detail/get-detail-query/) method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\HistoricDetailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_instance_id = "process_instance_id_example"; // string | Filter by process instance id.
$process_instance_id_in = "process_instance_id_in_example"; // string | Only include historic details which belong to one of the passed comma-separated process instance ids.
$execution_id = "execution_id_example"; // string | Filter by execution id.
$task_id = "task_id_example"; // string | Filter by task id.
$activity_instance_id = "activity_instance_id_example"; // string | Filter by activity instance id.
$case_instance_id = "case_instance_id_example"; // string | Filter by case instance id.
$case_execution_id = "case_execution_id_example"; // string | Filter by case execution id.
$variable_instance_id = "variable_instance_id_example"; // string | Filter by variable instance id.
$variable_type_in = "variable_type_in_example"; // string | Only include historic details where the variable updates belong to one of the passed comma-separated list of variable types. A list of all supported variable types can be found [here](https://docs.camunda.org/manual/7.21/user-guide/process-engine/variables/#supported-variable-values). **Note:** All non-primitive variables are associated with the type `serializable`.
$tenant_id_in = "tenant_id_in_example"; // string | Filter by a comma-separated list of tenant ids.
$without_tenant_id = true; // bool | Only include historic details that belong to no tenant. Value may only be `true`, as `false` is the default behavior.
$user_operation_id = "user_operation_id_example"; // string | Filter by a user operation id.
$form_fields = true; // bool | Only include `HistoricFormFields`. Value may only be `true`, as `false` is the default behavior.
$variable_updates = true; // bool | Only include `HistoricVariableUpdates`. Value may only be `true`, as `false` is the default behavior.
$exclude_task_details = true; // bool | Excludes all task-related `HistoricDetails`, so only items which have no task id set will be selected. When this parameter is used together with `taskId`, this call is ignored and task details are not excluded. Value may only be `true`, as `false` is the default behavior.
$initial = true; // bool | Restrict to historic variable updates that contain only initial variable values. Value may only be `true`, as `false` is the default behavior.
$occurred_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to historic details that occured before the given date (including the date). Default [format](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/) `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., 2013-01-23T14:42:45.000+0200.
$occurred_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restrict to historic details that occured after the given date (including the date). Default [format](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/) `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., 2013-01-23T14:42:45.000+0200.

try {
    $result = $apiInstance->getHistoricDetailsCount($process_instance_id, $process_instance_id_in, $execution_id, $task_id, $activity_instance_id, $case_instance_id, $case_execution_id, $variable_instance_id, $variable_type_in, $tenant_id_in, $without_tenant_id, $user_operation_id, $form_fields, $variable_updates, $exclude_task_details, $initial, $occurred_before, $occurred_after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricDetailApi->getHistoricDetailsCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_instance_id** | **string**| Filter by process instance id. | [optional]
 **process_instance_id_in** | **string**| Only include historic details which belong to one of the passed comma-separated process instance ids. | [optional]
 **execution_id** | **string**| Filter by execution id. | [optional]
 **task_id** | **string**| Filter by task id. | [optional]
 **activity_instance_id** | **string**| Filter by activity instance id. | [optional]
 **case_instance_id** | **string**| Filter by case instance id. | [optional]
 **case_execution_id** | **string**| Filter by case execution id. | [optional]
 **variable_instance_id** | **string**| Filter by variable instance id. | [optional]
 **variable_type_in** | **string**| Only include historic details where the variable updates belong to one of the passed comma-separated list of variable types. A list of all supported variable types can be found [here](https://docs.camunda.org/manual/7.21/user-guide/process-engine/variables/#supported-variable-values). **Note:** All non-primitive variables are associated with the type &#x60;serializable&#x60;. | [optional]
 **tenant_id_in** | **string**| Filter by a comma-separated list of tenant ids. | [optional]
 **without_tenant_id** | **bool**| Only include historic details that belong to no tenant. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **user_operation_id** | **string**| Filter by a user operation id. | [optional]
 **form_fields** | **bool**| Only include &#x60;HistoricFormFields&#x60;. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **variable_updates** | **bool**| Only include &#x60;HistoricVariableUpdates&#x60;. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **exclude_task_details** | **bool**| Excludes all task-related &#x60;HistoricDetails&#x60;, so only items which have no task id set will be selected. When this parameter is used together with &#x60;taskId&#x60;, this call is ignored and task details are not excluded. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **initial** | **bool**| Restrict to historic variable updates that contain only initial variable values. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **occurred_before** | **\DateTime**| Restrict to historic details that occured before the given date (including the date). Default [format](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/) &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., 2013-01-23T14:42:45.000+0200. | [optional]
 **occurred_after** | **\DateTime**| Restrict to historic details that occured after the given date (including the date). Default [format](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/) &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., 2013-01-23T14:42:45.000+0200. | [optional]

### Return type

[**\Camunda\Client\Model\CountResultDto**](../Model/CountResultDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **historicDetail**
> \Camunda\Client\Model\HistoricDetailDto historicDetail($id, $deserialize_value)

Get Historic Detail

Retrieves a historic detail by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\HistoricDetailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the detail.
$deserialize_value = true; // bool | Determines whether serializable variable values (typically variables that store custom Java objects) should be deserialized on server side (default `true`).  If set to `true`, a serializable variable will be deserialized on server side and transformed to JSON using [Jackson's](https://github.com/FasterXML/jackson) POJO/bean property introspection feature. Note that this requires the Java classes of the variable value to be on the REST API's classpath.  If set to `false`, a serializable variable will be returned in its serialized format. For example, a variable that is serialized as XML will be returned as a JSON string containing XML.  **Note:** While `true` is the default value for reasons of backward compatibility, we recommend setting this parameter to `false` when developing web applications that are independent of the Java process applications deployed to the engine.

try {
    $result = $apiInstance->historicDetail($id, $deserialize_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricDetailApi->historicDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the detail. |
 **deserialize_value** | **bool**| Determines whether serializable variable values (typically variables that store custom Java objects) should be deserialized on server side (default &#x60;true&#x60;).  If set to &#x60;true&#x60;, a serializable variable will be deserialized on server side and transformed to JSON using [Jackson&#x27;s](https://github.com/FasterXML/jackson) POJO/bean property introspection feature. Note that this requires the Java classes of the variable value to be on the REST API&#x27;s classpath.  If set to &#x60;false&#x60;, a serializable variable will be returned in its serialized format. For example, a variable that is serialized as XML will be returned as a JSON string containing XML.  **Note:** While &#x60;true&#x60; is the default value for reasons of backward compatibility, we recommend setting this parameter to &#x60;false&#x60; when developing web applications that are independent of the Java process applications deployed to the engine. | [optional]

### Return type

[**\Camunda\Client\Model\HistoricDetailDto**](../Model/HistoricDetailDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **historicDetailBinary**
> string historicDetailBinary($id)

Get Historic Detail (Binary)

Retrieves the content of a historic variable update by id. Applicable for byte array and file variables.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\HistoricDetailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the historic variable update.

try {
    $result = $apiInstance->historicDetailBinary($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricDetailApi->historicDetailBinary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the historic variable update. |

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream, */*, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryHistoricDetails**
> \Camunda\Client\Model\HistoricDetailDto[] queryHistoricDetails($body, $first_result, $max_results, $deserialize_values)

Get Historic Details (POST)

Queries for historic details that fulfill the given parameters. This method is slightly more powerful than the [Get Historic Details](https://docs.camunda.org/manual/7.21/reference/rest/history/detail/get-detail-query/) method because it allows sorting by multiple parameters. The size of the result set can be retrieved by using the [Get Historic Detail Count](https://docs.camunda.org/manual/7.21/reference/rest/history/detail/get-detail-query-count/) method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\HistoricDetailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Camunda\Client\Model\HistoricDetailQueryDto(); // \Camunda\Client\Model\HistoricDetailQueryDto | 
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.
$deserialize_values = true; // bool | Determines whether serializable variable values (typically variables that store custom Java objects) should be deserialized on server side (default `true`).  If set to `true`, a serializable variable will be deserialized on server side and transformed to JSON using [Jackson's](https://github.com/FasterXML/jackson) POJO/bean property introspection feature. Note that this requires the Java classes of the variable value to be on the REST API's classpath.  If set to `false`, a serializable variable will be returned in its serialized format. For example, a variable that is serialized as XML will be returned as a JSON string containing XML.  **Note:** While `true` is the default value for reasons of backward compatibility, we recommend setting this parameter to `false` when developing web applications that are independent of the Java process applications deployed to the engine.

try {
    $result = $apiInstance->queryHistoricDetails($body, $first_result, $max_results, $deserialize_values);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoricDetailApi->queryHistoricDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Camunda\Client\Model\HistoricDetailQueryDto**](../Model/HistoricDetailQueryDto.md)|  | [optional]
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]
 **deserialize_values** | **bool**| Determines whether serializable variable values (typically variables that store custom Java objects) should be deserialized on server side (default &#x60;true&#x60;).  If set to &#x60;true&#x60;, a serializable variable will be deserialized on server side and transformed to JSON using [Jackson&#x27;s](https://github.com/FasterXML/jackson) POJO/bean property introspection feature. Note that this requires the Java classes of the variable value to be on the REST API&#x27;s classpath.  If set to &#x60;false&#x60;, a serializable variable will be returned in its serialized format. For example, a variable that is serialized as XML will be returned as a JSON string containing XML.  **Note:** While &#x60;true&#x60; is the default value for reasons of backward compatibility, we recommend setting this parameter to &#x60;false&#x60; when developing web applications that are independent of the Java process applications deployed to the engine. | [optional]

### Return type

[**\Camunda\Client\Model\HistoricDetailDto[]**](../Model/HistoricDetailDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

