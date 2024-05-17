# Camunda\Client\TaskLocalVariableApi

All URIs are relative to *http://{host}:{port}/{contextPath}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteTaskLocalVariable**](TaskLocalVariableApi.md#deletetasklocalvariable) | **DELETE** /task/{id}/localVariables/{varName} | Delete Local Task Variable
[**getTaskLocalVariable**](TaskLocalVariableApi.md#gettasklocalvariable) | **GET** /task/{id}/localVariables/{varName} | Get Local Task Variable
[**getTaskLocalVariableBinary**](TaskLocalVariableApi.md#gettasklocalvariablebinary) | **GET** /task/{id}/localVariables/{varName}/data | Get Local Task Variable (Binary)
[**getTaskLocalVariables**](TaskLocalVariableApi.md#gettasklocalvariables) | **GET** /task/{id}/localVariables | Get Local Task Variables
[**modifyTaskLocalVariables**](TaskLocalVariableApi.md#modifytasklocalvariables) | **POST** /task/{id}/localVariables | Update/Delete Local Task Variables
[**putTaskLocalVariable**](TaskLocalVariableApi.md#puttasklocalvariable) | **PUT** /task/{id}/localVariables/{varName} | Update Local Task Variable
[**setBinaryTaskLocalVariable**](TaskLocalVariableApi.md#setbinarytasklocalvariable) | **POST** /task/{id}/localVariables/{varName}/data | Update Local Task Variable (Binary)

# **deleteTaskLocalVariable**
> deleteTaskLocalVariable($id, $var_name)

Delete Local Task Variable

Removes a local variable from a task by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\TaskLocalVariableApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the task to delete the variable from.
$var_name = "var_name_example"; // string | The name of the variable to be removed.

try {
    $apiInstance->deleteTaskLocalVariable($id, $var_name);
} catch (Exception $e) {
    echo 'Exception when calling TaskLocalVariableApi->deleteTaskLocalVariable: ', $e->getMessage(), PHP_EOL;
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

# **getTaskLocalVariable**
> \Camunda\Client\Model\VariableValueDto getTaskLocalVariable($id, $var_name, $deserialize_value)

Get Local Task Variable

Retrieves a variable from the context of a given task by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\TaskLocalVariableApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the task to retrieve the variable from.
$var_name = "var_name_example"; // string | The name of the variable to get
$deserialize_value = true; // bool | Determines whether serializable variable values (typically variables that store custom Java objects) should be deserialized on the server side (default `true`).  If set to `true`, a serializable variable will be deserialized on server side and transformed to JSON using [Jackson's](https://github.com/FasterXML/jackson) POJO/bean property introspection feature. Note that this requires the Java classes of the variable value to be on the REST API's classpath.  If set to `false`, a serializable variable will be returned in its serialized format. For example, a variable that is serialized as XML will be returned as a JSON string containing XML.  Note: While `true` is the default value for reasons of backward compatibility, we recommend setting this parameter to `false` when developing web applications that are independent of the Java process applications deployed to the engine.

try {
    $result = $apiInstance->getTaskLocalVariable($id, $var_name, $deserialize_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskLocalVariableApi->getTaskLocalVariable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task to retrieve the variable from. |
 **var_name** | **string**| The name of the variable to get |
 **deserialize_value** | **bool**| Determines whether serializable variable values (typically variables that store custom Java objects) should be deserialized on the server side (default &#x60;true&#x60;).  If set to &#x60;true&#x60;, a serializable variable will be deserialized on server side and transformed to JSON using [Jackson&#x27;s](https://github.com/FasterXML/jackson) POJO/bean property introspection feature. Note that this requires the Java classes of the variable value to be on the REST API&#x27;s classpath.  If set to &#x60;false&#x60;, a serializable variable will be returned in its serialized format. For example, a variable that is serialized as XML will be returned as a JSON string containing XML.  Note: While &#x60;true&#x60; is the default value for reasons of backward compatibility, we recommend setting this parameter to &#x60;false&#x60; when developing web applications that are independent of the Java process applications deployed to the engine. | [optional] [default to true]

### Return type

[**\Camunda\Client\Model\VariableValueDto**](../Model/VariableValueDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTaskLocalVariableBinary**
> string getTaskLocalVariableBinary($id, $var_name)

Get Local Task Variable (Binary)

Retrieves a binary variable from the context of a given task by id. Applicable for byte array and file variables.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\TaskLocalVariableApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the task to retrieve the variable for.
$var_name = "var_name_example"; // string | The name of the variable to retrieve.

try {
    $result = $apiInstance->getTaskLocalVariableBinary($id, $var_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskLocalVariableApi->getTaskLocalVariableBinary: ', $e->getMessage(), PHP_EOL;
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

# **getTaskLocalVariables**
> map[string,\Camunda\Client\Model\VariableValueDto] getTaskLocalVariables($id, $deserialize_values)

Get Local Task Variables

Retrieves all variables of a given task by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\TaskLocalVariableApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the task to retrieve the variables from.
$deserialize_values = true; // bool | Determines whether serializable variable values (typically variables that store custom Java objects) should be deserialized on the server side (default `true`).  If set to `true`, a serializable variable will be deserialized on server side and transformed to JSON using [Jackson's](https://github.com/FasterXML/jackson) POJO/bean property introspection feature. Note that this requires the Java classes of the variable value to be on the REST API's classpath.  If set to `false`, a serializable variable will be returned in its serialized format. For example, a variable that is serialized as XML will be returned as a JSON string containing XML.  **Note:** While `true` is the default value for reasons of backward compatibility, we recommend setting this parameter to `false` when developing web applications that are independent of the Java process applications deployed to the engine.

try {
    $result = $apiInstance->getTaskLocalVariables($id, $deserialize_values);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskLocalVariableApi->getTaskLocalVariables: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task to retrieve the variables from. |
 **deserialize_values** | **bool**| Determines whether serializable variable values (typically variables that store custom Java objects) should be deserialized on the server side (default &#x60;true&#x60;).  If set to &#x60;true&#x60;, a serializable variable will be deserialized on server side and transformed to JSON using [Jackson&#x27;s](https://github.com/FasterXML/jackson) POJO/bean property introspection feature. Note that this requires the Java classes of the variable value to be on the REST API&#x27;s classpath.  If set to &#x60;false&#x60;, a serializable variable will be returned in its serialized format. For example, a variable that is serialized as XML will be returned as a JSON string containing XML.  **Note:** While &#x60;true&#x60; is the default value for reasons of backward compatibility, we recommend setting this parameter to &#x60;false&#x60; when developing web applications that are independent of the Java process applications deployed to the engine. | [optional] [default to true]

### Return type

[**map[string,\Camunda\Client\Model\VariableValueDto]**](../Model/VariableValueDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modifyTaskLocalVariables**
> modifyTaskLocalVariables($id, $body)

Update/Delete Local Task Variables

Updates or deletes the variables in the context of a task. Updates precede deletions. So, if a variable is updated AND deleted, the deletion overrides the update.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\TaskLocalVariableApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the task to set variables for.
$body = new \Camunda\Client\Model\PatchVariablesDto(); // \Camunda\Client\Model\PatchVariablesDto | 

try {
    $apiInstance->modifyTaskLocalVariables($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling TaskLocalVariableApi->modifyTaskLocalVariables: ', $e->getMessage(), PHP_EOL;
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

# **putTaskLocalVariable**
> putTaskLocalVariable($id, $var_name, $body)

Update Local Task Variable

Sets a variable in the context of a given task.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\TaskLocalVariableApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the task to set the variable for.
$var_name = "var_name_example"; // string | The name of the variable to set.
$body = new \Camunda\Client\Model\VariableValueDto(); // \Camunda\Client\Model\VariableValueDto | 

try {
    $apiInstance->putTaskLocalVariable($id, $var_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling TaskLocalVariableApi->putTaskLocalVariable: ', $e->getMessage(), PHP_EOL;
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

# **setBinaryTaskLocalVariable**
> setBinaryTaskLocalVariable($id, $var_name, $data, $value_type)

Update Local Task Variable (Binary)

Sets the serialized value for a binary variable or the binary value for a file variable.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\TaskLocalVariableApi(
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
    $apiInstance->setBinaryTaskLocalVariable($id, $var_name, $data, $value_type);
} catch (Exception $e) {
    echo 'Exception when calling TaskLocalVariableApi->setBinaryTaskLocalVariable: ', $e->getMessage(), PHP_EOL;
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

