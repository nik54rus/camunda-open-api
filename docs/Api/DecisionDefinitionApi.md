# Swagger\Client\DecisionDefinitionApi

All URIs are relative to *http://{host}:{port}/{contextPath}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**evaluateDecisionById**](DecisionDefinitionApi.md#evaluatedecisionbyid) | **POST** /decision-definition/{id}/evaluate | Evaluate By Id
[**evaluateDecisionByKey**](DecisionDefinitionApi.md#evaluatedecisionbykey) | **POST** /decision-definition/key/{key}/evaluate | Evaluate By Key
[**evaluateDecisionByKeyAndTenant**](DecisionDefinitionApi.md#evaluatedecisionbykeyandtenant) | **POST** /decision-definition/key/{key}/tenant-id/{tenant-id}/evaluate | Evaluate By Key And Tenant
[**getDecisionDefinitionById**](DecisionDefinitionApi.md#getdecisiondefinitionbyid) | **GET** /decision-definition/{id} | Get Decision Definition By Id
[**getDecisionDefinitionByKey**](DecisionDefinitionApi.md#getdecisiondefinitionbykey) | **GET** /decision-definition/key/{key} | Get Decision Definition By Key
[**getDecisionDefinitionByKeyAndTenantId**](DecisionDefinitionApi.md#getdecisiondefinitionbykeyandtenantid) | **GET** /decision-definition/key/{key}/tenant-id/{tenant-id} | Get Decision Definition By Key And Tenant Id
[**getDecisionDefinitionDiagram**](DecisionDefinitionApi.md#getdecisiondefinitiondiagram) | **GET** /decision-definition/{id}/diagram | Get Diagram
[**getDecisionDefinitionDiagramByKey**](DecisionDefinitionApi.md#getdecisiondefinitiondiagrambykey) | **GET** /decision-definition/key/{key}/diagram | Get Diagram By Key
[**getDecisionDefinitionDiagramByKeyAndTenant**](DecisionDefinitionApi.md#getdecisiondefinitiondiagrambykeyandtenant) | **GET** /decision-definition/key/{key}/tenant-id/{tenant-id}/diagram | Get Diagram By Key And Tenant
[**getDecisionDefinitionDmnXmlById**](DecisionDefinitionApi.md#getdecisiondefinitiondmnxmlbyid) | **GET** /decision-definition/{id}/xml | Get XML By Id
[**getDecisionDefinitionDmnXmlByKey**](DecisionDefinitionApi.md#getdecisiondefinitiondmnxmlbykey) | **GET** /decision-definition/key/{key}/xml | Get XML By Key
[**getDecisionDefinitionDmnXmlByKeyAndTenant**](DecisionDefinitionApi.md#getdecisiondefinitiondmnxmlbykeyandtenant) | **GET** /decision-definition/key/{key}/tenant-id/{tenant-id}/xml | Get XML By Key and Tenant
[**getDecisionDefinitions**](DecisionDefinitionApi.md#getdecisiondefinitions) | **GET** /decision-definition | Get List
[**getDecisionDefinitionsCount**](DecisionDefinitionApi.md#getdecisiondefinitionscount) | **GET** /decision-definition/count | Get List Count
[**updateHistoryTimeToLiveByDecisionDefinitionId**](DecisionDefinitionApi.md#updatehistorytimetolivebydecisiondefinitionid) | **PUT** /decision-definition/{id}/history-time-to-live | Update History Time to Live
[**updateHistoryTimeToLiveByDecisionDefinitionKey**](DecisionDefinitionApi.md#updatehistorytimetolivebydecisiondefinitionkey) | **PUT** /decision-definition/key/{key}/history-time-to-live | Update History Time to Live By Key
[**updateHistoryTimeToLiveByDecisionDefinitionKeyAndTenant**](DecisionDefinitionApi.md#updatehistorytimetolivebydecisiondefinitionkeyandtenant) | **PUT** /decision-definition/key/{key}/tenant-id/{tenant-id}/history-time-to-live | Update History Time to Live By Key And Tenant

# **evaluateDecisionById**
> map[string,\Swagger\Client\Model\VariableValueDto][] evaluateDecisionById($id, $body)

Evaluate By Id

Evaluates a given decision and returns the result. The input values of the decision have to be supplied in the request body.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DecisionDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the decision definition to be evaluated.
$body = new \Swagger\Client\Model\EvaluateDecisionDto(); // \Swagger\Client\Model\EvaluateDecisionDto | 

try {
    $result = $apiInstance->evaluateDecisionById($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DecisionDefinitionApi->evaluateDecisionById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the decision definition to be evaluated. |
 **body** | [**\Swagger\Client\Model\EvaluateDecisionDto**](../Model/EvaluateDecisionDto.md)|  | [optional]

### Return type

[**map[string,\Swagger\Client\Model\VariableValueDto][]**](../Model/map.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **evaluateDecisionByKey**
> map[string,\Swagger\Client\Model\VariableValueDto][] evaluateDecisionByKey($key, $body)

Evaluate By Key

Evaluates the latest version of the decision definition which belongs to no tenant. The input values of the decision have to be supplied in the request body.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DecisionDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The key of the decision definition (the latest version thereof) to be evaluated.
$body = new \Swagger\Client\Model\EvaluateDecisionDto(); // \Swagger\Client\Model\EvaluateDecisionDto | 

try {
    $result = $apiInstance->evaluateDecisionByKey($key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DecisionDefinitionApi->evaluateDecisionByKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The key of the decision definition (the latest version thereof) to be evaluated. |
 **body** | [**\Swagger\Client\Model\EvaluateDecisionDto**](../Model/EvaluateDecisionDto.md)|  | [optional]

### Return type

[**map[string,\Swagger\Client\Model\VariableValueDto][]**](../Model/map.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **evaluateDecisionByKeyAndTenant**
> map[string,\Swagger\Client\Model\VariableValueDto][] evaluateDecisionByKeyAndTenant($key, $tenant_id, $body)

Evaluate By Key And Tenant

Evaluates the latest version of the decision definition for tenant. The input values of the decision have to be supplied in the request body.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DecisionDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The key of the decision definition (the latest version thereof) to be evaluated.
$tenant_id = "tenant_id_example"; // string | The id of the tenant the decision definition belongs to.
$body = new \Swagger\Client\Model\EvaluateDecisionDto(); // \Swagger\Client\Model\EvaluateDecisionDto | 

try {
    $result = $apiInstance->evaluateDecisionByKeyAndTenant($key, $tenant_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DecisionDefinitionApi->evaluateDecisionByKeyAndTenant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The key of the decision definition (the latest version thereof) to be evaluated. |
 **tenant_id** | **string**| The id of the tenant the decision definition belongs to. |
 **body** | [**\Swagger\Client\Model\EvaluateDecisionDto**](../Model/EvaluateDecisionDto.md)|  | [optional]

### Return type

[**map[string,\Swagger\Client\Model\VariableValueDto][]**](../Model/map.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDecisionDefinitionById**
> \Swagger\Client\Model\DecisionDefinitionDto getDecisionDefinitionById($id)

Get Decision Definition By Id

Retrieves a decision definition by id, according to the `DecisionDefinition` interface in the engine.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DecisionDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the decision definition to be retrieved.

try {
    $result = $apiInstance->getDecisionDefinitionById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DecisionDefinitionApi->getDecisionDefinitionById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the decision definition to be retrieved. |

### Return type

[**\Swagger\Client\Model\DecisionDefinitionDto**](../Model/DecisionDefinitionDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDecisionDefinitionByKey**
> \Swagger\Client\Model\DecisionDefinitionDto getDecisionDefinitionByKey($key)

Get Decision Definition By Key

Retrieves the latest version of the decision definition which belongs to no tenant.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DecisionDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The key of the decision definition (the latest version thereof) to be retrieved.

try {
    $result = $apiInstance->getDecisionDefinitionByKey($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DecisionDefinitionApi->getDecisionDefinitionByKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The key of the decision definition (the latest version thereof) to be retrieved. |

### Return type

[**\Swagger\Client\Model\DecisionDefinitionDto**](../Model/DecisionDefinitionDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDecisionDefinitionByKeyAndTenantId**
> \Swagger\Client\Model\DecisionDefinitionDto getDecisionDefinitionByKeyAndTenantId($key, $tenant_id)

Get Decision Definition By Key And Tenant Id

Retrieves the latest version of the decision definition for tenant

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DecisionDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The key of the decision definition (the latest version thereof) to be retrieved.
$tenant_id = "tenant_id_example"; // string | The id of the tenant the decision definition belongs to.

try {
    $result = $apiInstance->getDecisionDefinitionByKeyAndTenantId($key, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DecisionDefinitionApi->getDecisionDefinitionByKeyAndTenantId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The key of the decision definition (the latest version thereof) to be retrieved. |
 **tenant_id** | **string**| The id of the tenant the decision definition belongs to. |

### Return type

[**\Swagger\Client\Model\DecisionDefinitionDto**](../Model/DecisionDefinitionDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDecisionDefinitionDiagram**
> string getDecisionDefinitionDiagram($id)

Get Diagram

Retrieves the diagram of a decision definition.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DecisionDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the process definition.

try {
    $result = $apiInstance->getDecisionDefinitionDiagram($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DecisionDefinitionApi->getDecisionDefinitionDiagram: ', $e->getMessage(), PHP_EOL;
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

# **getDecisionDefinitionDiagramByKey**
> string getDecisionDefinitionDiagramByKey($key)

Get Diagram By Key

Returns the diagram for the latest version of the decision definition which belongs to no tenant

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DecisionDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The key of the decision definition (the latest version thereof) to be retrieved.

try {
    $result = $apiInstance->getDecisionDefinitionDiagramByKey($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DecisionDefinitionApi->getDecisionDefinitionDiagramByKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The key of the decision definition (the latest version thereof) to be retrieved. |

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream, */*, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDecisionDefinitionDiagramByKeyAndTenant**
> string getDecisionDefinitionDiagramByKeyAndTenant($key, $tenant_id)

Get Diagram By Key And Tenant

Returns the XML of the latest version of the decision definition for tenant.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DecisionDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The key of the decision definition (the latest version thereof) to be retrieved.
$tenant_id = "tenant_id_example"; // string | The id of the tenant the decision definition belongs to.

try {
    $result = $apiInstance->getDecisionDefinitionDiagramByKeyAndTenant($key, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DecisionDefinitionApi->getDecisionDefinitionDiagramByKeyAndTenant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The key of the decision definition (the latest version thereof) to be retrieved. |
 **tenant_id** | **string**| The id of the tenant the decision definition belongs to. |

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream, */*, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDecisionDefinitionDmnXmlById**
> \Swagger\Client\Model\DecisionDefinitionDiagramDto getDecisionDefinitionDmnXmlById($id)

Get XML By Id

Retrieves the DMN XML of a decision definition.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DecisionDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the decision definition.

try {
    $result = $apiInstance->getDecisionDefinitionDmnXmlById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DecisionDefinitionApi->getDecisionDefinitionDmnXmlById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the decision definition. |

### Return type

[**\Swagger\Client\Model\DecisionDefinitionDiagramDto**](../Model/DecisionDefinitionDiagramDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDecisionDefinitionDmnXmlByKey**
> \Swagger\Client\Model\DecisionDefinitionDiagramDto getDecisionDefinitionDmnXmlByKey($key)

Get XML By Key

Retrieves the XML for the latest version of the decision definition which belongs to no tenant.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DecisionDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The key of the decision definition (the latest version thereof).

try {
    $result = $apiInstance->getDecisionDefinitionDmnXmlByKey($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DecisionDefinitionApi->getDecisionDefinitionDmnXmlByKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The key of the decision definition (the latest version thereof). |

### Return type

[**\Swagger\Client\Model\DecisionDefinitionDiagramDto**](../Model/DecisionDefinitionDiagramDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDecisionDefinitionDmnXmlByKeyAndTenant**
> \Swagger\Client\Model\DecisionDefinitionDiagramDto getDecisionDefinitionDmnXmlByKeyAndTenant($key, $tenant_id)

Get XML By Key and Tenant

Retrieves the XML of the latest version of the decision definition for tenant

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DecisionDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The key of the decision definition (the latest version thereof).
$tenant_id = "tenant_id_example"; // string | The id of the tenant the decision definition belongs to.

try {
    $result = $apiInstance->getDecisionDefinitionDmnXmlByKeyAndTenant($key, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DecisionDefinitionApi->getDecisionDefinitionDmnXmlByKeyAndTenant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The key of the decision definition (the latest version thereof). |
 **tenant_id** | **string**| The id of the tenant the decision definition belongs to. |

### Return type

[**\Swagger\Client\Model\DecisionDefinitionDiagramDto**](../Model/DecisionDefinitionDiagramDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDecisionDefinitions**
> \Swagger\Client\Model\DecisionDefinitionDto[] getDecisionDefinitions($sort_by, $sort_order, $first_result, $max_results, $decision_definition_id, $decision_definition_id_in, $name, $name_like, $deployment_id, $deployed_after, $deployed_at, $key, $key_like, $category, $category_like, $version, $latest_version, $resource_name, $resource_name_like, $decision_requirements_definition_id, $decision_requirements_definition_key, $without_decision_requirements_definition, $tenant_id_in, $without_tenant_id, $include_decision_definitions_without_tenant_id, $version_tag, $version_tag_like)

Get List

Queries for decision definitions that fulfill given parameters. Parameters may be the properties of decision definitions, such as the name, key or version. The size of the result set can be retrieved by using the [Get Decision Definition Count](https://docs.camunda.org/manual/7.21/reference/rest/decision-definition/get-query-count/) method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DecisionDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sort_by = "sort_by_example"; // string | Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter.
$sort_order = "sort_order_example"; // string | Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter.
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.
$decision_definition_id = "decision_definition_id_example"; // string | Filter by decision definition id.
$decision_definition_id_in = "decision_definition_id_in_example"; // string | Filter by decision definition ids.
$name = "name_example"; // string | Filter by decision definition name.
$name_like = "name_like_example"; // string | Filter by decision definition names that the parameter is a substring of.
$deployment_id = "deployment_id_example"; // string | Filter by the deployment the id belongs to.
$deployed_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by the deploy time of the deployment the decision definition belongs to. Only selects decision definitions that have been deployed after (exclusive) a specific time.
$deployed_at = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by the deploy time of the deployment the decision definition belongs to. Only selects decision definitions that have been deployed at a specific time (exact match).
$key = "key_example"; // string | Filter by decision definition key, i.e., the id in the DMN 1.0 XML. Exact match.
$key_like = "key_like_example"; // string | Filter by decision definition keys that the parameter is a substring of.
$category = "category_example"; // string | Filter by decision definition category. Exact match.
$category_like = "category_like_example"; // string | Filter by decision definition categories that the parameter is a substring of.
$version = 56; // int | Filter by decision definition version.
$latest_version = true; // bool | Only include those decision definitions that are latest versions. Value may only be `true`, as `false` is the default behavior.
$resource_name = "resource_name_example"; // string | Filter by the name of the decision definition resource. Exact match.
$resource_name_like = "resource_name_like_example"; // string | Filter by names of those decision definition resources that the parameter is a substring of.
$decision_requirements_definition_id = "decision_requirements_definition_id_example"; // string | Filter by the id of the decision requirements definition this decision definition belongs to.
$decision_requirements_definition_key = "decision_requirements_definition_key_example"; // string | Filter by the key of the decision requirements definition this decision definition belongs to.
$without_decision_requirements_definition = true; // bool | Only include decision definitions which does not belongs to any decision requirements definition. Value may only be `true`, as `false` is the default behavior.
$tenant_id_in = "tenant_id_in_example"; // string | Filter by a comma-separated list of `Strings`. A decision definition must have one of the given tenant ids.
$without_tenant_id = true; // bool | Only include decision definitions which belong to no tenant. Value can effectively only be `true`, as `false` is the default behavior.
$include_decision_definitions_without_tenant_id = true; // bool | Include decision definitions which belong to no tenant. Can be used in combination with `tenantIdIn`. Value may only be `true`, as `false` is the default behavior.
$version_tag = "version_tag_example"; // string | Filter by the version tag.
$version_tag_like = "version_tag_like_example"; // string | Filter by the version tags of those decision definition resources that the parameter is a substring of.

try {
    $result = $apiInstance->getDecisionDefinitions($sort_by, $sort_order, $first_result, $max_results, $decision_definition_id, $decision_definition_id_in, $name, $name_like, $deployment_id, $deployed_after, $deployed_at, $key, $key_like, $category, $category_like, $version, $latest_version, $resource_name, $resource_name_like, $decision_requirements_definition_id, $decision_requirements_definition_key, $without_decision_requirements_definition, $tenant_id_in, $without_tenant_id, $include_decision_definitions_without_tenant_id, $version_tag, $version_tag_like);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DecisionDefinitionApi->getDecisionDefinitions: ', $e->getMessage(), PHP_EOL;
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
 **decision_definition_id** | **string**| Filter by decision definition id. | [optional]
 **decision_definition_id_in** | **string**| Filter by decision definition ids. | [optional]
 **name** | **string**| Filter by decision definition name. | [optional]
 **name_like** | **string**| Filter by decision definition names that the parameter is a substring of. | [optional]
 **deployment_id** | **string**| Filter by the deployment the id belongs to. | [optional]
 **deployed_after** | **\DateTime**| Filter by the deploy time of the deployment the decision definition belongs to. Only selects decision definitions that have been deployed after (exclusive) a specific time. | [optional]
 **deployed_at** | **\DateTime**| Filter by the deploy time of the deployment the decision definition belongs to. Only selects decision definitions that have been deployed at a specific time (exact match). | [optional]
 **key** | **string**| Filter by decision definition key, i.e., the id in the DMN 1.0 XML. Exact match. | [optional]
 **key_like** | **string**| Filter by decision definition keys that the parameter is a substring of. | [optional]
 **category** | **string**| Filter by decision definition category. Exact match. | [optional]
 **category_like** | **string**| Filter by decision definition categories that the parameter is a substring of. | [optional]
 **version** | **int**| Filter by decision definition version. | [optional]
 **latest_version** | **bool**| Only include those decision definitions that are latest versions. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **resource_name** | **string**| Filter by the name of the decision definition resource. Exact match. | [optional]
 **resource_name_like** | **string**| Filter by names of those decision definition resources that the parameter is a substring of. | [optional]
 **decision_requirements_definition_id** | **string**| Filter by the id of the decision requirements definition this decision definition belongs to. | [optional]
 **decision_requirements_definition_key** | **string**| Filter by the key of the decision requirements definition this decision definition belongs to. | [optional]
 **without_decision_requirements_definition** | **bool**| Only include decision definitions which does not belongs to any decision requirements definition. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **tenant_id_in** | **string**| Filter by a comma-separated list of &#x60;Strings&#x60;. A decision definition must have one of the given tenant ids. | [optional]
 **without_tenant_id** | **bool**| Only include decision definitions which belong to no tenant. Value can effectively only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **include_decision_definitions_without_tenant_id** | **bool**| Include decision definitions which belong to no tenant. Can be used in combination with &#x60;tenantIdIn&#x60;. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **version_tag** | **string**| Filter by the version tag. | [optional]
 **version_tag_like** | **string**| Filter by the version tags of those decision definition resources that the parameter is a substring of. | [optional]

### Return type

[**\Swagger\Client\Model\DecisionDefinitionDto[]**](../Model/DecisionDefinitionDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDecisionDefinitionsCount**
> \Swagger\Client\Model\CountResultDto getDecisionDefinitionsCount($decision_definition_id, $decision_definition_id_in, $name, $name_like, $deployment_id, $deployed_after, $deployed_at, $key, $key_like, $category, $category_like, $version, $latest_version, $resource_name, $resource_name_like, $decision_requirements_definition_id, $decision_requirements_definition_key, $without_decision_requirements_definition, $tenant_id_in, $without_tenant_id, $include_decision_definitions_without_tenant_id, $version_tag, $version_tag_like)

Get List Count

Requests the number of decision definitions that fulfill the query criteria. Takes the same filtering parameters as the [Get Decision Definition](https://docs.camunda.org/manual/7.21/reference/rest/decision-definition/get-query/) method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DecisionDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$decision_definition_id = "decision_definition_id_example"; // string | Filter by decision definition id.
$decision_definition_id_in = "decision_definition_id_in_example"; // string | Filter by decision definition ids.
$name = "name_example"; // string | Filter by decision definition name.
$name_like = "name_like_example"; // string | Filter by decision definition names that the parameter is a substring of.
$deployment_id = "deployment_id_example"; // string | Filter by the deployment the id belongs to.
$deployed_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by the deploy time of the deployment the decision definition belongs to. Only selects decision definitions that have been deployed after (exclusive) a specific time.
$deployed_at = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by the deploy time of the deployment the decision definition belongs to. Only selects decision definitions that have been deployed at a specific time (exact match).
$key = "key_example"; // string | Filter by decision definition key, i.e., the id in the DMN 1.0 XML. Exact match.
$key_like = "key_like_example"; // string | Filter by decision definition keys that the parameter is a substring of.
$category = "category_example"; // string | Filter by decision definition category. Exact match.
$category_like = "category_like_example"; // string | Filter by decision definition categories that the parameter is a substring of.
$version = 56; // int | Filter by decision definition version.
$latest_version = true; // bool | Only include those decision definitions that are latest versions. Value may only be `true`, as `false` is the default behavior.
$resource_name = "resource_name_example"; // string | Filter by the name of the decision definition resource. Exact match.
$resource_name_like = "resource_name_like_example"; // string | Filter by names of those decision definition resources that the parameter is a substring of.
$decision_requirements_definition_id = "decision_requirements_definition_id_example"; // string | Filter by the id of the decision requirements definition this decision definition belongs to.
$decision_requirements_definition_key = "decision_requirements_definition_key_example"; // string | Filter by the key of the decision requirements definition this decision definition belongs to.
$without_decision_requirements_definition = true; // bool | Only include decision definitions which does not belongs to any decision requirements definition. Value may only be `true`, as `false` is the default behavior.
$tenant_id_in = "tenant_id_in_example"; // string | Filter by a comma-separated list of `Strings`. A decision definition must have one of the given tenant ids.
$without_tenant_id = true; // bool | Only include decision definitions which belong to no tenant. Value can effectively only be `true`, as `false` is the default behavior.
$include_decision_definitions_without_tenant_id = true; // bool | Include decision definitions which belong to no tenant. Can be used in combination with `tenantIdIn`. Value may only be `true`, as `false` is the default behavior.
$version_tag = "version_tag_example"; // string | Filter by the version tag.
$version_tag_like = "version_tag_like_example"; // string | Filter by the version tags of those decision definition resources that the parameter is a substring of.

try {
    $result = $apiInstance->getDecisionDefinitionsCount($decision_definition_id, $decision_definition_id_in, $name, $name_like, $deployment_id, $deployed_after, $deployed_at, $key, $key_like, $category, $category_like, $version, $latest_version, $resource_name, $resource_name_like, $decision_requirements_definition_id, $decision_requirements_definition_key, $without_decision_requirements_definition, $tenant_id_in, $without_tenant_id, $include_decision_definitions_without_tenant_id, $version_tag, $version_tag_like);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DecisionDefinitionApi->getDecisionDefinitionsCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **decision_definition_id** | **string**| Filter by decision definition id. | [optional]
 **decision_definition_id_in** | **string**| Filter by decision definition ids. | [optional]
 **name** | **string**| Filter by decision definition name. | [optional]
 **name_like** | **string**| Filter by decision definition names that the parameter is a substring of. | [optional]
 **deployment_id** | **string**| Filter by the deployment the id belongs to. | [optional]
 **deployed_after** | **\DateTime**| Filter by the deploy time of the deployment the decision definition belongs to. Only selects decision definitions that have been deployed after (exclusive) a specific time. | [optional]
 **deployed_at** | **\DateTime**| Filter by the deploy time of the deployment the decision definition belongs to. Only selects decision definitions that have been deployed at a specific time (exact match). | [optional]
 **key** | **string**| Filter by decision definition key, i.e., the id in the DMN 1.0 XML. Exact match. | [optional]
 **key_like** | **string**| Filter by decision definition keys that the parameter is a substring of. | [optional]
 **category** | **string**| Filter by decision definition category. Exact match. | [optional]
 **category_like** | **string**| Filter by decision definition categories that the parameter is a substring of. | [optional]
 **version** | **int**| Filter by decision definition version. | [optional]
 **latest_version** | **bool**| Only include those decision definitions that are latest versions. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **resource_name** | **string**| Filter by the name of the decision definition resource. Exact match. | [optional]
 **resource_name_like** | **string**| Filter by names of those decision definition resources that the parameter is a substring of. | [optional]
 **decision_requirements_definition_id** | **string**| Filter by the id of the decision requirements definition this decision definition belongs to. | [optional]
 **decision_requirements_definition_key** | **string**| Filter by the key of the decision requirements definition this decision definition belongs to. | [optional]
 **without_decision_requirements_definition** | **bool**| Only include decision definitions which does not belongs to any decision requirements definition. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **tenant_id_in** | **string**| Filter by a comma-separated list of &#x60;Strings&#x60;. A decision definition must have one of the given tenant ids. | [optional]
 **without_tenant_id** | **bool**| Only include decision definitions which belong to no tenant. Value can effectively only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **include_decision_definitions_without_tenant_id** | **bool**| Include decision definitions which belong to no tenant. Can be used in combination with &#x60;tenantIdIn&#x60;. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **version_tag** | **string**| Filter by the version tag. | [optional]
 **version_tag_like** | **string**| Filter by the version tags of those decision definition resources that the parameter is a substring of. | [optional]

### Return type

[**\Swagger\Client\Model\CountResultDto**](../Model/CountResultDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateHistoryTimeToLiveByDecisionDefinitionId**
> updateHistoryTimeToLiveByDecisionDefinitionId($id, $body)

Update History Time to Live

Updates history time to live for decision definition. The field is used within [History cleanup](https://docs.camunda.org/manual/7.21/user-guide/process-engine/history/#history-cleanup).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DecisionDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the decision definition to change history time to live.
$body = new \Swagger\Client\Model\HistoryTimeToLiveDto(); // \Swagger\Client\Model\HistoryTimeToLiveDto | 

try {
    $apiInstance->updateHistoryTimeToLiveByDecisionDefinitionId($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling DecisionDefinitionApi->updateHistoryTimeToLiveByDecisionDefinitionId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the decision definition to change history time to live. |
 **body** | [**\Swagger\Client\Model\HistoryTimeToLiveDto**](../Model/HistoryTimeToLiveDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateHistoryTimeToLiveByDecisionDefinitionKey**
> updateHistoryTimeToLiveByDecisionDefinitionKey($key, $body)

Update History Time to Live By Key

Updates the latest version of the decision definition which belongs to no tenant. The field is used within [History cleanup](https://docs.camunda.org/manual/7.21/user-guide/process-engine/history/#history-cleanup).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DecisionDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The key of the decision definitions to change history time to live.
$body = new \Swagger\Client\Model\HistoryTimeToLiveDto(); // \Swagger\Client\Model\HistoryTimeToLiveDto | 

try {
    $apiInstance->updateHistoryTimeToLiveByDecisionDefinitionKey($key, $body);
} catch (Exception $e) {
    echo 'Exception when calling DecisionDefinitionApi->updateHistoryTimeToLiveByDecisionDefinitionKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The key of the decision definitions to change history time to live. |
 **body** | [**\Swagger\Client\Model\HistoryTimeToLiveDto**](../Model/HistoryTimeToLiveDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateHistoryTimeToLiveByDecisionDefinitionKeyAndTenant**
> updateHistoryTimeToLiveByDecisionDefinitionKeyAndTenant($key, $tenant_id, $body)

Update History Time to Live By Key And Tenant

Updates the latest version of the decision definition for tenant. The field is used within [History cleanup](https://docs.camunda.org/manual/7.21/user-guide/process-engine/history/#history-cleanup). The value of the update is mandatory by default and does not allow `null` values. To enable them, please set the feature flag `enforceHistoryTimeToLive` to `false`. Read more in [Configuration Properties] (https://docs.camunda.org/manual/7.21/reference/deployment-descriptors/tags/process-engine#configuration-properties)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DecisionDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The key of the decision definitions to change history time to live.
$tenant_id = "tenant_id_example"; // string | The id of the tenant the decision definition belongs to.
$body = new \Swagger\Client\Model\HistoryTimeToLiveDto(); // \Swagger\Client\Model\HistoryTimeToLiveDto | 

try {
    $apiInstance->updateHistoryTimeToLiveByDecisionDefinitionKeyAndTenant($key, $tenant_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling DecisionDefinitionApi->updateHistoryTimeToLiveByDecisionDefinitionKeyAndTenant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The key of the decision definitions to change history time to live. |
 **tenant_id** | **string**| The id of the tenant the decision definition belongs to. |
 **body** | [**\Swagger\Client\Model\HistoryTimeToLiveDto**](../Model/HistoryTimeToLiveDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

