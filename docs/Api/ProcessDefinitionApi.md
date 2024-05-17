# Swagger\Client\ProcessDefinitionApi

All URIs are relative to *http://{host}:{port}/{contextPath}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteProcessDefinition**](ProcessDefinitionApi.md#deleteprocessdefinition) | **DELETE** /process-definition/{id} | Delete
[**deleteProcessDefinitionsByKey**](ProcessDefinitionApi.md#deleteprocessdefinitionsbykey) | **DELETE** /process-definition/key/{key} | Delete By Key
[**deleteProcessDefinitionsByKeyAndTenantId**](ProcessDefinitionApi.md#deleteprocessdefinitionsbykeyandtenantid) | **DELETE** /process-definition/key/{key}/tenant-id/{tenant-id} | Delete By Key
[**getActivityStatistics**](ProcessDefinitionApi.md#getactivitystatistics) | **GET** /process-definition/{id}/statistics | Get Activity Instance Statistics
[**getActivityStatisticsByProcessDefinitionKey**](ProcessDefinitionApi.md#getactivitystatisticsbyprocessdefinitionkey) | **GET** /process-definition/key/{key}/statistics | Get Activity Instance Statistics
[**getActivityStatisticsByProcessDefinitionKeyAndTenantId**](ProcessDefinitionApi.md#getactivitystatisticsbyprocessdefinitionkeyandtenantid) | **GET** /process-definition/key/{key}/tenant-id/{tenant-id}/statistics | Get Activity Instance Statistics
[**getDeployedStartForm**](ProcessDefinitionApi.md#getdeployedstartform) | **GET** /process-definition/{id}/deployed-start-form | Get Deployed Start Form
[**getDeployedStartFormByKey**](ProcessDefinitionApi.md#getdeployedstartformbykey) | **GET** /process-definition/key/{key}/deployed-start-form | Get Deployed Start Form
[**getDeployedStartFormByKeyAndTenantId**](ProcessDefinitionApi.md#getdeployedstartformbykeyandtenantid) | **GET** /process-definition/key/{key}/tenant-id/{tenant-id}/deployed-start-form | Get Deployed Start Form
[**getLatestProcessDefinitionByTenantId**](ProcessDefinitionApi.md#getlatestprocessdefinitionbytenantid) | **GET** /process-definition/key/{key}/tenant-id/{tenant-id} | Get
[**getProcessDefinition**](ProcessDefinitionApi.md#getprocessdefinition) | **GET** /process-definition/{id} | Get
[**getProcessDefinitionBpmn20Xml**](ProcessDefinitionApi.md#getprocessdefinitionbpmn20xml) | **GET** /process-definition/{id}/xml | Get XML
[**getProcessDefinitionBpmn20XmlByKey**](ProcessDefinitionApi.md#getprocessdefinitionbpmn20xmlbykey) | **GET** /process-definition/key/{key}/xml | Get XML
[**getProcessDefinitionBpmn20XmlByKeyAndTenantId**](ProcessDefinitionApi.md#getprocessdefinitionbpmn20xmlbykeyandtenantid) | **GET** /process-definition/key/{key}/tenant-id/{tenant-id}/xml | Get XML
[**getProcessDefinitionByKey**](ProcessDefinitionApi.md#getprocessdefinitionbykey) | **GET** /process-definition/key/{key} | Get
[**getProcessDefinitionDiagram**](ProcessDefinitionApi.md#getprocessdefinitiondiagram) | **GET** /process-definition/{id}/diagram | Get Diagram
[**getProcessDefinitionDiagramByKey**](ProcessDefinitionApi.md#getprocessdefinitiondiagrambykey) | **GET** /process-definition/key/{key}/diagram | Get Diagram
[**getProcessDefinitionDiagramByKeyAndTenantId**](ProcessDefinitionApi.md#getprocessdefinitiondiagrambykeyandtenantid) | **GET** /process-definition/key/{key}/tenant-id/{tenant-id}/diagram | Get Diagram
[**getProcessDefinitionStatistics**](ProcessDefinitionApi.md#getprocessdefinitionstatistics) | **GET** /process-definition/statistics | Get Process Instance Statistics
[**getProcessDefinitions**](ProcessDefinitionApi.md#getprocessdefinitions) | **GET** /process-definition | Get List
[**getProcessDefinitionsCount**](ProcessDefinitionApi.md#getprocessdefinitionscount) | **GET** /process-definition/count | Get List Count
[**getRenderedStartForm**](ProcessDefinitionApi.md#getrenderedstartform) | **GET** /process-definition/{id}/rendered-form | Get Rendered Start Form
[**getRenderedStartFormByKey**](ProcessDefinitionApi.md#getrenderedstartformbykey) | **GET** /process-definition/key/{key}/rendered-form | Get Rendered Start Form
[**getRenderedStartFormByKeyAndTenantId**](ProcessDefinitionApi.md#getrenderedstartformbykeyandtenantid) | **GET** /process-definition/key/{key}/tenant-id/{tenant-id}/rendered-form | Get Rendered Start Form
[**getStartForm**](ProcessDefinitionApi.md#getstartform) | **GET** /process-definition/{id}/startForm | Get Start Form Key
[**getStartFormByKey**](ProcessDefinitionApi.md#getstartformbykey) | **GET** /process-definition/key/{key}/startForm | Get Start Form Key
[**getStartFormByKeyAndTenantId**](ProcessDefinitionApi.md#getstartformbykeyandtenantid) | **GET** /process-definition/key/{key}/tenant-id/{tenant-id}/startForm | Get Start Form Key
[**getStartFormVariables**](ProcessDefinitionApi.md#getstartformvariables) | **GET** /process-definition/{id}/form-variables | Get Start Form Variables
[**getStartFormVariablesByKey**](ProcessDefinitionApi.md#getstartformvariablesbykey) | **GET** /process-definition/key/{key}/form-variables | Get Start Form Variables
[**getStartFormVariablesByKeyAndTenantId**](ProcessDefinitionApi.md#getstartformvariablesbykeyandtenantid) | **GET** /process-definition/key/{key}/tenant-id/{tenant-id}/form-variables | Get Start Form Variables
[**getStaticCalledProcessDefinitions**](ProcessDefinitionApi.md#getstaticcalledprocessdefinitions) | **GET** /process-definition/{id}/static-called-process-definitions | Get Static Called Process Definitions
[**restartProcessInstance**](ProcessDefinitionApi.md#restartprocessinstance) | **POST** /process-definition/{id}/restart | Restart Process Instance
[**restartProcessInstanceAsyncOperation**](ProcessDefinitionApi.md#restartprocessinstanceasyncoperation) | **POST** /process-definition/{id}/restart-async | Restart Process Instance Async
[**startProcessInstance**](ProcessDefinitionApi.md#startprocessinstance) | **POST** /process-definition/{id}/start | Start Instance
[**startProcessInstanceByKey**](ProcessDefinitionApi.md#startprocessinstancebykey) | **POST** /process-definition/key/{key}/start | Start Instance
[**startProcessInstanceByKeyAndTenantId**](ProcessDefinitionApi.md#startprocessinstancebykeyandtenantid) | **POST** /process-definition/key/{key}/tenant-id/{tenant-id}/start | Start Instance
[**submitForm**](ProcessDefinitionApi.md#submitform) | **POST** /process-definition/{id}/submit-form | Submit Start Form
[**submitFormByKey**](ProcessDefinitionApi.md#submitformbykey) | **POST** /process-definition/key/{key}/submit-form | Submit Start Form
[**submitFormByKeyAndTenantId**](ProcessDefinitionApi.md#submitformbykeyandtenantid) | **POST** /process-definition/key/{key}/tenant-id/{tenant-id}/submit-form | Submit Start Form
[**updateHistoryTimeToLiveByProcessDefinitionId**](ProcessDefinitionApi.md#updatehistorytimetolivebyprocessdefinitionid) | **PUT** /process-definition/{id}/history-time-to-live | Update History Time to Live
[**updateHistoryTimeToLiveByProcessDefinitionKey**](ProcessDefinitionApi.md#updatehistorytimetolivebyprocessdefinitionkey) | **PUT** /process-definition/key/{key}/history-time-to-live | Update History Time to Live
[**updateHistoryTimeToLiveByProcessDefinitionKeyAndTenantId**](ProcessDefinitionApi.md#updatehistorytimetolivebyprocessdefinitionkeyandtenantid) | **PUT** /process-definition/key/{key}/tenant-id/{tenant-id}/history-time-to-live | Update History Time to Live
[**updateProcessDefinitionSuspensionState**](ProcessDefinitionApi.md#updateprocessdefinitionsuspensionstate) | **PUT** /process-definition/suspended | Activate/Suspend By Key
[**updateProcessDefinitionSuspensionStateById**](ProcessDefinitionApi.md#updateprocessdefinitionsuspensionstatebyid) | **PUT** /process-definition/{id}/suspended | Activate/Suspend By Id
[**updateProcessDefinitionSuspensionStateByKey**](ProcessDefinitionApi.md#updateprocessdefinitionsuspensionstatebykey) | **PUT** /process-definition/key/{key}/suspended | Activate/Suspend by Id
[**updateProcessDefinitionSuspensionStateByKeyAndTenantId**](ProcessDefinitionApi.md#updateprocessdefinitionsuspensionstatebykeyandtenantid) | **PUT** /process-definition/key/{key}/tenant-id/{tenant-id}/suspended | Activate/Suspend by Id

# **deleteProcessDefinition**
> deleteProcessDefinition($id, $cascade, $skip_custom_listeners, $skip_io_mappings)

Delete

Deletes a running process instance by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ProcessDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the process definition to be deleted.
$cascade = true; // bool | `true`, if all process instances, historic process instances and jobs for this process definition should be deleted.
$skip_custom_listeners = false; // bool | `true`, if only the built-in ExecutionListeners should be notified with the end event.
$skip_io_mappings = false; // bool | A boolean value to control whether input/output mappings should be executed during deletion. `true`, if input/output mappings should not be invoked.

try {
    $apiInstance->deleteProcessDefinition($id, $cascade, $skip_custom_listeners, $skip_io_mappings);
} catch (Exception $e) {
    echo 'Exception when calling ProcessDefinitionApi->deleteProcessDefinition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the process definition to be deleted. |
 **cascade** | **bool**| &#x60;true&#x60;, if all process instances, historic process instances and jobs for this process definition should be deleted. | [optional]
 **skip_custom_listeners** | **bool**| &#x60;true&#x60;, if only the built-in ExecutionListeners should be notified with the end event. | [optional] [default to false]
 **skip_io_mappings** | **bool**| A boolean value to control whether input/output mappings should be executed during deletion. &#x60;true&#x60;, if input/output mappings should not be invoked. | [optional] [default to false]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProcessDefinitionsByKey**
> deleteProcessDefinitionsByKey($key, $cascade, $skip_custom_listeners, $skip_io_mappings)

Delete By Key

Deletes process definitions by a given key which belong to no tenant id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ProcessDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The key of the process definitions to be deleted.
$cascade = true; // bool | `true`, if all process instances, historic process instances and jobs for this process definition should be deleted.
$skip_custom_listeners = false; // bool | `true`, if only the built-in ExecutionListeners should be notified with the end event.
$skip_io_mappings = false; // bool | A boolean value to control whether input/output mappings should be executed during deletion. `true`, if input/output mappings should not be invoked.

try {
    $apiInstance->deleteProcessDefinitionsByKey($key, $cascade, $skip_custom_listeners, $skip_io_mappings);
} catch (Exception $e) {
    echo 'Exception when calling ProcessDefinitionApi->deleteProcessDefinitionsByKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The key of the process definitions to be deleted. |
 **cascade** | **bool**| &#x60;true&#x60;, if all process instances, historic process instances and jobs for this process definition should be deleted. | [optional]
 **skip_custom_listeners** | **bool**| &#x60;true&#x60;, if only the built-in ExecutionListeners should be notified with the end event. | [optional] [default to false]
 **skip_io_mappings** | **bool**| A boolean value to control whether input/output mappings should be executed during deletion. &#x60;true&#x60;, if input/output mappings should not be invoked. | [optional] [default to false]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProcessDefinitionsByKeyAndTenantId**
> deleteProcessDefinitionsByKeyAndTenantId($key, $tenant_id, $cascade, $skip_custom_listeners, $skip_io_mappings)

Delete By Key

Deletes process definitions by a given key and which belong to a tenant id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ProcessDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The key of the process definitions to be deleted.
$tenant_id = "tenant_id_example"; // string | The id of the tenant the process definitions belong to.
$cascade = true; // bool | `true`, if all process instances, historic process instances and jobs for this process definition should be deleted.
$skip_custom_listeners = false; // bool | `true`, if only the built-in ExecutionListeners should be notified with the end event.
$skip_io_mappings = false; // bool | A boolean value to control whether input/output mappings should be executed during deletion. `true`, if input/output mappings should not be invoked.

try {
    $apiInstance->deleteProcessDefinitionsByKeyAndTenantId($key, $tenant_id, $cascade, $skip_custom_listeners, $skip_io_mappings);
} catch (Exception $e) {
    echo 'Exception when calling ProcessDefinitionApi->deleteProcessDefinitionsByKeyAndTenantId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The key of the process definitions to be deleted. |
 **tenant_id** | **string**| The id of the tenant the process definitions belong to. |
 **cascade** | **bool**| &#x60;true&#x60;, if all process instances, historic process instances and jobs for this process definition should be deleted. | [optional]
 **skip_custom_listeners** | **bool**| &#x60;true&#x60;, if only the built-in ExecutionListeners should be notified with the end event. | [optional] [default to false]
 **skip_io_mappings** | **bool**| A boolean value to control whether input/output mappings should be executed during deletion. &#x60;true&#x60;, if input/output mappings should not be invoked. | [optional] [default to false]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getActivityStatistics**
> \Swagger\Client\Model\ActivityStatisticsResultDto[] getActivityStatistics($id, $failed_jobs, $incidents, $incidents_for_type)

Get Activity Instance Statistics

Retrieves runtime statistics of a given process definition, grouped by activities. These statistics include the number of running activity instances, optionally the number of failed jobs and also optionally the number of incidents either grouped by incident types or for a specific incident type. **Note**: This does not include historic data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ProcessDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the process definition.
$failed_jobs = true; // bool | Whether to include the number of failed jobs in the result or not. Valid values are `true` or `false`.
$incidents = true; // bool | Valid values for this property are `true` or `false`. If this property has been set to `true` the result will include the corresponding number of incidents for each occurred incident type. If it is set to `false`, the incidents will not be included in the result. Cannot be used in combination with `incidentsForType`.
$incidents_for_type = "incidents_for_type_example"; // string | If this property has been set with any incident type (i.e., a string value) the result will only include the number of incidents for the assigned incident type. Cannot be used in combination with `incidents`. See the [User Guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/incidents/#incident-types) for a list of incident types.

try {
    $result = $apiInstance->getActivityStatistics($id, $failed_jobs, $incidents, $incidents_for_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessDefinitionApi->getActivityStatistics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the process definition. |
 **failed_jobs** | **bool**| Whether to include the number of failed jobs in the result or not. Valid values are &#x60;true&#x60; or &#x60;false&#x60;. | [optional]
 **incidents** | **bool**| Valid values for this property are &#x60;true&#x60; or &#x60;false&#x60;. If this property has been set to &#x60;true&#x60; the result will include the corresponding number of incidents for each occurred incident type. If it is set to &#x60;false&#x60;, the incidents will not be included in the result. Cannot be used in combination with &#x60;incidentsForType&#x60;. | [optional]
 **incidents_for_type** | **string**| If this property has been set with any incident type (i.e., a string value) the result will only include the number of incidents for the assigned incident type. Cannot be used in combination with &#x60;incidents&#x60;. See the [User Guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/incidents/#incident-types) for a list of incident types. | [optional]

### Return type

[**\Swagger\Client\Model\ActivityStatisticsResultDto[]**](../Model/ActivityStatisticsResultDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getActivityStatisticsByProcessDefinitionKey**
> \Swagger\Client\Model\ActivityStatisticsResultDto[] getActivityStatisticsByProcessDefinitionKey($key, $failed_jobs, $incidents, $incidents_for_type)

Get Activity Instance Statistics

Retrieves runtime statistics of the latest version of the given process definition which belongs to no tenant, grouped by activities. These statistics include the number of running activity instances, optionally the number of failed jobs and also optionally the number of incidents either grouped by incident types or for a specific incident type. **Note**: This does not include historic data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ProcessDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The key of the process definition (the latest version thereof) to be retrieved.
$failed_jobs = true; // bool | Whether to include the number of failed jobs in the result or not. Valid values are `true` or `false`.
$incidents = true; // bool | Valid values for this property are `true` or `false`. If this property has been set to `true` the result will include the corresponding number of incidents for each occurred incident type. If it is set to `false`, the incidents will not be included in the result. Cannot be used in combination with `incidentsForType`.
$incidents_for_type = "incidents_for_type_example"; // string | If this property has been set with any incident type (i.e., a string value) the result will only include the number of incidents for the assigned incident type. Cannot be used in combination with `incidents`. See the [User Guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/incidents/#incident-types) for a list of incident types.

try {
    $result = $apiInstance->getActivityStatisticsByProcessDefinitionKey($key, $failed_jobs, $incidents, $incidents_for_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessDefinitionApi->getActivityStatisticsByProcessDefinitionKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The key of the process definition (the latest version thereof) to be retrieved. |
 **failed_jobs** | **bool**| Whether to include the number of failed jobs in the result or not. Valid values are &#x60;true&#x60; or &#x60;false&#x60;. | [optional]
 **incidents** | **bool**| Valid values for this property are &#x60;true&#x60; or &#x60;false&#x60;. If this property has been set to &#x60;true&#x60; the result will include the corresponding number of incidents for each occurred incident type. If it is set to &#x60;false&#x60;, the incidents will not be included in the result. Cannot be used in combination with &#x60;incidentsForType&#x60;. | [optional]
 **incidents_for_type** | **string**| If this property has been set with any incident type (i.e., a string value) the result will only include the number of incidents for the assigned incident type. Cannot be used in combination with &#x60;incidents&#x60;. See the [User Guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/incidents/#incident-types) for a list of incident types. | [optional]

### Return type

[**\Swagger\Client\Model\ActivityStatisticsResultDto[]**](../Model/ActivityStatisticsResultDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getActivityStatisticsByProcessDefinitionKeyAndTenantId**
> \Swagger\Client\Model\ActivityStatisticsResultDto[] getActivityStatisticsByProcessDefinitionKeyAndTenantId($key, $tenant_id, $failed_jobs, $incidents, $incidents_for_type)

Get Activity Instance Statistics

Retrieves runtime statistics of the latest version of the given process definition for a tenant, grouped by activities. These statistics include the number of running activity instances, optionally the number of failed jobs and also optionally the number of incidents either grouped by incident types or for a specific incident type. **Note**: This does not include historic data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ProcessDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The key of the process definition (the latest version thereof) to be retrieved.
$tenant_id = "tenant_id_example"; // string | The id of the tenant the process definition belongs to.
$failed_jobs = true; // bool | Whether to include the number of failed jobs in the result or not. Valid values are `true` or `false`.
$incidents = true; // bool | Valid values for this property are `true` or `false`. If this property has been set to `true` the result will include the corresponding number of incidents for each occurred incident type. If it is set to `false`, the incidents will not be included in the result. Cannot be used in combination with `incidentsForType`.
$incidents_for_type = "incidents_for_type_example"; // string | If this property has been set with any incident type (i.e., a string value) the result will only include the number of incidents for the assigned incident type. Cannot be used in combination with `incidents`. See the [User Guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/incidents/#incident-types) for a list of incident types.

try {
    $result = $apiInstance->getActivityStatisticsByProcessDefinitionKeyAndTenantId($key, $tenant_id, $failed_jobs, $incidents, $incidents_for_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessDefinitionApi->getActivityStatisticsByProcessDefinitionKeyAndTenantId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The key of the process definition (the latest version thereof) to be retrieved. |
 **tenant_id** | **string**| The id of the tenant the process definition belongs to. |
 **failed_jobs** | **bool**| Whether to include the number of failed jobs in the result or not. Valid values are &#x60;true&#x60; or &#x60;false&#x60;. | [optional]
 **incidents** | **bool**| Valid values for this property are &#x60;true&#x60; or &#x60;false&#x60;. If this property has been set to &#x60;true&#x60; the result will include the corresponding number of incidents for each occurred incident type. If it is set to &#x60;false&#x60;, the incidents will not be included in the result. Cannot be used in combination with &#x60;incidentsForType&#x60;. | [optional]
 **incidents_for_type** | **string**| If this property has been set with any incident type (i.e., a string value) the result will only include the number of incidents for the assigned incident type. Cannot be used in combination with &#x60;incidents&#x60;. See the [User Guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/incidents/#incident-types) for a list of incident types. | [optional]

### Return type

[**\Swagger\Client\Model\ActivityStatisticsResultDto[]**](../Model/ActivityStatisticsResultDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDeployedStartForm**
> string getDeployedStartForm($id)

Get Deployed Start Form

Retrieves the deployed form that can be referenced from a start event. For further information please refer to [User Guide](https://docs.camunda.org/manual/7.21/user-guide/task-forms/#embedded-task-forms).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ProcessDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the process definition to get the deployed start form for.

try {
    $result = $apiInstance->getDeployedStartForm($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessDefinitionApi->getDeployedStartForm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the process definition to get the deployed start form for. |

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xhtml+xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDeployedStartFormByKey**
> string getDeployedStartFormByKey($key)

Get Deployed Start Form

Retrieves the deployed form that can be referenced from a start event. For further information please refer to [User Guide](https://docs.camunda.org/manual/7.21/user-guide/task-forms/#embedded-task-forms).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ProcessDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The key of the process definition (the latest version thereof) to be retrieved.

try {
    $result = $apiInstance->getDeployedStartFormByKey($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessDefinitionApi->getDeployedStartFormByKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The key of the process definition (the latest version thereof) to be retrieved. |

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xhtml+xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDeployedStartFormByKeyAndTenantId**
> string getDeployedStartFormByKeyAndTenantId($key, $tenant_id)

Get Deployed Start Form

Retrieves the deployed form that can be referenced from a start event. For further information please refer to [User Guide](https://docs.camunda.org/manual/7.21/user-guide/task-forms/#embedded-task-forms).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ProcessDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The key of the process definition (the latest version thereof) to be retrieved.
$tenant_id = "tenant_id_example"; // string | The id of the tenant the process definitions belong to.

try {
    $result = $apiInstance->getDeployedStartFormByKeyAndTenantId($key, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessDefinitionApi->getDeployedStartFormByKeyAndTenantId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The key of the process definition (the latest version thereof) to be retrieved. |
 **tenant_id** | **string**| The id of the tenant the process definitions belong to. |

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xhtml+xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLatestProcessDefinitionByTenantId**
> \Swagger\Client\Model\ProcessDefinitionDto getLatestProcessDefinitionByTenantId($key, $tenant_id)

Get

Retrieves the latest version of the process definition for tenant according to the `ProcessDefinition` interface in the engine.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ProcessDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The key of the process definition (the latest version thereof) to be retrieved.
$tenant_id = "tenant_id_example"; // string | The id of the tenant the process definition belongs to.

try {
    $result = $apiInstance->getLatestProcessDefinitionByTenantId($key, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessDefinitionApi->getLatestProcessDefinitionByTenantId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The key of the process definition (the latest version thereof) to be retrieved. |
 **tenant_id** | **string**| The id of the tenant the process definition belongs to. |

### Return type

[**\Swagger\Client\Model\ProcessDefinitionDto**](../Model/ProcessDefinitionDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProcessDefinition**
> \Swagger\Client\Model\ProcessDefinitionDto getProcessDefinition($id)

Get

Retrieves a process definition according to the `ProcessDefinition` interface in the engine.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ProcessDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the process definition to be retrieved.

try {
    $result = $apiInstance->getProcessDefinition($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessDefinitionApi->getProcessDefinition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the process definition to be retrieved. |

### Return type

[**\Swagger\Client\Model\ProcessDefinitionDto**](../Model/ProcessDefinitionDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProcessDefinitionBpmn20Xml**
> \Swagger\Client\Model\ProcessDefinitionDiagramDto getProcessDefinitionBpmn20Xml($id)

Get XML

Retrieves the BPMN 2.0 XML of a process definition.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ProcessDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the process definition.

try {
    $result = $apiInstance->getProcessDefinitionBpmn20Xml($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessDefinitionApi->getProcessDefinitionBpmn20Xml: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the process definition. |

### Return type

[**\Swagger\Client\Model\ProcessDefinitionDiagramDto**](../Model/ProcessDefinitionDiagramDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProcessDefinitionBpmn20XmlByKey**
> \Swagger\Client\Model\ProcessDefinitionDiagramDto getProcessDefinitionBpmn20XmlByKey($key)

Get XML

Retrieves latest version the BPMN 2.0 XML of a process definition.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ProcessDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The key of the process definition (the latest version thereof) whose XML should be retrieved.

try {
    $result = $apiInstance->getProcessDefinitionBpmn20XmlByKey($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessDefinitionApi->getProcessDefinitionBpmn20XmlByKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The key of the process definition (the latest version thereof) whose XML should be retrieved. |

### Return type

[**\Swagger\Client\Model\ProcessDefinitionDiagramDto**](../Model/ProcessDefinitionDiagramDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProcessDefinitionBpmn20XmlByKeyAndTenantId**
> \Swagger\Client\Model\ProcessDefinitionDiagramDto getProcessDefinitionBpmn20XmlByKeyAndTenantId($key, $tenant_id)

Get XML

Retrieves latest version the BPMN 2.0 XML of a process definition. Returns the XML for the latest version of the process definition for tenant.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ProcessDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The key of the process definition (the latest version thereof) whose XML should be retrieved.
$tenant_id = "tenant_id_example"; // string | The id of the tenant the process definition belongs to.

try {
    $result = $apiInstance->getProcessDefinitionBpmn20XmlByKeyAndTenantId($key, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessDefinitionApi->getProcessDefinitionBpmn20XmlByKeyAndTenantId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The key of the process definition (the latest version thereof) whose XML should be retrieved. |
 **tenant_id** | **string**| The id of the tenant the process definition belongs to. |

### Return type

[**\Swagger\Client\Model\ProcessDefinitionDiagramDto**](../Model/ProcessDefinitionDiagramDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProcessDefinitionByKey**
> \Swagger\Client\Model\ProcessDefinitionDto getProcessDefinitionByKey($key)

Get

Retrieves the latest version of the process definition which belongs to no tenant according to the `ProcessDefinition` interface in the engine.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ProcessDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The key of the process definition (the latest version thereof) to be retrieved.

try {
    $result = $apiInstance->getProcessDefinitionByKey($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessDefinitionApi->getProcessDefinitionByKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The key of the process definition (the latest version thereof) to be retrieved. |

### Return type

[**\Swagger\Client\Model\ProcessDefinitionDto**](../Model/ProcessDefinitionDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProcessDefinitionDiagram**
> string getProcessDefinitionDiagram($id)

Get Diagram

Retrieves the diagram of a process definition.  If the process definition's deployment contains an image resource with the same file name as the process definition, the deployed image will be returned by the Get Diagram endpoint. Example: `someProcess.bpmn` and `someProcess.png`. Supported file extentions for the image are: `svg`, `png`, `jpg`, and `gif`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ProcessDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the process definition.

try {
    $result = $apiInstance->getProcessDefinitionDiagram($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessDefinitionApi->getProcessDefinitionDiagram: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the process definition. |

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream, */*, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProcessDefinitionDiagramByKey**
> string getProcessDefinitionDiagramByKey($key)

Get Diagram

Retrieves the diagram for the latest version of the process definition which belongs to no tenant.  If the process definition's deployment contains an image resource with the same file name as the process definition, the deployed image will be returned by the Get Diagram endpoint. Example: `someProcess.bpmn` and `someProcess.png`. Supported file extentions for the image are: `svg`, `png`, `jpg`, and `gif`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ProcessDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The key of the process definition.

try {
    $result = $apiInstance->getProcessDefinitionDiagramByKey($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessDefinitionApi->getProcessDefinitionDiagramByKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The key of the process definition. |

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream, */*, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProcessDefinitionDiagramByKeyAndTenantId**
> string getProcessDefinitionDiagramByKeyAndTenantId($key, $tenant_id)

Get Diagram

Retrieves the diagram for the latest version of the process definition for tenant.  If the process definition's deployment contains an image resource with the same file name as the process definition, the deployed image will be returned by the Get Diagram endpoint. Example: `someProcess.bpmn` and `someProcess.png`. Supported file extentions for the image are: `svg`, `png`, `jpg`, and `gif`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ProcessDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The key of the process definition.
$tenant_id = "tenant_id_example"; // string | The id of the tenant the process definition belongs to.

try {
    $result = $apiInstance->getProcessDefinitionDiagramByKeyAndTenantId($key, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessDefinitionApi->getProcessDefinitionDiagramByKeyAndTenantId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The key of the process definition. |
 **tenant_id** | **string**| The id of the tenant the process definition belongs to. |

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream, */*, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProcessDefinitionStatistics**
> \Swagger\Client\Model\ProcessDefinitionStatisticsResultDto[] getProcessDefinitionStatistics($failed_jobs, $incidents, $incidents_for_type, $root_incidents)

Get Process Instance Statistics

Retrieves runtime statistics of the process engine, grouped by process definitions. These statistics include the number of running process instances, optionally the number of failed jobs and also optionally the number of incidents either grouped by incident types or for a specific incident type. **Note**: This does not include historic data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ProcessDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$failed_jobs = true; // bool | Whether to include the number of failed jobs in the result or not. Valid values are `true` or `false`.
$incidents = true; // bool | Valid values for this property are `true` or `false`. If this property has been set to `true` the result will include the corresponding number of incidents for each occurred incident type. If it is set to `false`, the incidents will not be included in the result. Cannot be used in combination with `incidentsForType`.
$incidents_for_type = "incidents_for_type_example"; // string | If this property has been set with any incident type (i.e., a string value) the result will only include the number of incidents for the assigned incident type. Cannot be used in combination with `incidents`. See the [User Guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/incidents/#incident-types) for a list of incident types.
$root_incidents = true; // bool | Valid values for this property are `true` or `false`. If this property has been set to `true` the result will include the corresponding number of root incidents for each occurred incident type. If it is set to `false`, the incidents will not be included in the result. Cannot be used in combination with `incidentsForType` or `incidents`.

try {
    $result = $apiInstance->getProcessDefinitionStatistics($failed_jobs, $incidents, $incidents_for_type, $root_incidents);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessDefinitionApi->getProcessDefinitionStatistics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **failed_jobs** | **bool**| Whether to include the number of failed jobs in the result or not. Valid values are &#x60;true&#x60; or &#x60;false&#x60;. | [optional]
 **incidents** | **bool**| Valid values for this property are &#x60;true&#x60; or &#x60;false&#x60;. If this property has been set to &#x60;true&#x60; the result will include the corresponding number of incidents for each occurred incident type. If it is set to &#x60;false&#x60;, the incidents will not be included in the result. Cannot be used in combination with &#x60;incidentsForType&#x60;. | [optional]
 **incidents_for_type** | **string**| If this property has been set with any incident type (i.e., a string value) the result will only include the number of incidents for the assigned incident type. Cannot be used in combination with &#x60;incidents&#x60;. See the [User Guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/incidents/#incident-types) for a list of incident types. | [optional]
 **root_incidents** | **bool**| Valid values for this property are &#x60;true&#x60; or &#x60;false&#x60;. If this property has been set to &#x60;true&#x60; the result will include the corresponding number of root incidents for each occurred incident type. If it is set to &#x60;false&#x60;, the incidents will not be included in the result. Cannot be used in combination with &#x60;incidentsForType&#x60; or &#x60;incidents&#x60;. | [optional]

### Return type

[**\Swagger\Client\Model\ProcessDefinitionStatisticsResultDto[]**](../Model/ProcessDefinitionStatisticsResultDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProcessDefinitions**
> \Swagger\Client\Model\ProcessDefinitionDto[] getProcessDefinitions($process_definition_id, $process_definition_id_in, $name, $name_like, $deployment_id, $deployed_after, $deployed_at, $key, $keys_in, $key_like, $category, $category_like, $version, $latest_version, $resource_name, $resource_name_like, $startable_by, $active, $suspended, $incident_id, $incident_type, $incident_message, $incident_message_like, $tenant_id_in, $without_tenant_id, $include_process_definitions_without_tenant_id, $version_tag, $version_tag_like, $without_version_tag, $startable_in_tasklist, $not_startable_in_tasklist, $startable_permission_check, $sort_by, $sort_order, $first_result, $max_results)

Get List

Queries for process definitions that fulfill given parameters. Parameters may be the properties of  process definitions, such as the name, key or version. The size of the result set can be retrieved by using the [Get Definition Count](https://docs.camunda.org/manual/7.21/reference/rest/process-definition/get-query-count/) method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ProcessDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_definition_id = "process_definition_id_example"; // string | Filter by process definition id.
$process_definition_id_in = "process_definition_id_in_example"; // string | Filter by a comma-separated list of process definition ids.
$name = "name_example"; // string | Filter by process definition name.
$name_like = "name_like_example"; // string | Filter by process definition names that the parameter is a substring of.
$deployment_id = "deployment_id_example"; // string | Filter by the deployment the id belongs to.
$deployed_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by the deploy time of the deployment the process definition belongs to. Only selects process definitions that have been deployed after (exclusive) a specific time. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.546+0200`.
$deployed_at = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by the deploy time of the deployment the process definition belongs to. Only selects process definitions that have been deployed at a specific time (exact match). By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.546+0200`.
$key = "key_example"; // string | Filter by process definition key, i.e., the id in the BPMN 2.0 XML. Exact match.
$keys_in = "keys_in_example"; // string | Filter by a comma-separated list of process definition keys.
$key_like = "key_like_example"; // string | Filter by process definition keys that the parameter is a substring of.
$category = "category_example"; // string | Filter by process definition category. Exact match.
$category_like = "category_like_example"; // string | Filter by process definition categories that the parameter is a substring of.
$version = 56; // int | Filter by process definition version.
$latest_version = true; // bool | Only include those process definitions that are latest versions. Value may only be `true`, as `false` is the default behavior.
$resource_name = "resource_name_example"; // string | Filter by the name of the process definition resource. Exact match.
$resource_name_like = "resource_name_like_example"; // string | Filter by names of those process definition resources that the parameter is a substring of.
$startable_by = "startable_by_example"; // string | Filter by a user name who is allowed to start the process.
$active = true; // bool | Only include active process definitions. Value may only be `true`, as `false` is the default behavior.
$suspended = true; // bool | Only include suspended process definitions. Value may only be `true`, as `false` is the default behavior.
$incident_id = "incident_id_example"; // string | Filter by the incident id.
$incident_type = "incident_type_example"; // string | Filter by the incident type. See the [User Guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/incidents/#incident-types) for a list of incident types.
$incident_message = "incident_message_example"; // string | Filter by the incident message. Exact match.
$incident_message_like = "incident_message_like_example"; // string | Filter by the incident message that the parameter is a substring of.
$tenant_id_in = "tenant_id_in_example"; // string | Filter by a comma-separated list of tenant ids. A process definition must have one of the given tenant ids.
$without_tenant_id = true; // bool | Only include process definitions which belong to no tenant. Value may only be true, as false is the default behavior.
$include_process_definitions_without_tenant_id = true; // bool | Include process definitions which belong to no tenant. Can be used in combination with `tenantIdIn`. Value may only be `true`, as `false` is the default behavior.
$version_tag = "version_tag_example"; // string | Filter by the version tag.
$version_tag_like = "version_tag_like_example"; // string | Filter by the version tag that the parameter is a substring of.
$without_version_tag = true; // bool | Only include process definitions without a `versionTag`.
$startable_in_tasklist = true; // bool | Filter by process definitions which are startable in Tasklist..
$not_startable_in_tasklist = true; // bool | Filter by process definitions which are not startable in Tasklist.
$startable_permission_check = true; // bool | Filter by process definitions which the user is allowed to start in Tasklist. If the user doesn't have these permissions the result will be empty list. The permissions are: * `CREATE` permission for all Process instances * `CREATE_INSTANCE` and `READ` permission on Process definition level
$sort_by = "sort_by_example"; // string | Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter.
$sort_order = "sort_order_example"; // string | Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter.
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.

try {
    $result = $apiInstance->getProcessDefinitions($process_definition_id, $process_definition_id_in, $name, $name_like, $deployment_id, $deployed_after, $deployed_at, $key, $keys_in, $key_like, $category, $category_like, $version, $latest_version, $resource_name, $resource_name_like, $startable_by, $active, $suspended, $incident_id, $incident_type, $incident_message, $incident_message_like, $tenant_id_in, $without_tenant_id, $include_process_definitions_without_tenant_id, $version_tag, $version_tag_like, $without_version_tag, $startable_in_tasklist, $not_startable_in_tasklist, $startable_permission_check, $sort_by, $sort_order, $first_result, $max_results);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessDefinitionApi->getProcessDefinitions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_definition_id** | **string**| Filter by process definition id. | [optional]
 **process_definition_id_in** | **string**| Filter by a comma-separated list of process definition ids. | [optional]
 **name** | **string**| Filter by process definition name. | [optional]
 **name_like** | **string**| Filter by process definition names that the parameter is a substring of. | [optional]
 **deployment_id** | **string**| Filter by the deployment the id belongs to. | [optional]
 **deployed_after** | **\DateTime**| Filter by the deploy time of the deployment the process definition belongs to. Only selects process definitions that have been deployed after (exclusive) a specific time. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.546+0200&#x60;. | [optional]
 **deployed_at** | **\DateTime**| Filter by the deploy time of the deployment the process definition belongs to. Only selects process definitions that have been deployed at a specific time (exact match). By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.546+0200&#x60;. | [optional]
 **key** | **string**| Filter by process definition key, i.e., the id in the BPMN 2.0 XML. Exact match. | [optional]
 **keys_in** | **string**| Filter by a comma-separated list of process definition keys. | [optional]
 **key_like** | **string**| Filter by process definition keys that the parameter is a substring of. | [optional]
 **category** | **string**| Filter by process definition category. Exact match. | [optional]
 **category_like** | **string**| Filter by process definition categories that the parameter is a substring of. | [optional]
 **version** | **int**| Filter by process definition version. | [optional]
 **latest_version** | **bool**| Only include those process definitions that are latest versions. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **resource_name** | **string**| Filter by the name of the process definition resource. Exact match. | [optional]
 **resource_name_like** | **string**| Filter by names of those process definition resources that the parameter is a substring of. | [optional]
 **startable_by** | **string**| Filter by a user name who is allowed to start the process. | [optional]
 **active** | **bool**| Only include active process definitions. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **suspended** | **bool**| Only include suspended process definitions. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **incident_id** | **string**| Filter by the incident id. | [optional]
 **incident_type** | **string**| Filter by the incident type. See the [User Guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/incidents/#incident-types) for a list of incident types. | [optional]
 **incident_message** | **string**| Filter by the incident message. Exact match. | [optional]
 **incident_message_like** | **string**| Filter by the incident message that the parameter is a substring of. | [optional]
 **tenant_id_in** | **string**| Filter by a comma-separated list of tenant ids. A process definition must have one of the given tenant ids. | [optional]
 **without_tenant_id** | **bool**| Only include process definitions which belong to no tenant. Value may only be true, as false is the default behavior. | [optional]
 **include_process_definitions_without_tenant_id** | **bool**| Include process definitions which belong to no tenant. Can be used in combination with &#x60;tenantIdIn&#x60;. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **version_tag** | **string**| Filter by the version tag. | [optional]
 **version_tag_like** | **string**| Filter by the version tag that the parameter is a substring of. | [optional]
 **without_version_tag** | **bool**| Only include process definitions without a &#x60;versionTag&#x60;. | [optional]
 **startable_in_tasklist** | **bool**| Filter by process definitions which are startable in Tasklist.. | [optional]
 **not_startable_in_tasklist** | **bool**| Filter by process definitions which are not startable in Tasklist. | [optional]
 **startable_permission_check** | **bool**| Filter by process definitions which the user is allowed to start in Tasklist. If the user doesn&#x27;t have these permissions the result will be empty list. The permissions are: * &#x60;CREATE&#x60; permission for all Process instances * &#x60;CREATE_INSTANCE&#x60; and &#x60;READ&#x60; permission on Process definition level | [optional]
 **sort_by** | **string**| Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter. | [optional]
 **sort_order** | **string**| Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter. | [optional]
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]

### Return type

[**\Swagger\Client\Model\ProcessDefinitionDto[]**](../Model/ProcessDefinitionDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProcessDefinitionsCount**
> \Swagger\Client\Model\CountResultDto getProcessDefinitionsCount($process_definition_id, $process_definition_id_in, $name, $name_like, $deployment_id, $deployed_after, $deployed_at, $key, $keys_in, $key_like, $category, $category_like, $version, $latest_version, $resource_name, $resource_name_like, $startable_by, $active, $suspended, $incident_id, $incident_type, $incident_message, $incident_message_like, $tenant_id_in, $without_tenant_id, $include_process_definitions_without_tenant_id, $version_tag, $version_tag_like, $without_version_tag, $startable_in_tasklist, $not_startable_in_tasklist, $startable_permission_check)

Get List Count

Requests the number of process definitions that fulfill the query criteria. Takes the same filtering parameters as the [Get Definitions](https://docs.camunda.org/manual/7.21/reference/rest/process-definition/get-query/) method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ProcessDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_definition_id = "process_definition_id_example"; // string | Filter by process definition id.
$process_definition_id_in = "process_definition_id_in_example"; // string | Filter by a comma-separated list of process definition ids.
$name = "name_example"; // string | Filter by process definition name.
$name_like = "name_like_example"; // string | Filter by process definition names that the parameter is a substring of.
$deployment_id = "deployment_id_example"; // string | Filter by the deployment the id belongs to.
$deployed_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by the deploy time of the deployment the process definition belongs to. Only selects process definitions that have been deployed after (exclusive) a specific time. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.546+0200`.
$deployed_at = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by the deploy time of the deployment the process definition belongs to. Only selects process definitions that have been deployed at a specific time (exact match). By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.546+0200`.
$key = "key_example"; // string | Filter by process definition key, i.e., the id in the BPMN 2.0 XML. Exact match.
$keys_in = "keys_in_example"; // string | Filter by a comma-separated list of process definition keys.
$key_like = "key_like_example"; // string | Filter by process definition keys that the parameter is a substring of.
$category = "category_example"; // string | Filter by process definition category. Exact match.
$category_like = "category_like_example"; // string | Filter by process definition categories that the parameter is a substring of.
$version = 56; // int | Filter by process definition version.
$latest_version = true; // bool | Only include those process definitions that are latest versions. Value may only be `true`, as `false` is the default behavior.
$resource_name = "resource_name_example"; // string | Filter by the name of the process definition resource. Exact match.
$resource_name_like = "resource_name_like_example"; // string | Filter by names of those process definition resources that the parameter is a substring of.
$startable_by = "startable_by_example"; // string | Filter by a user name who is allowed to start the process.
$active = true; // bool | Only include active process definitions. Value may only be `true`, as `false` is the default behavior.
$suspended = true; // bool | Only include suspended process definitions. Value may only be `true`, as `false` is the default behavior.
$incident_id = "incident_id_example"; // string | Filter by the incident id.
$incident_type = "incident_type_example"; // string | Filter by the incident type. See the [User Guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/incidents/#incident-types) for a list of incident types.
$incident_message = "incident_message_example"; // string | Filter by the incident message. Exact match.
$incident_message_like = "incident_message_like_example"; // string | Filter by the incident message that the parameter is a substring of.
$tenant_id_in = "tenant_id_in_example"; // string | Filter by a comma-separated list of tenant ids. A process definition must have one of the given tenant ids.
$without_tenant_id = true; // bool | Only include process definitions which belong to no tenant. Value may only be true, as false is the default behavior.
$include_process_definitions_without_tenant_id = true; // bool | Include process definitions which belong to no tenant. Can be used in combination with `tenantIdIn`. Value may only be `true`, as `false` is the default behavior.
$version_tag = "version_tag_example"; // string | Filter by the version tag.
$version_tag_like = "version_tag_like_example"; // string | Filter by the version tag that the parameter is a substring of.
$without_version_tag = true; // bool | Only include process definitions without a `versionTag`.
$startable_in_tasklist = true; // bool | Filter by process definitions which are startable in Tasklist..
$not_startable_in_tasklist = true; // bool | Filter by process definitions which are not startable in Tasklist.
$startable_permission_check = true; // bool | Filter by process definitions which the user is allowed to start in Tasklist. If the user doesn't have these permissions the result will be empty list. The permissions are: * `CREATE` permission for all Process instances * `CREATE_INSTANCE` and `READ` permission on Process definition level

try {
    $result = $apiInstance->getProcessDefinitionsCount($process_definition_id, $process_definition_id_in, $name, $name_like, $deployment_id, $deployed_after, $deployed_at, $key, $keys_in, $key_like, $category, $category_like, $version, $latest_version, $resource_name, $resource_name_like, $startable_by, $active, $suspended, $incident_id, $incident_type, $incident_message, $incident_message_like, $tenant_id_in, $without_tenant_id, $include_process_definitions_without_tenant_id, $version_tag, $version_tag_like, $without_version_tag, $startable_in_tasklist, $not_startable_in_tasklist, $startable_permission_check);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessDefinitionApi->getProcessDefinitionsCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_definition_id** | **string**| Filter by process definition id. | [optional]
 **process_definition_id_in** | **string**| Filter by a comma-separated list of process definition ids. | [optional]
 **name** | **string**| Filter by process definition name. | [optional]
 **name_like** | **string**| Filter by process definition names that the parameter is a substring of. | [optional]
 **deployment_id** | **string**| Filter by the deployment the id belongs to. | [optional]
 **deployed_after** | **\DateTime**| Filter by the deploy time of the deployment the process definition belongs to. Only selects process definitions that have been deployed after (exclusive) a specific time. By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.546+0200&#x60;. | [optional]
 **deployed_at** | **\DateTime**| Filter by the deploy time of the deployment the process definition belongs to. Only selects process definitions that have been deployed at a specific time (exact match). By [default](https://docs.camunda.org/manual/7.21/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.546+0200&#x60;. | [optional]
 **key** | **string**| Filter by process definition key, i.e., the id in the BPMN 2.0 XML. Exact match. | [optional]
 **keys_in** | **string**| Filter by a comma-separated list of process definition keys. | [optional]
 **key_like** | **string**| Filter by process definition keys that the parameter is a substring of. | [optional]
 **category** | **string**| Filter by process definition category. Exact match. | [optional]
 **category_like** | **string**| Filter by process definition categories that the parameter is a substring of. | [optional]
 **version** | **int**| Filter by process definition version. | [optional]
 **latest_version** | **bool**| Only include those process definitions that are latest versions. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **resource_name** | **string**| Filter by the name of the process definition resource. Exact match. | [optional]
 **resource_name_like** | **string**| Filter by names of those process definition resources that the parameter is a substring of. | [optional]
 **startable_by** | **string**| Filter by a user name who is allowed to start the process. | [optional]
 **active** | **bool**| Only include active process definitions. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **suspended** | **bool**| Only include suspended process definitions. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **incident_id** | **string**| Filter by the incident id. | [optional]
 **incident_type** | **string**| Filter by the incident type. See the [User Guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/incidents/#incident-types) for a list of incident types. | [optional]
 **incident_message** | **string**| Filter by the incident message. Exact match. | [optional]
 **incident_message_like** | **string**| Filter by the incident message that the parameter is a substring of. | [optional]
 **tenant_id_in** | **string**| Filter by a comma-separated list of tenant ids. A process definition must have one of the given tenant ids. | [optional]
 **without_tenant_id** | **bool**| Only include process definitions which belong to no tenant. Value may only be true, as false is the default behavior. | [optional]
 **include_process_definitions_without_tenant_id** | **bool**| Include process definitions which belong to no tenant. Can be used in combination with &#x60;tenantIdIn&#x60;. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **version_tag** | **string**| Filter by the version tag. | [optional]
 **version_tag_like** | **string**| Filter by the version tag that the parameter is a substring of. | [optional]
 **without_version_tag** | **bool**| Only include process definitions without a &#x60;versionTag&#x60;. | [optional]
 **startable_in_tasklist** | **bool**| Filter by process definitions which are startable in Tasklist.. | [optional]
 **not_startable_in_tasklist** | **bool**| Filter by process definitions which are not startable in Tasklist. | [optional]
 **startable_permission_check** | **bool**| Filter by process definitions which the user is allowed to start in Tasklist. If the user doesn&#x27;t have these permissions the result will be empty list. The permissions are: * &#x60;CREATE&#x60; permission for all Process instances * &#x60;CREATE_INSTANCE&#x60; and &#x60;READ&#x60; permission on Process definition level | [optional]

### Return type

[**\Swagger\Client\Model\CountResultDto**](../Model/CountResultDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRenderedStartForm**
> string getRenderedStartForm($id)

Get Rendered Start Form

Retrieves the rendered form for a process definition. This method can be used to get the HTML rendering of a [Generated Task Form](https://docs.camunda.org/manual/7.21/user-guide/task-forms/#generated-task-forms).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ProcessDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the process definition to get the rendered start form for.

try {
    $result = $apiInstance->getRenderedStartForm($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessDefinitionApi->getRenderedStartForm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the process definition to get the rendered start form for. |

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xhtml+xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRenderedStartFormByKey**
> string getRenderedStartFormByKey($key)

Get Rendered Start Form

Retrieves  the rendered form for the latest version of the process definition which belongs to no tenant. This method can be used to get the HTML rendering of a [Generated Task Form](https://docs.camunda.org/manual/7.21/user-guide/task-forms/#generated-task-forms).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ProcessDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The key of the process definition (the latest version thereof) to be retrieved.

try {
    $result = $apiInstance->getRenderedStartFormByKey($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessDefinitionApi->getRenderedStartFormByKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The key of the process definition (the latest version thereof) to be retrieved. |

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xhtml+xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRenderedStartFormByKeyAndTenantId**
> string getRenderedStartFormByKeyAndTenantId($key, $tenant_id)

Get Rendered Start Form

Retrieves  the rendered form for the latest version of the process definition for a tenant. This method can be used to get the HTML rendering of a [Generated Task Form](https://docs.camunda.org/manual/7.21/user-guide/task-forms/#generated-task-forms).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ProcessDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The key of the process definition (the latest version thereof) to be retrieved.
$tenant_id = "tenant_id_example"; // string | The id of the tenant the process definition belongs to.

try {
    $result = $apiInstance->getRenderedStartFormByKeyAndTenantId($key, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessDefinitionApi->getRenderedStartFormByKeyAndTenantId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The key of the process definition (the latest version thereof) to be retrieved. |
 **tenant_id** | **string**| The id of the tenant the process definition belongs to. |

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xhtml+xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStartForm**
> \Swagger\Client\Model\FormDto getStartForm($id)

Get Start Form Key

Retrieves the key of the start form for a process definition. The form key corresponds to the `FormData#formKey` property in the engine.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ProcessDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the process definition to get the start form key for.

try {
    $result = $apiInstance->getStartForm($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessDefinitionApi->getStartForm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the process definition to get the start form key for. |

### Return type

[**\Swagger\Client\Model\FormDto**](../Model/FormDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStartFormByKey**
> \Swagger\Client\Model\FormDto getStartFormByKey($key)

Get Start Form Key

Retrieves the key of the start form for the latest version of the process definition which belongs to no tenant. The form key corresponds to the `FormData#formKey` property in the engine.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ProcessDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The key of the process definition (the latest version thereof) for which the form key is to be retrieved.

try {
    $result = $apiInstance->getStartFormByKey($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessDefinitionApi->getStartFormByKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The key of the process definition (the latest version thereof) for which the form key is to be retrieved. |

### Return type

[**\Swagger\Client\Model\FormDto**](../Model/FormDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStartFormByKeyAndTenantId**
> \Swagger\Client\Model\FormDto getStartFormByKeyAndTenantId($key, $tenant_id)

Get Start Form Key

Retrieves the key of the start form for the latest version of the process definition for a tenant. The form key corresponds to the `FormData#formKey` property in the engine.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ProcessDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The key of the process definition (the latest version thereof) for which the form key is to be retrieved.
$tenant_id = "tenant_id_example"; // string | The id of the tenant the process definition belongs to.

try {
    $result = $apiInstance->getStartFormByKeyAndTenantId($key, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessDefinitionApi->getStartFormByKeyAndTenantId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The key of the process definition (the latest version thereof) for which the form key is to be retrieved. |
 **tenant_id** | **string**| The id of the tenant the process definition belongs to. |

### Return type

[**\Swagger\Client\Model\FormDto**](../Model/FormDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStartFormVariables**
> map[string,\Swagger\Client\Model\VariableValueDto] getStartFormVariables($id, $variable_names, $deserialize_values)

Get Start Form Variables

Retrieves the start form variables for a process definition (only if they are defined via the  [Generated Task Form](https://docs.camunda.org/manual/7.21/user-guide/task-forms/#generated-task-forms) approach). The start form variables take form data specified on the start event into account. If form fields are defined, the variable types and default values of the form fields are taken into account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ProcessDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the process definition to retrieve the variables for.
$variable_names = "variable_names_example"; // string | A comma-separated list of variable names. Allows restricting the list of requested variables to the variable names in the list. It is best practice to restrict the list of variables to the variables actually required by the form in order to minimize fetching of data. If the query parameter is ommitted all variables are fetched. If the query parameter contains non-existent variable names, the variable names are ignored.
$deserialize_values = true; // bool | Determines whether serializable variable values (typically variables that store custom Java objects) should be deserialized on server side (default true).  If set to true, a serializable variable will be deserialized on server side and transformed to JSON using [Jackson's](http://jackson.codehaus.org/) POJO/bean property introspection feature. Note that this requires the Java classes of the variable value to be on the REST API's classpath.  If set to false, a serializable variable will be returned in its serialized format. For example, a variable that is serialized as XML will be returned as a JSON string containing XML.  **Note**: While true is the default value for reasons of backward compatibility, we recommend setting this parameter to false when developing web applications that are independent of the Java process applications deployed to the engine.

try {
    $result = $apiInstance->getStartFormVariables($id, $variable_names, $deserialize_values);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessDefinitionApi->getStartFormVariables: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the process definition to retrieve the variables for. |
 **variable_names** | **string**| A comma-separated list of variable names. Allows restricting the list of requested variables to the variable names in the list. It is best practice to restrict the list of variables to the variables actually required by the form in order to minimize fetching of data. If the query parameter is ommitted all variables are fetched. If the query parameter contains non-existent variable names, the variable names are ignored. | [optional]
 **deserialize_values** | **bool**| Determines whether serializable variable values (typically variables that store custom Java objects) should be deserialized on server side (default true).  If set to true, a serializable variable will be deserialized on server side and transformed to JSON using [Jackson&#x27;s](http://jackson.codehaus.org/) POJO/bean property introspection feature. Note that this requires the Java classes of the variable value to be on the REST API&#x27;s classpath.  If set to false, a serializable variable will be returned in its serialized format. For example, a variable that is serialized as XML will be returned as a JSON string containing XML.  **Note**: While true is the default value for reasons of backward compatibility, we recommend setting this parameter to false when developing web applications that are independent of the Java process applications deployed to the engine. | [optional] [default to true]

### Return type

[**map[string,\Swagger\Client\Model\VariableValueDto]**](../Model/VariableValueDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStartFormVariablesByKey**
> map[string,\Swagger\Client\Model\VariableValueDto] getStartFormVariablesByKey($key, $variable_names, $deserialize_values)

Get Start Form Variables

Retrieves the start form variables for the latest process definition which belongs to no tenant (only if they are defined via the  [Generated Task Form](https://docs.camunda.org/manual/7.21/user-guide/task-forms/#generated-task-forms) approach). The start form variables take form data specified on the start event into account. If form fields are defined, the variable types and default values of the form fields are taken into account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ProcessDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The key of the process definition (the latest version thereof) to be retrieved.
$variable_names = "variable_names_example"; // string | A comma-separated list of variable names. Allows restricting the list of requested variables to the variable names in the list. It is best practice to restrict the list of variables to the variables actually required by the form in order to minimize fetching of data. If the query parameter is ommitted all variables are fetched. If the query parameter contains non-existent variable names, the variable names are ignored.
$deserialize_values = true; // bool | Determines whether serializable variable values (typically variables that store custom Java objects) should be deserialized on server side (default true).  If set to true, a serializable variable will be deserialized on server side and transformed to JSON using [Jackson's](http://jackson.codehaus.org/) POJO/bean property introspection feature. Note that this requires the Java classes of the variable value to be on the REST API's classpath.  If set to false, a serializable variable will be returned in its serialized format. For example, a variable that is serialized as XML will be returned as a JSON string containing XML.  **Note**: While true is the default value for reasons of backward compatibility, we recommend setting this parameter to false when developing web applications that are independent of the Java process applications deployed to the engine.

try {
    $result = $apiInstance->getStartFormVariablesByKey($key, $variable_names, $deserialize_values);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessDefinitionApi->getStartFormVariablesByKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The key of the process definition (the latest version thereof) to be retrieved. |
 **variable_names** | **string**| A comma-separated list of variable names. Allows restricting the list of requested variables to the variable names in the list. It is best practice to restrict the list of variables to the variables actually required by the form in order to minimize fetching of data. If the query parameter is ommitted all variables are fetched. If the query parameter contains non-existent variable names, the variable names are ignored. | [optional]
 **deserialize_values** | **bool**| Determines whether serializable variable values (typically variables that store custom Java objects) should be deserialized on server side (default true).  If set to true, a serializable variable will be deserialized on server side and transformed to JSON using [Jackson&#x27;s](http://jackson.codehaus.org/) POJO/bean property introspection feature. Note that this requires the Java classes of the variable value to be on the REST API&#x27;s classpath.  If set to false, a serializable variable will be returned in its serialized format. For example, a variable that is serialized as XML will be returned as a JSON string containing XML.  **Note**: While true is the default value for reasons of backward compatibility, we recommend setting this parameter to false when developing web applications that are independent of the Java process applications deployed to the engine. | [optional] [default to true]

### Return type

[**map[string,\Swagger\Client\Model\VariableValueDto]**](../Model/VariableValueDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStartFormVariablesByKeyAndTenantId**
> map[string,\Swagger\Client\Model\VariableValueDto] getStartFormVariablesByKeyAndTenantId($key, $tenant_id, $variable_names, $deserialize_values)

Get Start Form Variables

Retrieves the start form variables for the latest process definition for a tenant (only if they are defined via the  [Generated Task Form](https://docs.camunda.org/manual/7.21/user-guide/task-forms/#generated-task-forms) approach). The start form variables take form data specified on the start event into account. If form fields are defined, the variable types and default values of the form fields are taken into account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ProcessDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The key of the process definition (the latest version thereof) to be retrieved.
$tenant_id = "tenant_id_example"; // string | The id of the tenant the process definition belongs to.
$variable_names = "variable_names_example"; // string | A comma-separated list of variable names. Allows restricting the list of requested variables to the variable names in the list. It is best practice to restrict the list of variables to the variables actually required by the form in order to minimize fetching of data. If the query parameter is ommitted all variables are fetched. If the query parameter contains non-existent variable names, the variable names are ignored.
$deserialize_values = true; // bool | Determines whether serializable variable values (typically variables that store custom Java objects) should be deserialized on server side (default true).  If set to true, a serializable variable will be deserialized on server side and transformed to JSON using [Jackson's](http://jackson.codehaus.org/) POJO/bean property introspection feature. Note that this requires the Java classes of the variable value to be on the REST API's classpath.  If set to false, a serializable variable will be returned in its serialized format. For example, a variable that is serialized as XML will be returned as a JSON string containing XML.  **Note**: While true is the default value for reasons of backward compatibility, we recommend setting this parameter to false when developing web applications that are independent of the Java process applications deployed to the engine.

try {
    $result = $apiInstance->getStartFormVariablesByKeyAndTenantId($key, $tenant_id, $variable_names, $deserialize_values);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessDefinitionApi->getStartFormVariablesByKeyAndTenantId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The key of the process definition (the latest version thereof) to be retrieved. |
 **tenant_id** | **string**| The id of the tenant the process definition belongs to. |
 **variable_names** | **string**| A comma-separated list of variable names. Allows restricting the list of requested variables to the variable names in the list. It is best practice to restrict the list of variables to the variables actually required by the form in order to minimize fetching of data. If the query parameter is ommitted all variables are fetched. If the query parameter contains non-existent variable names, the variable names are ignored. | [optional]
 **deserialize_values** | **bool**| Determines whether serializable variable values (typically variables that store custom Java objects) should be deserialized on server side (default true).  If set to true, a serializable variable will be deserialized on server side and transformed to JSON using [Jackson&#x27;s](http://jackson.codehaus.org/) POJO/bean property introspection feature. Note that this requires the Java classes of the variable value to be on the REST API&#x27;s classpath.  If set to false, a serializable variable will be returned in its serialized format. For example, a variable that is serialized as XML will be returned as a JSON string containing XML.  **Note**: While true is the default value for reasons of backward compatibility, we recommend setting this parameter to false when developing web applications that are independent of the Java process applications deployed to the engine. | [optional] [default to true]

### Return type

[**map[string,\Swagger\Client\Model\VariableValueDto]**](../Model/VariableValueDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStaticCalledProcessDefinitions**
> \Swagger\Client\Model\CalledProcessDefinitionDto[] getStaticCalledProcessDefinitions($id)

Get Static Called Process Definitions

For the given process, returns a list of called process definitions corresponding to the `CalledProcessDefinition` interface in the engine. The list contains all process definitions that are referenced statically by call activities in the given process. This endpoint does not resolve process definitions that are referenced with expressions. Each called process definition contains a list of call activity ids, which specifies the call activities that are calling that process. This endpoint does not resolve references to case definitions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ProcessDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the process definition.

try {
    $result = $apiInstance->getStaticCalledProcessDefinitions($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessDefinitionApi->getStaticCalledProcessDefinitions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the process definition. |

### Return type

[**\Swagger\Client\Model\CalledProcessDefinitionDto[]**](../Model/CalledProcessDefinitionDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restartProcessInstance**
> restartProcessInstance($id, $body)

Restart Process Instance

Restarts process instances that were canceled or terminated synchronously. Can also restart completed process instances. It will create a new instance using the original instance information. To execute the restart asynchronously, use the [Restart Process Instance Async](https://docs.camunda.org/manual/7.21/reference/rest/process-definition/post-restart-process-instance-async/) method.  For more information about the difference between synchronous and asynchronous execution, please refer to the related section of the [User Guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/process-instance-restart/#execution).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ProcessDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the process definition of the process instances to restart.
$body = new \Swagger\Client\Model\RestartProcessInstanceDto(); // \Swagger\Client\Model\RestartProcessInstanceDto | 

try {
    $apiInstance->restartProcessInstance($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProcessDefinitionApi->restartProcessInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the process definition of the process instances to restart. |
 **body** | [**\Swagger\Client\Model\RestartProcessInstanceDto**](../Model/RestartProcessInstanceDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restartProcessInstanceAsyncOperation**
> \Swagger\Client\Model\BatchDto restartProcessInstanceAsyncOperation($id, $body)

Restart Process Instance Async

Restarts process instances that were canceled or terminated asynchronously. Can also restart completed process instances. It will create a new instance using the original instance information. To execute the restart asynchronously, use the [Restart Process Instance](https://docs.camunda.org/manual/7.21/reference/rest/process-definition/post-restart-process-instance-sync/) method.  For more information about the difference between synchronous and asynchronous execution, please refer to the related section of the [User Guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/process-instance-restart/#execution).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ProcessDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the process definition of the process instances to restart.
$body = new \Swagger\Client\Model\RestartProcessInstanceDto(); // \Swagger\Client\Model\RestartProcessInstanceDto | 

try {
    $result = $apiInstance->restartProcessInstanceAsyncOperation($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessDefinitionApi->restartProcessInstanceAsyncOperation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the process definition of the process instances to restart. |
 **body** | [**\Swagger\Client\Model\RestartProcessInstanceDto**](../Model/RestartProcessInstanceDto.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\BatchDto**](../Model/BatchDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startProcessInstance**
> \Swagger\Client\Model\ProcessInstanceWithVariablesDto startProcessInstance($id, $body)

Start Instance

Instantiates a given process definition. Process variables and business key may be supplied in the request body.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ProcessDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the process definition to be retrieved.
$body = new \Swagger\Client\Model\StartProcessInstanceDto(); // \Swagger\Client\Model\StartProcessInstanceDto | 

try {
    $result = $apiInstance->startProcessInstance($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessDefinitionApi->startProcessInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the process definition to be retrieved. |
 **body** | [**\Swagger\Client\Model\StartProcessInstanceDto**](../Model/StartProcessInstanceDto.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ProcessInstanceWithVariablesDto**](../Model/ProcessInstanceWithVariablesDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startProcessInstanceByKey**
> \Swagger\Client\Model\ProcessInstanceWithVariablesDto startProcessInstanceByKey($key, $body)

Start Instance

Instantiates a given process definition, starts the latest version of the process definition which belongs to no tenant. Process variables and business key may be supplied in the request body.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ProcessDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The key of the process definition (the latest version thereof) to be retrieved.
$body = new \Swagger\Client\Model\StartProcessInstanceDto(); // \Swagger\Client\Model\StartProcessInstanceDto | 

try {
    $result = $apiInstance->startProcessInstanceByKey($key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessDefinitionApi->startProcessInstanceByKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The key of the process definition (the latest version thereof) to be retrieved. |
 **body** | [**\Swagger\Client\Model\StartProcessInstanceDto**](../Model/StartProcessInstanceDto.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ProcessInstanceWithVariablesDto**](../Model/ProcessInstanceWithVariablesDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startProcessInstanceByKeyAndTenantId**
> \Swagger\Client\Model\ProcessInstanceWithVariablesDto startProcessInstanceByKeyAndTenantId($key, $tenant_id, $body)

Start Instance

Instantiates a given process definition, starts the latest version of the process definition for tenant. Process variables and business key may be supplied in the request body.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ProcessDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The key of the process definition (the latest version thereof) to be retrieved.
$tenant_id = "tenant_id_example"; // string | The id of the tenant the process definition belongs to.
$body = new \Swagger\Client\Model\StartProcessInstanceDto(); // \Swagger\Client\Model\StartProcessInstanceDto | 

try {
    $result = $apiInstance->startProcessInstanceByKeyAndTenantId($key, $tenant_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessDefinitionApi->startProcessInstanceByKeyAndTenantId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The key of the process definition (the latest version thereof) to be retrieved. |
 **tenant_id** | **string**| The id of the tenant the process definition belongs to. |
 **body** | [**\Swagger\Client\Model\StartProcessInstanceDto**](../Model/StartProcessInstanceDto.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ProcessInstanceWithVariablesDto**](../Model/ProcessInstanceWithVariablesDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **submitForm**
> \Swagger\Client\Model\ProcessInstanceDto submitForm($id, $body)

Submit Start Form

Starts a process instance using a set of process variables and the business key. If the start event has Form Field Metadata defined, the process engine will perform backend validation for any form fields which have validators defined. See [Documentation on Generated Task Forms](https://docs.camunda.org/manual/7.21/user-guide/task-forms/#generated-task-forms).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ProcessDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the process definition to submit the form for.
$body = new \Swagger\Client\Model\StartProcessInstanceFormDto(); // \Swagger\Client\Model\StartProcessInstanceFormDto | 

try {
    $result = $apiInstance->submitForm($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessDefinitionApi->submitForm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the process definition to submit the form for. |
 **body** | [**\Swagger\Client\Model\StartProcessInstanceFormDto**](../Model/StartProcessInstanceFormDto.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ProcessInstanceDto**](../Model/ProcessInstanceDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **submitFormByKey**
> \Swagger\Client\Model\ProcessInstanceDto submitFormByKey($key, $body)

Submit Start Form

Starts the latest version of the process definition which belongs to no tenant using a set of process variables and the business key. If the start event has Form Field Metadata defined, the process engine will perform backend validation for any form fields which have validators defined. See [Documentation on Generated Task Forms](https://docs.camunda.org/manual/7.21/user-guide/task-forms/#generated-task-forms).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ProcessDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The key of the process definition to submit the form for.
$body = new \Swagger\Client\Model\StartProcessInstanceFormDto(); // \Swagger\Client\Model\StartProcessInstanceFormDto | 

try {
    $result = $apiInstance->submitFormByKey($key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessDefinitionApi->submitFormByKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The key of the process definition to submit the form for. |
 **body** | [**\Swagger\Client\Model\StartProcessInstanceFormDto**](../Model/StartProcessInstanceFormDto.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ProcessInstanceDto**](../Model/ProcessInstanceDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **submitFormByKeyAndTenantId**
> \Swagger\Client\Model\ProcessInstanceDto submitFormByKeyAndTenantId($key, $tenant_id, $body)

Submit Start Form

Starts the latest version of the process definition for a tenant using a set of process variables and the business key. If the start event has Form Field Metadata defined, the process engine will perform backend validation for any form fields which have validators defined. See [Documentation on Generated Task Forms](https://docs.camunda.org/manual/7.21/user-guide/task-forms/#generated-task-forms).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ProcessDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The key of the process definition to submit the form for.
$tenant_id = "tenant_id_example"; // string | The id of the tenant the process definition belongs to.
$body = new \Swagger\Client\Model\StartProcessInstanceFormDto(); // \Swagger\Client\Model\StartProcessInstanceFormDto | 

try {
    $result = $apiInstance->submitFormByKeyAndTenantId($key, $tenant_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessDefinitionApi->submitFormByKeyAndTenantId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The key of the process definition to submit the form for. |
 **tenant_id** | **string**| The id of the tenant the process definition belongs to. |
 **body** | [**\Swagger\Client\Model\StartProcessInstanceFormDto**](../Model/StartProcessInstanceFormDto.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ProcessInstanceDto**](../Model/ProcessInstanceDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateHistoryTimeToLiveByProcessDefinitionId**
> updateHistoryTimeToLiveByProcessDefinitionId($id, $body)

Update History Time to Live

Updates history time to live for process definition. The field is used within [History cleanup](https://docs.camunda.org/manual/7.21/user-guide/process-engine/history/#history-cleanup). The value of the update is mandatory by default and does not allow `null` values. To enable them, please set the feature flag `enforceHistoryTimeToLive` to `false`. Read more in [Configuration Properties] (https://docs.camunda.org/manual/7.21/reference/deployment-descriptors/tags/process-engine#configuration-properties)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ProcessDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the process definition to change history time to live.
$body = new \Swagger\Client\Model\HistoryTimeToLiveDto(); // \Swagger\Client\Model\HistoryTimeToLiveDto | 

try {
    $apiInstance->updateHistoryTimeToLiveByProcessDefinitionId($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProcessDefinitionApi->updateHistoryTimeToLiveByProcessDefinitionId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the process definition to change history time to live. |
 **body** | [**\Swagger\Client\Model\HistoryTimeToLiveDto**](../Model/HistoryTimeToLiveDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateHistoryTimeToLiveByProcessDefinitionKey**
> updateHistoryTimeToLiveByProcessDefinitionKey($key, $body)

Update History Time to Live

Updates history time to live for the latest version of the process definition which belongs to no tenant. The field is used within [History cleanup](https://docs.camunda.org/manual/7.21/user-guide/process-engine/history/#history-cleanup). The value of the update is mandatory by default and does not allow `null` values. To enable them, please set the feature flag `enforceHistoryTimeToLive` to `false`. Read more in [Configuration Properties] (https://docs.camunda.org/manual/7.21/reference/deployment-descriptors/tags/process-engine#configuration-properties)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ProcessDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The key of the process definition to change history time to live.
$body = new \Swagger\Client\Model\HistoryTimeToLiveDto(); // \Swagger\Client\Model\HistoryTimeToLiveDto | 

try {
    $apiInstance->updateHistoryTimeToLiveByProcessDefinitionKey($key, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProcessDefinitionApi->updateHistoryTimeToLiveByProcessDefinitionKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The key of the process definition to change history time to live. |
 **body** | [**\Swagger\Client\Model\HistoryTimeToLiveDto**](../Model/HistoryTimeToLiveDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateHistoryTimeToLiveByProcessDefinitionKeyAndTenantId**
> updateHistoryTimeToLiveByProcessDefinitionKeyAndTenantId($key, $tenant_id, $body)

Update History Time to Live

Updates history time to live for the latest version of the process definition for a tenant. The field is used within [History cleanup](https://docs.camunda.org/manual/7.21/user-guide/process-engine/history/#history-cleanup).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ProcessDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The key of the process definition to change history time to live.
$tenant_id = "tenant_id_example"; // string | The id of the tenant the process definition belongs to.
$body = new \Swagger\Client\Model\HistoryTimeToLiveDto(); // \Swagger\Client\Model\HistoryTimeToLiveDto | 

try {
    $apiInstance->updateHistoryTimeToLiveByProcessDefinitionKeyAndTenantId($key, $tenant_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProcessDefinitionApi->updateHistoryTimeToLiveByProcessDefinitionKeyAndTenantId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The key of the process definition to change history time to live. |
 **tenant_id** | **string**| The id of the tenant the process definition belongs to. |
 **body** | [**\Swagger\Client\Model\HistoryTimeToLiveDto**](../Model/HistoryTimeToLiveDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProcessDefinitionSuspensionState**
> updateProcessDefinitionSuspensionState($body)

Activate/Suspend By Key

Activates or suspends process definitions with the given process definition key.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ProcessDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ProcessDefinitionSuspensionStateDto(); // \Swagger\Client\Model\ProcessDefinitionSuspensionStateDto | **Note**: Unallowed property is `processDefinitionId`.

try {
    $apiInstance->updateProcessDefinitionSuspensionState($body);
} catch (Exception $e) {
    echo 'Exception when calling ProcessDefinitionApi->updateProcessDefinitionSuspensionState: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProcessDefinitionSuspensionStateDto**](../Model/ProcessDefinitionSuspensionStateDto.md)| **Note**: Unallowed property is &#x60;processDefinitionId&#x60;. | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProcessDefinitionSuspensionStateById**
> updateProcessDefinitionSuspensionStateById($id, $body)

Activate/Suspend By Id

Activates or suspends a given process definition by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ProcessDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the process definition to activate or suspend.
$body = new \Swagger\Client\Model\ProcessDefinitionSuspensionStateDto(); // \Swagger\Client\Model\ProcessDefinitionSuspensionStateDto | **Note**: Unallowed properties are `processDefinitionId` and `processDefinitionKey`.

try {
    $apiInstance->updateProcessDefinitionSuspensionStateById($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProcessDefinitionApi->updateProcessDefinitionSuspensionStateById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the process definition to activate or suspend. |
 **body** | [**\Swagger\Client\Model\ProcessDefinitionSuspensionStateDto**](../Model/ProcessDefinitionSuspensionStateDto.md)| **Note**: Unallowed properties are &#x60;processDefinitionId&#x60; and &#x60;processDefinitionKey&#x60;. | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProcessDefinitionSuspensionStateByKey**
> updateProcessDefinitionSuspensionStateByKey($key, $body)

Activate/Suspend by Id

Activates or suspends a given process definition by latest version of process definition key which belongs to no tenant.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ProcessDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The key of the process definition (the latest version thereof) to be activated/suspended.
$body = new \Swagger\Client\Model\ProcessDefinitionSuspensionStateDto(); // \Swagger\Client\Model\ProcessDefinitionSuspensionStateDto | **Note**: Unallowed properties are `processDefinitionId` and `processDefinitionKey`.

try {
    $apiInstance->updateProcessDefinitionSuspensionStateByKey($key, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProcessDefinitionApi->updateProcessDefinitionSuspensionStateByKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The key of the process definition (the latest version thereof) to be activated/suspended. |
 **body** | [**\Swagger\Client\Model\ProcessDefinitionSuspensionStateDto**](../Model/ProcessDefinitionSuspensionStateDto.md)| **Note**: Unallowed properties are &#x60;processDefinitionId&#x60; and &#x60;processDefinitionKey&#x60;. | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProcessDefinitionSuspensionStateByKeyAndTenantId**
> updateProcessDefinitionSuspensionStateByKeyAndTenantId($key, $tenant_id, $body)

Activate/Suspend by Id

Activates or suspends a given process definition by the latest version of the process definition for tenant.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ProcessDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The key of the process definition (the latest version thereof) to be activated/suspended.
$tenant_id = "tenant_id_example"; // string | The id of the tenant the process definition belongs to.
$body = new \Swagger\Client\Model\ProcessDefinitionSuspensionStateDto(); // \Swagger\Client\Model\ProcessDefinitionSuspensionStateDto | **Note**: Unallowed properties are `processDefinitionId` and `processDefinitionKey`.

try {
    $apiInstance->updateProcessDefinitionSuspensionStateByKeyAndTenantId($key, $tenant_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProcessDefinitionApi->updateProcessDefinitionSuspensionStateByKeyAndTenantId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The key of the process definition (the latest version thereof) to be activated/suspended. |
 **tenant_id** | **string**| The id of the tenant the process definition belongs to. |
 **body** | [**\Swagger\Client\Model\ProcessDefinitionSuspensionStateDto**](../Model/ProcessDefinitionSuspensionStateDto.md)| **Note**: Unallowed properties are &#x60;processDefinitionId&#x60; and &#x60;processDefinitionKey&#x60;. | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

