# Camunda\Client\ProcessInstanceApi

All URIs are relative to *http://{host}:{port}/{contextPath}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**correlateMessageAsyncOperation**](ProcessInstanceApi.md#correlatemessageasyncoperation) | **POST** /process-instance/message-async | Correlate Message Async (POST)
[**deleteAsyncHistoricQueryBased**](ProcessInstanceApi.md#deleteasynchistoricquerybased) | **POST** /process-instance/delete-historic-query-based | Delete Async Historic Query Based (POST)
[**deleteProcessInstance**](ProcessInstanceApi.md#deleteprocessinstance) | **DELETE** /process-instance/{id} | Delete
[**deleteProcessInstanceVariable**](ProcessInstanceApi.md#deleteprocessinstancevariable) | **DELETE** /process-instance/{id}/variables/{varName} | Delete Process Variable
[**deleteProcessInstancesAsyncOperation**](ProcessInstanceApi.md#deleteprocessinstancesasyncoperation) | **POST** /process-instance/delete | Delete Async (POST)
[**getActivityInstanceTree**](ProcessInstanceApi.md#getactivityinstancetree) | **GET** /process-instance/{id}/activity-instances | Get Activity Instance
[**getProcessInstance**](ProcessInstanceApi.md#getprocessinstance) | **GET** /process-instance/{id} | Get Process Instance
[**getProcessInstanceComments**](ProcessInstanceApi.md#getprocessinstancecomments) | **GET** /process-instance/{id}/comment | Get Process Instance Comments
[**getProcessInstanceVariable**](ProcessInstanceApi.md#getprocessinstancevariable) | **GET** /process-instance/{id}/variables/{varName} | Get Process Variable
[**getProcessInstanceVariableBinary**](ProcessInstanceApi.md#getprocessinstancevariablebinary) | **GET** /process-instance/{id}/variables/{varName}/data | Get Process Variable (Binary)
[**getProcessInstanceVariables**](ProcessInstanceApi.md#getprocessinstancevariables) | **GET** /process-instance/{id}/variables | Get Process Variables
[**getProcessInstances**](ProcessInstanceApi.md#getprocessinstances) | **GET** /process-instance | Get List
[**getProcessInstancesCount**](ProcessInstanceApi.md#getprocessinstancescount) | **GET** /process-instance/count | Get List Count
[**modifyProcessInstance**](ProcessInstanceApi.md#modifyprocessinstance) | **POST** /process-instance/{id}/modification | Modify Process Instance Execution State
[**modifyProcessInstanceAsyncOperation**](ProcessInstanceApi.md#modifyprocessinstanceasyncoperation) | **POST** /process-instance/{id}/modification-async | Modify Process Instance Execution State Async
[**modifyProcessInstanceVariables**](ProcessInstanceApi.md#modifyprocessinstancevariables) | **POST** /process-instance/{id}/variables | Update/Delete Process Variables
[**queryProcessInstances**](ProcessInstanceApi.md#queryprocessinstances) | **POST** /process-instance | Get List (POST)
[**queryProcessInstancesCount**](ProcessInstanceApi.md#queryprocessinstancescount) | **POST** /process-instance/count | Get List Count (POST)
[**setProcessInstanceVariable**](ProcessInstanceApi.md#setprocessinstancevariable) | **PUT** /process-instance/{id}/variables/{varName} | Update Process Variable
[**setProcessInstanceVariableBinary**](ProcessInstanceApi.md#setprocessinstancevariablebinary) | **POST** /process-instance/{id}/variables/{varName}/data | Update Process Variable (Binary)
[**setRetriesByProcess**](ProcessInstanceApi.md#setretriesbyprocess) | **POST** /process-instance/job-retries | Set Job Retries Async (POST)
[**setRetriesByProcessHistoricQueryBased**](ProcessInstanceApi.md#setretriesbyprocesshistoricquerybased) | **POST** /process-instance/job-retries-historic-query-based | Set Job Retries Async Historic Query Based (POST)
[**setVariablesAsyncOperation**](ProcessInstanceApi.md#setvariablesasyncoperation) | **POST** /process-instance/variables-async | Set Variables Async (POST)
[**updateSuspensionState**](ProcessInstanceApi.md#updatesuspensionstate) | **PUT** /process-instance/suspended | Activate/Suspend In Group
[**updateSuspensionStateAsyncOperation**](ProcessInstanceApi.md#updatesuspensionstateasyncoperation) | **POST** /process-instance/suspended-async | Activate/Suspend In Batch
[**updateSuspensionStateById**](ProcessInstanceApi.md#updatesuspensionstatebyid) | **PUT** /process-instance/{id}/suspended | Activate/Suspend Process Instance By Id

# **correlateMessageAsyncOperation**
> \Camunda\Client\Model\BatchDto correlateMessageAsyncOperation($body)

Correlate Message Async (POST)

Correlates a message asynchronously to executions that are waiting for this message.  Messages will not be correlated to process definition-level start message events to start process instances.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\ProcessInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Camunda\Client\Model\CorrelationMessageAsyncDto(); // \Camunda\Client\Model\CorrelationMessageAsyncDto | 

try {
    $result = $apiInstance->correlateMessageAsyncOperation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessInstanceApi->correlateMessageAsyncOperation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Camunda\Client\Model\CorrelationMessageAsyncDto**](../Model/CorrelationMessageAsyncDto.md)|  | [optional]

### Return type

[**\Camunda\Client\Model\BatchDto**](../Model/BatchDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAsyncHistoricQueryBased**
> \Camunda\Client\Model\BatchDto deleteAsyncHistoricQueryBased($body)

Delete Async Historic Query Based (POST)

Deletes a set of process instances asynchronously (batch) based on a historic process instance query.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\ProcessInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Camunda\Client\Model\DeleteProcessInstancesDto(); // \Camunda\Client\Model\DeleteProcessInstancesDto | **Unallowed property**: `processInstanceQuery`

try {
    $result = $apiInstance->deleteAsyncHistoricQueryBased($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessInstanceApi->deleteAsyncHistoricQueryBased: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Camunda\Client\Model\DeleteProcessInstancesDto**](../Model/DeleteProcessInstancesDto.md)| **Unallowed property**: &#x60;processInstanceQuery&#x60; | [optional]

### Return type

[**\Camunda\Client\Model\BatchDto**](../Model/BatchDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProcessInstance**
> deleteProcessInstance($id, $skip_custom_listeners, $skip_io_mappings, $skip_subprocesses, $fail_if_not_exists)

Delete

Deletes a running process instance by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\ProcessInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the process instance to be deleted.
$skip_custom_listeners = false; // bool | If set to true, the custom listeners will be skipped.
$skip_io_mappings = false; // bool | If set to true, the input/output mappings will be skipped.
$skip_subprocesses = false; // bool | If set to true, subprocesses related to deleted processes will be skipped.
$fail_if_not_exists = true; // bool | If set to false, the request will still be successful if the process id is not found.

try {
    $apiInstance->deleteProcessInstance($id, $skip_custom_listeners, $skip_io_mappings, $skip_subprocesses, $fail_if_not_exists);
} catch (Exception $e) {
    echo 'Exception when calling ProcessInstanceApi->deleteProcessInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the process instance to be deleted. |
 **skip_custom_listeners** | **bool**| If set to true, the custom listeners will be skipped. | [optional] [default to false]
 **skip_io_mappings** | **bool**| If set to true, the input/output mappings will be skipped. | [optional] [default to false]
 **skip_subprocesses** | **bool**| If set to true, subprocesses related to deleted processes will be skipped. | [optional] [default to false]
 **fail_if_not_exists** | **bool**| If set to false, the request will still be successful if the process id is not found. | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProcessInstanceVariable**
> deleteProcessInstanceVariable($id, $var_name)

Delete Process Variable

Deletes a variable of a process instance by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\ProcessInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the process instance to delete the variable from.
$var_name = "var_name_example"; // string | The name of the variable to delete.

try {
    $apiInstance->deleteProcessInstanceVariable($id, $var_name);
} catch (Exception $e) {
    echo 'Exception when calling ProcessInstanceApi->deleteProcessInstanceVariable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the process instance to delete the variable from. |
 **var_name** | **string**| The name of the variable to delete. |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProcessInstancesAsyncOperation**
> \Camunda\Client\Model\BatchDto deleteProcessInstancesAsyncOperation($body)

Delete Async (POST)

Deletes multiple process instances asynchronously (batch).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\ProcessInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Camunda\Client\Model\DeleteProcessInstancesDto(); // \Camunda\Client\Model\DeleteProcessInstancesDto | **Unallowed property**: `historicProcessInstanceQuery`

try {
    $result = $apiInstance->deleteProcessInstancesAsyncOperation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessInstanceApi->deleteProcessInstancesAsyncOperation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Camunda\Client\Model\DeleteProcessInstancesDto**](../Model/DeleteProcessInstancesDto.md)| **Unallowed property**: &#x60;historicProcessInstanceQuery&#x60; | [optional]

### Return type

[**\Camunda\Client\Model\BatchDto**](../Model/BatchDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getActivityInstanceTree**
> \Camunda\Client\Model\ActivityInstanceDto getActivityInstanceTree($id)

Get Activity Instance

Retrieves an Activity Instance (Tree) for a given process instance by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\ProcessInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the process instance for which the activity instance should be retrieved.

try {
    $result = $apiInstance->getActivityInstanceTree($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessInstanceApi->getActivityInstanceTree: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the process instance for which the activity instance should be retrieved. |

### Return type

[**\Camunda\Client\Model\ActivityInstanceDto**](../Model/ActivityInstanceDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProcessInstance**
> \Camunda\Client\Model\ProcessInstanceDto getProcessInstance($id)

Get Process Instance

Retrieves a process instance by id, according to the `ProcessInstance` interface in the engine.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\ProcessInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the process instance to be retrieved.

try {
    $result = $apiInstance->getProcessInstance($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessInstanceApi->getProcessInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the process instance to be retrieved. |

### Return type

[**\Camunda\Client\Model\ProcessInstanceDto**](../Model/ProcessInstanceDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProcessInstanceComments**
> \Camunda\Client\Model\CommentDto[] getProcessInstanceComments($id)

Get Process Instance Comments

Gets the comments for a process instance by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\ProcessInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the process instance to retrieve the comments for.

try {
    $result = $apiInstance->getProcessInstanceComments($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessInstanceApi->getProcessInstanceComments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the process instance to retrieve the comments for. |

### Return type

[**\Camunda\Client\Model\CommentDto[]**](../Model/CommentDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProcessInstanceVariable**
> \Camunda\Client\Model\VariableValueDto getProcessInstanceVariable($id, $var_name, $deserialize_value)

Get Process Variable

Retrieves a variable of a given process instance by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\ProcessInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the process instance to retrieve the variable for.
$var_name = "var_name_example"; // string | The name of the variable to retrieve.
$deserialize_value = true; // bool | Determines whether serializable variable values (typically variables that store custom Java objects) should be deserialized on server side (default true).  If set to true, a serializable variable will be deserialized on server side and transformed to JSON using [Jackson's](https://github.com/FasterXML/jackson) POJO/bean property introspection feature. Note that this requires the Java classes of the variable value to be on the REST API's classpath.  If set to false, a serializable variable will be returned in its serialized format. For example, a variable that is serialized as XML will be returned as a JSON string containing XML.  Note: While true is the default value for reasons of backward compatibility, we recommend setting this parameter to false when developing web applications that are independent of the Java process applications deployed to the engine.

try {
    $result = $apiInstance->getProcessInstanceVariable($id, $var_name, $deserialize_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessInstanceApi->getProcessInstanceVariable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the process instance to retrieve the variable for. |
 **var_name** | **string**| The name of the variable to retrieve. |
 **deserialize_value** | **bool**| Determines whether serializable variable values (typically variables that store custom Java objects) should be deserialized on server side (default true).  If set to true, a serializable variable will be deserialized on server side and transformed to JSON using [Jackson&#x27;s](https://github.com/FasterXML/jackson) POJO/bean property introspection feature. Note that this requires the Java classes of the variable value to be on the REST API&#x27;s classpath.  If set to false, a serializable variable will be returned in its serialized format. For example, a variable that is serialized as XML will be returned as a JSON string containing XML.  Note: While true is the default value for reasons of backward compatibility, we recommend setting this parameter to false when developing web applications that are independent of the Java process applications deployed to the engine. | [optional] [default to true]

### Return type

[**\Camunda\Client\Model\VariableValueDto**](../Model/VariableValueDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProcessInstanceVariableBinary**
> string getProcessInstanceVariableBinary($id, $var_name)

Get Process Variable (Binary)

Retrieves the content of a Process Variable by the Process Instance id and the Process Variable name. Applicable for byte array or file Process Variables.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\ProcessInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the process instance to retrieve the variable for.
$var_name = "var_name_example"; // string | The name of the variable to retrieve.

try {
    $result = $apiInstance->getProcessInstanceVariableBinary($id, $var_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessInstanceApi->getProcessInstanceVariableBinary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the process instance to retrieve the variable for. |
 **var_name** | **string**| The name of the variable to retrieve. |

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream, text/plain, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProcessInstanceVariables**
> map[string,\Camunda\Client\Model\VariableValueDto] getProcessInstanceVariables($id, $deserialize_values)

Get Process Variables

Retrieves all variables of a given process instance by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\ProcessInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the process instance to retrieve the variables from.
$deserialize_values = true; // bool | Determines whether serializable variable values (typically variables that store custom Java objects) should be deserialized on server side (default true).  If set to true, a serializable variable will be deserialized on server side and transformed to JSON using [Jackson's](https://github.com/FasterXML/jackson) POJO/bean property introspection feature. Note that this requires the Java classes of the variable value to be on the REST API's classpath.  If set to false, a serializable variable will be returned in its serialized format. For example, a variable that is serialized as XML will be returned as a JSON string containing XML.  Note: While true is the default value for reasons of backward compatibility, we recommend setting this parameter to false when developing web applications that are independent of the Java process applications deployed to the engine.

try {
    $result = $apiInstance->getProcessInstanceVariables($id, $deserialize_values);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessInstanceApi->getProcessInstanceVariables: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the process instance to retrieve the variables from. |
 **deserialize_values** | **bool**| Determines whether serializable variable values (typically variables that store custom Java objects) should be deserialized on server side (default true).  If set to true, a serializable variable will be deserialized on server side and transformed to JSON using [Jackson&#x27;s](https://github.com/FasterXML/jackson) POJO/bean property introspection feature. Note that this requires the Java classes of the variable value to be on the REST API&#x27;s classpath.  If set to false, a serializable variable will be returned in its serialized format. For example, a variable that is serialized as XML will be returned as a JSON string containing XML.  Note: While true is the default value for reasons of backward compatibility, we recommend setting this parameter to false when developing web applications that are independent of the Java process applications deployed to the engine. | [optional] [default to true]

### Return type

[**map[string,\Camunda\Client\Model\VariableValueDto]**](../Model/VariableValueDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProcessInstances**
> \Camunda\Client\Model\ProcessInstanceDto[] getProcessInstances($sort_by, $sort_order, $first_result, $max_results, $process_instance_ids, $business_key, $business_key_like, $case_instance_id, $process_definition_id, $process_definition_key, $process_definition_key_in, $process_definition_key_not_in, $deployment_id, $super_process_instance, $sub_process_instance, $super_case_instance, $sub_case_instance, $active, $suspended, $with_incident, $incident_id, $incident_type, $incident_message, $incident_message_like, $tenant_id_in, $without_tenant_id, $process_definition_without_tenant_id, $activity_id_in, $root_process_instances, $leaf_process_instances, $variables, $variable_names_ignore_case, $variable_values_ignore_case)

Get List

Queries for process instances that fulfill given parameters. Parameters may be static as well as dynamic runtime properties of process instances. The size of the result set can be retrieved by using the Get Instance Count method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\ProcessInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sort_by = "sort_by_example"; // string | Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter.
$sort_order = "sort_order_example"; // string | Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter.
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.
$process_instance_ids = "process_instance_ids_example"; // string | Filter by a comma-separated list of process instance ids.
$business_key = "business_key_example"; // string | Filter by process instance business key.
$business_key_like = "business_key_like_example"; // string | Filter by process instance business key that the parameter is a substring of.
$case_instance_id = "case_instance_id_example"; // string | Filter by case instance id.
$process_definition_id = "process_definition_id_example"; // string | Filter by the deployment the id belongs to.
$process_definition_key = "process_definition_key_example"; // string | Filter by the key of the process definition the instances run on.
$process_definition_key_in = "process_definition_key_in_example"; // string | Filter by a comma-separated list of process definition keys. A process instance must have one of the given process definition keys.
$process_definition_key_not_in = "process_definition_key_not_in_example"; // string | Exclude instances by a comma-separated list of process definition keys. A process instance must not have one of the given process definition keys.
$deployment_id = "deployment_id_example"; // string | Filter by the deployment the id belongs to.
$super_process_instance = "super_process_instance_example"; // string | Restrict query to all process instances that are sub process instances of the given process instance. Takes a process instance id.
$sub_process_instance = "sub_process_instance_example"; // string | Restrict query to all process instances that have the given process instance as a sub process instance. Takes a process instance id.
$super_case_instance = "super_case_instance_example"; // string | Restrict query to all process instances that are sub process instances of the given case instance. Takes a case instance id.
$sub_case_instance = "sub_case_instance_example"; // string | Restrict query to all process instances that have the given case instance as a sub case instance. Takes a case instance id.
$active = false; // bool | Only include active process instances. Value may only be true, as false is the default behavior.
$suspended = false; // bool | Only include suspended process instances. Value may only be true, as false is the default behavior.
$with_incident = false; // bool | Filter by presence of incidents. Selects only process instances that have an incident.
$incident_id = "incident_id_example"; // string | Filter by the incident id.
$incident_type = "incident_type_example"; // string | Filter by the incident type. See the [User Guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/incidents/#incident-types) for a list of incident types.
$incident_message = "incident_message_example"; // string | Filter by the incident message. Exact match.
$incident_message_like = "incident_message_like_example"; // string | Filter by the incident message that the parameter is a substring of.
$tenant_id_in = "tenant_id_in_example"; // string | Filter by a comma-separated list of tenant ids. A process instance must have one of the given tenant ids.
$without_tenant_id = false; // bool | Only include process instances which belong to no tenant.
$process_definition_without_tenant_id = false; // bool | Only include process instances which process definition has no tenant id.
$activity_id_in = "activity_id_in_example"; // string | Filter by a comma-separated list of activity ids. A process instance must currently wait in a leaf activity with one of the given activity ids.
$root_process_instances = false; // bool | Restrict the query to all process instances that are top level process instances.
$leaf_process_instances = false; // bool | Restrict the query to all process instances that are leaf instances. (i.e. don't have any sub instances).
$variables = "variables_example"; // string | Only include process instances that have variables with certain values. Variable filtering expressions are comma-separated and are structured as follows:  A valid parameter value has the form `key_operator_value`. `key` is the variable name, `operator` is the comparison operator to be used and `value` the variable value.  **Note**: Values are always treated as String objects on server side.  Valid `operator` values are: `eq` - equal to; `neq` - not equal to; `gt` - greater than; `gteq` - greater than or equal to; `lt` - lower than; `lteq` - lower than or equal to; `like`. `key` and `value` may not contain underscore or comma characters.
$variable_names_ignore_case = false; // bool | Match all variable names in this query case-insensitively. If set to true variableName and variablename are treated as equal.
$variable_values_ignore_case = false; // bool | Match all variable values in this query case-insensitively. If set to true variableValue and variablevalue are treated as equal.

try {
    $result = $apiInstance->getProcessInstances($sort_by, $sort_order, $first_result, $max_results, $process_instance_ids, $business_key, $business_key_like, $case_instance_id, $process_definition_id, $process_definition_key, $process_definition_key_in, $process_definition_key_not_in, $deployment_id, $super_process_instance, $sub_process_instance, $super_case_instance, $sub_case_instance, $active, $suspended, $with_incident, $incident_id, $incident_type, $incident_message, $incident_message_like, $tenant_id_in, $without_tenant_id, $process_definition_without_tenant_id, $activity_id_in, $root_process_instances, $leaf_process_instances, $variables, $variable_names_ignore_case, $variable_values_ignore_case);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessInstanceApi->getProcessInstances: ', $e->getMessage(), PHP_EOL;
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
 **process_instance_ids** | **string**| Filter by a comma-separated list of process instance ids. | [optional]
 **business_key** | **string**| Filter by process instance business key. | [optional]
 **business_key_like** | **string**| Filter by process instance business key that the parameter is a substring of. | [optional]
 **case_instance_id** | **string**| Filter by case instance id. | [optional]
 **process_definition_id** | **string**| Filter by the deployment the id belongs to. | [optional]
 **process_definition_key** | **string**| Filter by the key of the process definition the instances run on. | [optional]
 **process_definition_key_in** | **string**| Filter by a comma-separated list of process definition keys. A process instance must have one of the given process definition keys. | [optional]
 **process_definition_key_not_in** | **string**| Exclude instances by a comma-separated list of process definition keys. A process instance must not have one of the given process definition keys. | [optional]
 **deployment_id** | **string**| Filter by the deployment the id belongs to. | [optional]
 **super_process_instance** | **string**| Restrict query to all process instances that are sub process instances of the given process instance. Takes a process instance id. | [optional]
 **sub_process_instance** | **string**| Restrict query to all process instances that have the given process instance as a sub process instance. Takes a process instance id. | [optional]
 **super_case_instance** | **string**| Restrict query to all process instances that are sub process instances of the given case instance. Takes a case instance id. | [optional]
 **sub_case_instance** | **string**| Restrict query to all process instances that have the given case instance as a sub case instance. Takes a case instance id. | [optional]
 **active** | **bool**| Only include active process instances. Value may only be true, as false is the default behavior. | [optional] [default to false]
 **suspended** | **bool**| Only include suspended process instances. Value may only be true, as false is the default behavior. | [optional] [default to false]
 **with_incident** | **bool**| Filter by presence of incidents. Selects only process instances that have an incident. | [optional] [default to false]
 **incident_id** | **string**| Filter by the incident id. | [optional]
 **incident_type** | **string**| Filter by the incident type. See the [User Guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/incidents/#incident-types) for a list of incident types. | [optional]
 **incident_message** | **string**| Filter by the incident message. Exact match. | [optional]
 **incident_message_like** | **string**| Filter by the incident message that the parameter is a substring of. | [optional]
 **tenant_id_in** | **string**| Filter by a comma-separated list of tenant ids. A process instance must have one of the given tenant ids. | [optional]
 **without_tenant_id** | **bool**| Only include process instances which belong to no tenant. | [optional] [default to false]
 **process_definition_without_tenant_id** | **bool**| Only include process instances which process definition has no tenant id. | [optional] [default to false]
 **activity_id_in** | **string**| Filter by a comma-separated list of activity ids. A process instance must currently wait in a leaf activity with one of the given activity ids. | [optional]
 **root_process_instances** | **bool**| Restrict the query to all process instances that are top level process instances. | [optional] [default to false]
 **leaf_process_instances** | **bool**| Restrict the query to all process instances that are leaf instances. (i.e. don&#x27;t have any sub instances). | [optional] [default to false]
 **variables** | **string**| Only include process instances that have variables with certain values. Variable filtering expressions are comma-separated and are structured as follows:  A valid parameter value has the form &#x60;key_operator_value&#x60;. &#x60;key&#x60; is the variable name, &#x60;operator&#x60; is the comparison operator to be used and &#x60;value&#x60; the variable value.  **Note**: Values are always treated as String objects on server side.  Valid &#x60;operator&#x60; values are: &#x60;eq&#x60; - equal to; &#x60;neq&#x60; - not equal to; &#x60;gt&#x60; - greater than; &#x60;gteq&#x60; - greater than or equal to; &#x60;lt&#x60; - lower than; &#x60;lteq&#x60; - lower than or equal to; &#x60;like&#x60;. &#x60;key&#x60; and &#x60;value&#x60; may not contain underscore or comma characters. | [optional]
 **variable_names_ignore_case** | **bool**| Match all variable names in this query case-insensitively. If set to true variableName and variablename are treated as equal. | [optional] [default to false]
 **variable_values_ignore_case** | **bool**| Match all variable values in this query case-insensitively. If set to true variableValue and variablevalue are treated as equal. | [optional] [default to false]

### Return type

[**\Camunda\Client\Model\ProcessInstanceDto[]**](../Model/ProcessInstanceDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProcessInstancesCount**
> \Camunda\Client\Model\CountResultDto getProcessInstancesCount($process_instance_ids, $business_key, $business_key_like, $case_instance_id, $process_definition_id, $process_definition_key, $process_definition_key_in, $process_definition_key_not_in, $deployment_id, $super_process_instance, $sub_process_instance, $super_case_instance, $sub_case_instance, $active, $suspended, $with_incident, $incident_id, $incident_type, $incident_message, $incident_message_like, $tenant_id_in, $without_tenant_id, $process_definition_without_tenant_id, $activity_id_in, $root_process_instances, $leaf_process_instances, $variables, $variable_names_ignore_case, $variable_values_ignore_case)

Get List Count

Queries for the number of process instances that fulfill given parameters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\ProcessInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_instance_ids = "process_instance_ids_example"; // string | Filter by a comma-separated list of process instance ids.
$business_key = "business_key_example"; // string | Filter by process instance business key.
$business_key_like = "business_key_like_example"; // string | Filter by process instance business key that the parameter is a substring of.
$case_instance_id = "case_instance_id_example"; // string | Filter by case instance id.
$process_definition_id = "process_definition_id_example"; // string | Filter by the deployment the id belongs to.
$process_definition_key = "process_definition_key_example"; // string | Filter by the key of the process definition the instances run on.
$process_definition_key_in = "process_definition_key_in_example"; // string | Filter by a comma-separated list of process definition keys. A process instance must have one of the given process definition keys.
$process_definition_key_not_in = "process_definition_key_not_in_example"; // string | Exclude instances by a comma-separated list of process definition keys. A process instance must not have one of the given process definition keys.
$deployment_id = "deployment_id_example"; // string | Filter by the deployment the id belongs to.
$super_process_instance = "super_process_instance_example"; // string | Restrict query to all process instances that are sub process instances of the given process instance. Takes a process instance id.
$sub_process_instance = "sub_process_instance_example"; // string | Restrict query to all process instances that have the given process instance as a sub process instance. Takes a process instance id.
$super_case_instance = "super_case_instance_example"; // string | Restrict query to all process instances that are sub process instances of the given case instance. Takes a case instance id.
$sub_case_instance = "sub_case_instance_example"; // string | Restrict query to all process instances that have the given case instance as a sub case instance. Takes a case instance id.
$active = false; // bool | Only include active process instances. Value may only be true, as false is the default behavior.
$suspended = false; // bool | Only include suspended process instances. Value may only be true, as false is the default behavior.
$with_incident = false; // bool | Filter by presence of incidents. Selects only process instances that have an incident.
$incident_id = "incident_id_example"; // string | Filter by the incident id.
$incident_type = "incident_type_example"; // string | Filter by the incident type. See the [User Guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/incidents/#incident-types) for a list of incident types.
$incident_message = "incident_message_example"; // string | Filter by the incident message. Exact match.
$incident_message_like = "incident_message_like_example"; // string | Filter by the incident message that the parameter is a substring of.
$tenant_id_in = "tenant_id_in_example"; // string | Filter by a comma-separated list of tenant ids. A process instance must have one of the given tenant ids.
$without_tenant_id = false; // bool | Only include process instances which belong to no tenant.
$process_definition_without_tenant_id = false; // bool | Only include process instances which process definition has no tenant id.
$activity_id_in = "activity_id_in_example"; // string | Filter by a comma-separated list of activity ids. A process instance must currently wait in a leaf activity with one of the given activity ids.
$root_process_instances = false; // bool | Restrict the query to all process instances that are top level process instances.
$leaf_process_instances = false; // bool | Restrict the query to all process instances that are leaf instances. (i.e. don't have any sub instances).
$variables = "variables_example"; // string | Only include process instances that have variables with certain values. Variable filtering expressions are comma-separated and are structured as follows:  A valid parameter value has the form `key_operator_value`. `key` is the variable name, `operator` is the comparison operator to be used and `value` the variable value.  **Note**: Values are always treated as String objects on server side.  Valid `operator` values are: `eq` - equal to; `neq` - not equal to; `gt` - greater than; `gteq` - greater than or equal to; `lt` - lower than; `lteq` - lower than or equal to; `like`. `key` and `value` may not contain underscore or comma characters.
$variable_names_ignore_case = false; // bool | Match all variable names in this query case-insensitively. If set to true variableName and variablename are treated as equal.
$variable_values_ignore_case = false; // bool | Match all variable values in this query case-insensitively. If set to true variableValue and variablevalue are treated as equal.

try {
    $result = $apiInstance->getProcessInstancesCount($process_instance_ids, $business_key, $business_key_like, $case_instance_id, $process_definition_id, $process_definition_key, $process_definition_key_in, $process_definition_key_not_in, $deployment_id, $super_process_instance, $sub_process_instance, $super_case_instance, $sub_case_instance, $active, $suspended, $with_incident, $incident_id, $incident_type, $incident_message, $incident_message_like, $tenant_id_in, $without_tenant_id, $process_definition_without_tenant_id, $activity_id_in, $root_process_instances, $leaf_process_instances, $variables, $variable_names_ignore_case, $variable_values_ignore_case);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessInstanceApi->getProcessInstancesCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_instance_ids** | **string**| Filter by a comma-separated list of process instance ids. | [optional]
 **business_key** | **string**| Filter by process instance business key. | [optional]
 **business_key_like** | **string**| Filter by process instance business key that the parameter is a substring of. | [optional]
 **case_instance_id** | **string**| Filter by case instance id. | [optional]
 **process_definition_id** | **string**| Filter by the deployment the id belongs to. | [optional]
 **process_definition_key** | **string**| Filter by the key of the process definition the instances run on. | [optional]
 **process_definition_key_in** | **string**| Filter by a comma-separated list of process definition keys. A process instance must have one of the given process definition keys. | [optional]
 **process_definition_key_not_in** | **string**| Exclude instances by a comma-separated list of process definition keys. A process instance must not have one of the given process definition keys. | [optional]
 **deployment_id** | **string**| Filter by the deployment the id belongs to. | [optional]
 **super_process_instance** | **string**| Restrict query to all process instances that are sub process instances of the given process instance. Takes a process instance id. | [optional]
 **sub_process_instance** | **string**| Restrict query to all process instances that have the given process instance as a sub process instance. Takes a process instance id. | [optional]
 **super_case_instance** | **string**| Restrict query to all process instances that are sub process instances of the given case instance. Takes a case instance id. | [optional]
 **sub_case_instance** | **string**| Restrict query to all process instances that have the given case instance as a sub case instance. Takes a case instance id. | [optional]
 **active** | **bool**| Only include active process instances. Value may only be true, as false is the default behavior. | [optional] [default to false]
 **suspended** | **bool**| Only include suspended process instances. Value may only be true, as false is the default behavior. | [optional] [default to false]
 **with_incident** | **bool**| Filter by presence of incidents. Selects only process instances that have an incident. | [optional] [default to false]
 **incident_id** | **string**| Filter by the incident id. | [optional]
 **incident_type** | **string**| Filter by the incident type. See the [User Guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/incidents/#incident-types) for a list of incident types. | [optional]
 **incident_message** | **string**| Filter by the incident message. Exact match. | [optional]
 **incident_message_like** | **string**| Filter by the incident message that the parameter is a substring of. | [optional]
 **tenant_id_in** | **string**| Filter by a comma-separated list of tenant ids. A process instance must have one of the given tenant ids. | [optional]
 **without_tenant_id** | **bool**| Only include process instances which belong to no tenant. | [optional] [default to false]
 **process_definition_without_tenant_id** | **bool**| Only include process instances which process definition has no tenant id. | [optional] [default to false]
 **activity_id_in** | **string**| Filter by a comma-separated list of activity ids. A process instance must currently wait in a leaf activity with one of the given activity ids. | [optional]
 **root_process_instances** | **bool**| Restrict the query to all process instances that are top level process instances. | [optional] [default to false]
 **leaf_process_instances** | **bool**| Restrict the query to all process instances that are leaf instances. (i.e. don&#x27;t have any sub instances). | [optional] [default to false]
 **variables** | **string**| Only include process instances that have variables with certain values. Variable filtering expressions are comma-separated and are structured as follows:  A valid parameter value has the form &#x60;key_operator_value&#x60;. &#x60;key&#x60; is the variable name, &#x60;operator&#x60; is the comparison operator to be used and &#x60;value&#x60; the variable value.  **Note**: Values are always treated as String objects on server side.  Valid &#x60;operator&#x60; values are: &#x60;eq&#x60; - equal to; &#x60;neq&#x60; - not equal to; &#x60;gt&#x60; - greater than; &#x60;gteq&#x60; - greater than or equal to; &#x60;lt&#x60; - lower than; &#x60;lteq&#x60; - lower than or equal to; &#x60;like&#x60;. &#x60;key&#x60; and &#x60;value&#x60; may not contain underscore or comma characters. | [optional]
 **variable_names_ignore_case** | **bool**| Match all variable names in this query case-insensitively. If set to true variableName and variablename are treated as equal. | [optional] [default to false]
 **variable_values_ignore_case** | **bool**| Match all variable values in this query case-insensitively. If set to true variableValue and variablevalue are treated as equal. | [optional] [default to false]

### Return type

[**\Camunda\Client\Model\CountResultDto**](../Model/CountResultDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modifyProcessInstance**
> modifyProcessInstance($id, $body)

Modify Process Instance Execution State

Submits a list of modification instructions to change a process instance's execution state. A modification instruction is one of the following:  * Starting execution before an activity * Starting execution after an activity on its single outgoing sequence flow * Starting execution on a specific sequence flow * Canceling an activity instance, transition instance, or all instances (activity or transition) for an activity  Instructions are executed immediately and in the order they are provided in this request's body. Variables can be provided with every starting instruction.  The exact semantics of modification can be read about in the [User guide](https://docs.camunda.org/manual/develop/user-guide/process-engine/process-instance-modification/).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\ProcessInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the process instance to modify.
$body = new \Camunda\Client\Model\ProcessInstanceModificationDto(); // \Camunda\Client\Model\ProcessInstanceModificationDto | 

try {
    $apiInstance->modifyProcessInstance($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProcessInstanceApi->modifyProcessInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the process instance to modify. |
 **body** | [**\Camunda\Client\Model\ProcessInstanceModificationDto**](../Model/ProcessInstanceModificationDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modifyProcessInstanceAsyncOperation**
> \Camunda\Client\Model\BatchDto modifyProcessInstanceAsyncOperation($id, $body)

Modify Process Instance Execution State Async

Submits a list of modification instructions to change a process instance's execution state async. A modification instruction is one of the following:  * Starting execution before an activity * Starting execution after an activity on its single outgoing sequence flow * Starting execution on a specific sequence flow * Cancelling an activity instance, transition instance, or all instances (activity or transition) for an activity  Instructions are executed asynchronous and in the order they are provided in this request's body. Variables can be provided with every starting instruction.  The exact semantics of modification can be read about in the [User guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/process-instance-modification/).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\ProcessInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the process instance to modify.
$body = new \Camunda\Client\Model\ProcessInstanceModificationDto(); // \Camunda\Client\Model\ProcessInstanceModificationDto | 

try {
    $result = $apiInstance->modifyProcessInstanceAsyncOperation($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessInstanceApi->modifyProcessInstanceAsyncOperation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the process instance to modify. |
 **body** | [**\Camunda\Client\Model\ProcessInstanceModificationDto**](../Model/ProcessInstanceModificationDto.md)|  | [optional]

### Return type

[**\Camunda\Client\Model\BatchDto**](../Model/BatchDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modifyProcessInstanceVariables**
> modifyProcessInstanceVariables($id, $body)

Update/Delete Process Variables

Updates or deletes the variables of a process instance by id. Updates precede deletions. So, if a variable is updated AND deleted, the deletion overrides the update.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\ProcessInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the process instance to set variables for.
$body = new \Camunda\Client\Model\PatchVariablesDto(); // \Camunda\Client\Model\PatchVariablesDto | 

try {
    $apiInstance->modifyProcessInstanceVariables($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProcessInstanceApi->modifyProcessInstanceVariables: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the process instance to set variables for. |
 **body** | [**\Camunda\Client\Model\PatchVariablesDto**](../Model/PatchVariablesDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryProcessInstances**
> \Camunda\Client\Model\ProcessInstanceDto[] queryProcessInstances($body, $first_result, $max_results)

Get List (POST)

Queries for process instances that fulfill given parameters through a JSON object. This method is slightly more powerful than the Get Instances method because it allows filtering by multiple process variables of types `string`, `number` or `boolean`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\ProcessInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Camunda\Client\Model\ProcessInstanceQueryDto(); // \Camunda\Client\Model\ProcessInstanceQueryDto | 
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.

try {
    $result = $apiInstance->queryProcessInstances($body, $first_result, $max_results);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessInstanceApi->queryProcessInstances: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Camunda\Client\Model\ProcessInstanceQueryDto**](../Model/ProcessInstanceQueryDto.md)|  | [optional]
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]

### Return type

[**\Camunda\Client\Model\ProcessInstanceDto[]**](../Model/ProcessInstanceDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryProcessInstancesCount**
> \Camunda\Client\Model\CountResultDto queryProcessInstancesCount($body)

Get List Count (POST)

Queries for the number of process instances that fulfill the given parameters. This method takes the same message body as the Get Instances (POST) method and therefore it is slightly more powerful than the Get Instance Count method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\ProcessInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Camunda\Client\Model\ProcessInstanceQueryDto(); // \Camunda\Client\Model\ProcessInstanceQueryDto | 

try {
    $result = $apiInstance->queryProcessInstancesCount($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessInstanceApi->queryProcessInstancesCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Camunda\Client\Model\ProcessInstanceQueryDto**](../Model/ProcessInstanceQueryDto.md)|  | [optional]

### Return type

[**\Camunda\Client\Model\CountResultDto**](../Model/CountResultDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setProcessInstanceVariable**
> setProcessInstanceVariable($id, $var_name, $body)

Update Process Variable

Sets a variable of a given process instance by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\ProcessInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the process instance to set the variable for.
$var_name = "var_name_example"; // string | The name of the variable to set.
$body = new \Camunda\Client\Model\VariableValueDto(); // \Camunda\Client\Model\VariableValueDto | 

try {
    $apiInstance->setProcessInstanceVariable($id, $var_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProcessInstanceApi->setProcessInstanceVariable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the process instance to set the variable for. |
 **var_name** | **string**| The name of the variable to set. |
 **body** | [**\Camunda\Client\Model\VariableValueDto**](../Model/VariableValueDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setProcessInstanceVariableBinary**
> setProcessInstanceVariableBinary($id, $var_name, $data, $value_type)

Update Process Variable (Binary)

Sets the serialized value for a binary variable or the binary value for a file variable.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\ProcessInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the process instance to retrieve the variable for.
$var_name = "var_name_example"; // string | The name of the variable to retrieve.
$data = "data_example"; // string | 
$value_type = "value_type_example"; // string | 

try {
    $apiInstance->setProcessInstanceVariableBinary($id, $var_name, $data, $value_type);
} catch (Exception $e) {
    echo 'Exception when calling ProcessInstanceApi->setProcessInstanceVariableBinary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the process instance to retrieve the variable for. |
 **var_name** | **string**| The name of the variable to retrieve. |
 **data** | **string****string**|  | [optional]
 **value_type** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setRetriesByProcess**
> \Camunda\Client\Model\BatchDto setRetriesByProcess($body)

Set Job Retries Async (POST)

Create a batch to set retries of jobs associated with given processes asynchronously.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\ProcessInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Camunda\Client\Model\SetJobRetriesByProcessDto(); // \Camunda\Client\Model\SetJobRetriesByProcessDto | Please note that if both processInstances and processInstanceQuery are provided,
then the resulting execution will be performed on the union of these sets.
**Unallowed property**: `historicProcessInstanceQuery`

try {
    $result = $apiInstance->setRetriesByProcess($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessInstanceApi->setRetriesByProcess: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Camunda\Client\Model\SetJobRetriesByProcessDto**](../Model/SetJobRetriesByProcessDto.md)| Please note that if both processInstances and processInstanceQuery are provided,
then the resulting execution will be performed on the union of these sets.
**Unallowed property**: &#x60;historicProcessInstanceQuery&#x60; | [optional]

### Return type

[**\Camunda\Client\Model\BatchDto**](../Model/BatchDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setRetriesByProcessHistoricQueryBased**
> \Camunda\Client\Model\BatchDto setRetriesByProcessHistoricQueryBased($body)

Set Job Retries Async Historic Query Based (POST)

Create a batch to set retries of jobs asynchronously based on a historic process instance query.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\ProcessInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Camunda\Client\Model\SetJobRetriesByProcessDto(); // \Camunda\Client\Model\SetJobRetriesByProcessDto | Please note that if both processInstances and historicProcessInstanceQuery are provided,
then the resulting execution will be performed on the union of these sets.
**Unallowed property**: `processInstanceQuery`

try {
    $result = $apiInstance->setRetriesByProcessHistoricQueryBased($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessInstanceApi->setRetriesByProcessHistoricQueryBased: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Camunda\Client\Model\SetJobRetriesByProcessDto**](../Model/SetJobRetriesByProcessDto.md)| Please note that if both processInstances and historicProcessInstanceQuery are provided,
then the resulting execution will be performed on the union of these sets.
**Unallowed property**: &#x60;processInstanceQuery&#x60; | [optional]

### Return type

[**\Camunda\Client\Model\BatchDto**](../Model/BatchDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setVariablesAsyncOperation**
> \Camunda\Client\Model\BatchDto setVariablesAsyncOperation($body)

Set Variables Async (POST)

Update or create runtime process variables in the root scope of process instances.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\ProcessInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Camunda\Client\Model\SetVariablesAsyncDto(); // \Camunda\Client\Model\SetVariablesAsyncDto | 

try {
    $result = $apiInstance->setVariablesAsyncOperation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessInstanceApi->setVariablesAsyncOperation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Camunda\Client\Model\SetVariablesAsyncDto**](../Model/SetVariablesAsyncDto.md)|  | [optional]

### Return type

[**\Camunda\Client\Model\BatchDto**](../Model/BatchDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSuspensionState**
> updateSuspensionState($body)

Activate/Suspend In Group

Activates or suspends process instances by providing certain criteria:  # Activate/Suspend Process Instance By Process Definition Id * `suspend` * `processDefinitionId`  # Activate/Suspend Process Instance By Process Definition Key  * `suspend` * `processDefinitionKey` * `processDefinitionTenantId` * `processDefinitionWithoutTenantId`  # Activate/Suspend Process Instance In Group * `suspend` * `processInstanceIds` * `processInstanceQuery` * `historicProcessInstanceQuery`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\ProcessInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Camunda\Client\Model\ProcessInstanceSuspensionStateDto(); // \Camunda\Client\Model\ProcessInstanceSuspensionStateDto | 

try {
    $apiInstance->updateSuspensionState($body);
} catch (Exception $e) {
    echo 'Exception when calling ProcessInstanceApi->updateSuspensionState: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Camunda\Client\Model\ProcessInstanceSuspensionStateDto**](../Model/ProcessInstanceSuspensionStateDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSuspensionStateAsyncOperation**
> \Camunda\Client\Model\BatchDto updateSuspensionStateAsyncOperation($body)

Activate/Suspend In Batch

Activates or suspends process instances asynchronously with a list of process instance ids, a process instance query, and/or a historical process instance query.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\ProcessInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Camunda\Client\Model\ProcessInstanceSuspensionStateAsyncDto(); // \Camunda\Client\Model\ProcessInstanceSuspensionStateAsyncDto | 

try {
    $result = $apiInstance->updateSuspensionStateAsyncOperation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessInstanceApi->updateSuspensionStateAsyncOperation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Camunda\Client\Model\ProcessInstanceSuspensionStateAsyncDto**](../Model/ProcessInstanceSuspensionStateAsyncDto.md)|  | [optional]

### Return type

[**\Camunda\Client\Model\BatchDto**](../Model/BatchDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSuspensionStateById**
> updateSuspensionStateById($id, $body)

Activate/Suspend Process Instance By Id

Activates or suspends a given process instance by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\ProcessInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the process instance to activate or suspend.
$body = new \Camunda\Client\Model\SuspensionStateDto(); // \Camunda\Client\Model\SuspensionStateDto | 

try {
    $apiInstance->updateSuspensionStateById($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProcessInstanceApi->updateSuspensionStateById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the process instance to activate or suspend. |
 **body** | [**\Camunda\Client\Model\SuspensionStateDto**](../Model/SuspensionStateDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

