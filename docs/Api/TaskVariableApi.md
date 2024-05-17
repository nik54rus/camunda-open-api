# Camunda\Client\TaskVariableApi

All URIs are relative to *http://{host}:{port}/{contextPath}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteTaskVariable**](TaskVariableApi.md#deletetaskvariable) | **DELETE** /task/{id}/variables/{varName} | Delete Task Variable
[**getTaskVariable**](TaskVariableApi.md#gettaskvariable) | **GET** /task/{id}/variables/{varName} | Get Task Variable
[**getTaskVariableBinary**](TaskVariableApi.md#gettaskvariablebinary) | **GET** /task/{id}/variables/{varName}/data | Get Task Variable (Binary)
[**getTaskVariables**](TaskVariableApi.md#gettaskvariables) | **GET** /task/{id}/variables | Get Task Variables
[**modifyTaskVariables**](TaskVariableApi.md#modifytaskvariables) | **POST** /task/{id}/variables | Update/Delete Task Variables
[**putTaskVariable**](TaskVariableApi.md#puttaskvariable) | **PUT** /task/{id}/variables/{varName} | Update Task Variable
[**setBinaryTaskVariable**](TaskVariableApi.md#setbinarytaskvariable) | **POST** /task/{id}/variables/{varName}/data | Update Task Variable (Binary)

# **deleteTaskVariable**
> deleteTaskVariable($id, $var_name)

Delete Task Variable

Removes a variable that is visible to a task. A variable is visible to a task if it is a local task variable or declared in a parent scope of the task. See documentation on [visiblity of variables](https://docs.camunda.org/manual/7.21/user-guide/process-engine/variables/).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\TaskVariableApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the task to delete the variable from.
$var_name = "var_name_example"; // string | The name of the variable to be removed.

try {
    $apiInstance->deleteTaskVariable($id, $var_name);
} catch (Exception $e) {
    echo 'Exception when calling TaskVariableApi->deleteTaskVariable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task to delete the variable from. |
 **var_name** | **string**| The name of the variable to be removed. |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTaskVariable**
> \Camunda\Client\Model\VariableValueDto getTaskVariable($id, $var_name, $deserialize_value)

Get Task Variable

Retrieves a variable from the context of a given task. The variable must be visible from the task. It is visible from the task if it is a local task variable or declared in a parent scope of the task. See documentation on [visiblity of variables](https://docs.camunda.org/manual/7.21/user-guide/process-engine/variables/).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\TaskVariableApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the task to retrieve the variable from.
$var_name = "var_name_example"; // string | The name of the variable to get.
$deserialize_value = true; // bool | Determines whether serializable variable values (typically variables that store custom Java objects) should be deserialized on the server side (default `true`).  If set to `true`, a serializable variable will be deserialized on server side and transformed to JSON using [Jackson's](https://github.com/FasterXML/jackson) POJO/bean property introspection feature. Note that this requires the Java classes of the variable value to be on the REST API's classpath.  If set to `false`, a serializable variable will be returned in its serialized format. For example, a variable that is serialized as XML will be returned as a JSON string containing XML.  Note: While `true` is the default value for reasons of backward compatibility, we recommend setting this parameter to `false` when developing web applications that are independent of the Java process applications deployed to the engine.

try {
    $result = $apiInstance->getTaskVariable($id, $var_name, $deserialize_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskVariableApi->getTaskVariable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task to retrieve the variable from. |
 **var_name** | **string**| The name of the variable to get. |
 **deserialize_value** | **bool**| Determines whether serializable variable values (typically variables that store custom Java objects) should be deserialized on the server side (default &#x60;true&#x60;).  If set to &#x60;true&#x60;, a serializable variable will be deserialized on server side and transformed to JSON using [Jackson&#x27;s](https://github.com/FasterXML/jackson) POJO/bean property introspection feature. Note that this requires the Java classes of the variable value to be on the REST API&#x27;s classpath.  If set to &#x60;false&#x60;, a serializable variable will be returned in its serialized format. For example, a variable that is serialized as XML will be returned as a JSON string containing XML.  Note: While &#x60;true&#x60; is the default value for reasons of backward compatibility, we recommend setting this parameter to &#x60;false&#x60; when developing web applications that are independent of the Java process applications deployed to the engine. | [optional] [default to true]

### Return type

[**\Camunda\Client\Model\VariableValueDto**](../Model/VariableValueDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTaskVariableBinary**
> string getTaskVariableBinary($id, $var_name)

Get Task Variable (Binary)

Retrieves a binary variable from the context of a given task. Applicable for byte array and file variables. The variable must be visible from the task. It is visible from the task if it is a local task variable or declared in a parent scope of the task. See documentation on [visiblity of variables](https://docs.camunda.org/manual/7.21/user-guide/process-engine/variables/).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\TaskVariableApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the task to retrieve the variable for.
$var_name = "var_name_example"; // string | The name of the variable to retrieve.

try {
    $result = $apiInstance->getTaskVariableBinary($id, $var_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskVariableApi->getTaskVariableBinary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task to retrieve the variable for. |
 **var_name** | **string**| The name of the variable to retrieve. |

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream, text/plain, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTaskVariables**
> map[string,\Camunda\Client\Model\VariableValueDto] getTaskVariables($id, $deserialize_values)

Get Task Variables

Retrieves all variables visible from the task. A variable is visible from the task if it is a local task variable or declared in a parent scope of the task. See documentation on [visiblity of variables](https://docs.camunda.org/manual/7.21/user-guide/process-engine/variables/).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\TaskVariableApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the task to retrieve the variables from.
$deserialize_values = true; // bool | Determines whether serializable variable values (typically variables that store custom Java objects) should be deserialized on the server side (default `true`). If set to `true`, a serializable variable will be deserialized on server side and transformed to JSON using [Jackson's](https://github.com/FasterXML/jackson) POJO/bean property introspection feature. Note that this requires the Java classes of the variable value to be on the REST API's classpath.  If set to `false`, a serializable variable will be returned in its serialized format. For example, a variable that is serialized as XML will be returned as a JSON string containing XML.  Note: While `true` is the default value for reasons of backward compatibility, we recommend setting this parameter to `false` when developing web applications that are independent of the Java process applications deployed to the engine.

try {
    $result = $apiInstance->getTaskVariables($id, $deserialize_values);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskVariableApi->getTaskVariables: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task to retrieve the variables from. |
 **deserialize_values** | **bool**| Determines whether serializable variable values (typically variables that store custom Java objects) should be deserialized on the server side (default &#x60;true&#x60;). If set to &#x60;true&#x60;, a serializable variable will be deserialized on server side and transformed to JSON using [Jackson&#x27;s](https://github.com/FasterXML/jackson) POJO/bean property introspection feature. Note that this requires the Java classes of the variable value to be on the REST API&#x27;s classpath.  If set to &#x60;false&#x60;, a serializable variable will be returned in its serialized format. For example, a variable that is serialized as XML will be returned as a JSON string containing XML.  Note: While &#x60;true&#x60; is the default value for reasons of backward compatibility, we recommend setting this parameter to &#x60;false&#x60; when developing web applications that are independent of the Java process applications deployed to the engine. | [optional] [default to true]

### Return type

[**map[string,\Camunda\Client\Model\VariableValueDto]**](../Model/VariableValueDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modifyTaskVariables**
> modifyTaskVariables($id, $body)

Update/Delete Task Variables

Updates or deletes the variables visible from the task. Updates precede deletions. So, if a variable is updated AND deleted, the deletion overrides the update. A variable is visible from the task if it is a local task variable or declared in a parent scope of the task. See documentation on [visiblity of variables](https://docs.camunda.org/manual/7.21/user-guide/process-engine/variables/).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\TaskVariableApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the task to set variables for.
$body = new \Camunda\Client\Model\PatchVariablesDto(); // \Camunda\Client\Model\PatchVariablesDto | 

try {
    $apiInstance->modifyTaskVariables($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling TaskVariableApi->modifyTaskVariables: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task to set variables for. |
 **body** | [**\Camunda\Client\Model\PatchVariablesDto**](../Model/PatchVariablesDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTaskVariable**
> putTaskVariable($id, $var_name, $body)

Update Task Variable

Updates a process variable that is visible from the Task scope. A variable is visible from the task if it is a local task variable, or declared in a parent scope of the task. See the documentation on [variable scopes and visibility](https://docs.camunda.org/manual/7.21/user-guide/process-engine/variables#variable-scopes-and-variable-visibility).  **Note**: If a variable doesn't exist, the variable is created in the top-most scope visible from the task.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\TaskVariableApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the task to set the variable for.
$var_name = "var_name_example"; // string | The name of the variable to set.
$body = new \Camunda\Client\Model\VariableValueDto(); // \Camunda\Client\Model\VariableValueDto | 

try {
    $apiInstance->putTaskVariable($id, $var_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling TaskVariableApi->putTaskVariable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task to set the variable for. |
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

# **setBinaryTaskVariable**
> setBinaryTaskVariable($id, $var_name, $data, $value_type)

Update Task Variable (Binary)

Sets the serialized value for a binary variable or the binary value for a file variable visible from the task. A variable is visible from the task if it is a local task variable or declared in a parent scope of the task. See documentation on [visiblity of variables](https://docs.camunda.org/manual/7.21/user-guide/process-engine/variables/).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\TaskVariableApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the task to retrieve the variable for.
$var_name = "var_name_example"; // string | The name of the variable to retrieve.
$data = "data_example"; // string | 
$value_type = "value_type_example"; // string | 

try {
    $apiInstance->setBinaryTaskVariable($id, $var_name, $data, $value_type);
} catch (Exception $e) {
    echo 'Exception when calling TaskVariableApi->setBinaryTaskVariable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task to retrieve the variable for. |
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

