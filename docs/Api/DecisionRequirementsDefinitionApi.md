# Camunda\Client\DecisionRequirementsDefinitionApi

All URIs are relative to *http://{host}:{port}/{contextPath}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDecisionRequirementsDefinitionById**](DecisionRequirementsDefinitionApi.md#getdecisionrequirementsdefinitionbyid) | **GET** /decision-requirements-definition/{id} | Get Decision Requirements Definition by ID
[**getDecisionRequirementsDefinitionByKey**](DecisionRequirementsDefinitionApi.md#getdecisionrequirementsdefinitionbykey) | **GET** /decision-requirements-definition/key/{key} | Get Decision Requirements Definition by Key
[**getDecisionRequirementsDefinitionByKeyAndTenantId**](DecisionRequirementsDefinitionApi.md#getdecisionrequirementsdefinitionbykeyandtenantid) | **GET** /decision-requirements-definition/key/{key}/tenant-id/{tenant-id} | Get Decision Requirements Definition by Key and Tenant ID
[**getDecisionRequirementsDefinitionDiagramById**](DecisionRequirementsDefinitionApi.md#getdecisionrequirementsdefinitiondiagrambyid) | **GET** /decision-requirements-definition/{id}/diagram | Get Decision Requirements Diagram by ID
[**getDecisionRequirementsDefinitionDiagramByKey**](DecisionRequirementsDefinitionApi.md#getdecisionrequirementsdefinitiondiagrambykey) | **GET** /decision-requirements-definition/key/{key}/diagram | Get Decision Requirements Diagram by Key
[**getDecisionRequirementsDefinitionDiagramByKeyAndTenantId**](DecisionRequirementsDefinitionApi.md#getdecisionrequirementsdefinitiondiagrambykeyandtenantid) | **GET** /decision-requirements-definition/key/{key}/tenant-id/{tenant-id}/diagram | Get Decision Requirements Diagram by Key and Tenant ID
[**getDecisionRequirementsDefinitionDmnXmlById**](DecisionRequirementsDefinitionApi.md#getdecisionrequirementsdefinitiondmnxmlbyid) | **GET** /decision-requirements-definition/{id}/xml | Get DMN XML by ID
[**getDecisionRequirementsDefinitionDmnXmlByKey**](DecisionRequirementsDefinitionApi.md#getdecisionrequirementsdefinitiondmnxmlbykey) | **GET** /decision-requirements-definition/key/{key}/xml | Get DMN XML by Key
[**getDecisionRequirementsDefinitionDmnXmlByKeyAndTenantId**](DecisionRequirementsDefinitionApi.md#getdecisionrequirementsdefinitiondmnxmlbykeyandtenantid) | **GET** /decision-requirements-definition/key/{key}/tenant-id/{tenant-id}/xml | Get DMN XML by Key and Tenant ID
[**getDecisionRequirementsDefinitions**](DecisionRequirementsDefinitionApi.md#getdecisionrequirementsdefinitions) | **GET** /decision-requirements-definition | Get Decision Requirements Definitions
[**getDecisionRequirementsDefinitionsCount**](DecisionRequirementsDefinitionApi.md#getdecisionrequirementsdefinitionscount) | **GET** /decision-requirements-definition/count | Get Decision Requirements Definition Count

# **getDecisionRequirementsDefinitionById**
> \Camunda\Client\Model\DecisionRequirementsDefinitionDto getDecisionRequirementsDefinitionById($id)

Get Decision Requirements Definition by ID

Retrieves a decision requirements definition according to the `DecisionRequirementsDefinition` interface in the engine.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\DecisionRequirementsDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the decision requirements definition to be retrieved.

try {
    $result = $apiInstance->getDecisionRequirementsDefinitionById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DecisionRequirementsDefinitionApi->getDecisionRequirementsDefinitionById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the decision requirements definition to be retrieved. |

### Return type

[**\Camunda\Client\Model\DecisionRequirementsDefinitionDto**](../Model/DecisionRequirementsDefinitionDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDecisionRequirementsDefinitionByKey**
> \Camunda\Client\Model\DecisionRequirementsDefinitionDto getDecisionRequirementsDefinitionByKey($key)

Get Decision Requirements Definition by Key

Retrieves a decision requirements definition according to the `DecisionRequirementsDefinition` interface in the engine.  Returns the latest version of the decision requirements definition  which belongs to no tenant.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\DecisionRequirementsDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The key of the decision requirements definition (the latest version thereof) to be retrieved.

try {
    $result = $apiInstance->getDecisionRequirementsDefinitionByKey($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DecisionRequirementsDefinitionApi->getDecisionRequirementsDefinitionByKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The key of the decision requirements definition (the latest version thereof) to be retrieved. |

### Return type

[**\Camunda\Client\Model\DecisionRequirementsDefinitionDto**](../Model/DecisionRequirementsDefinitionDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDecisionRequirementsDefinitionByKeyAndTenantId**
> \Camunda\Client\Model\DecisionRequirementsDefinitionDto getDecisionRequirementsDefinitionByKeyAndTenantId($key, $tenant_id)

Get Decision Requirements Definition by Key and Tenant ID

Retrieves a decision requirements definition according to the `DecisionRequirementsDefinition` interface in the engine. Returns the latest version of the decision requirements definition  for a tenant.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\DecisionRequirementsDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The key of the decision requirements definition (the latest version thereof) to be retrieved.
$tenant_id = "tenant_id_example"; // string | The id of the tenant to which the decision requirements definition belongs to.

try {
    $result = $apiInstance->getDecisionRequirementsDefinitionByKeyAndTenantId($key, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DecisionRequirementsDefinitionApi->getDecisionRequirementsDefinitionByKeyAndTenantId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The key of the decision requirements definition (the latest version thereof) to be retrieved. |
 **tenant_id** | **string**| The id of the tenant to which the decision requirements definition belongs to. |

### Return type

[**\Camunda\Client\Model\DecisionRequirementsDefinitionDto**](../Model/DecisionRequirementsDefinitionDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDecisionRequirementsDefinitionDiagramById**
> string getDecisionRequirementsDefinitionDiagramById($id)

Get Decision Requirements Diagram by ID

Retrieves the diagram of a decision requirements definition.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\DecisionRequirementsDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the decision requirements definition.

try {
    $result = $apiInstance->getDecisionRequirementsDefinitionDiagramById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DecisionRequirementsDefinitionApi->getDecisionRequirementsDefinitionDiagramById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the decision requirements definition. |

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: image/_*, application/octet-stream, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDecisionRequirementsDefinitionDiagramByKey**
> string getDecisionRequirementsDefinitionDiagramByKey($key)

Get Decision Requirements Diagram by Key

Retrieves the diagram of a decision requirements definition. Returns the diagram for the latest version of the decision requirements  definition which belongs to no tenant.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\DecisionRequirementsDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The key of the decision requirements definition (the latest version thereof) to be retrieved.

try {
    $result = $apiInstance->getDecisionRequirementsDefinitionDiagramByKey($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DecisionRequirementsDefinitionApi->getDecisionRequirementsDefinitionDiagramByKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The key of the decision requirements definition (the latest version thereof) to be retrieved. |

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: image/_*, application/octet-stream, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDecisionRequirementsDefinitionDiagramByKeyAndTenantId**
> string getDecisionRequirementsDefinitionDiagramByKeyAndTenantId($key, $tenant_id)

Get Decision Requirements Diagram by Key and Tenant ID

Retrieves the diagram of a decision requirements definition. Returns the diagram of the latest version of the decision requirements  definition for a tenant.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\DecisionRequirementsDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The key of the decision requirements definition (the latest version thereof) to be retrieved.
$tenant_id = "tenant_id_example"; // string | The id of the tenant to which the decision requirements definition belongs to.

try {
    $result = $apiInstance->getDecisionRequirementsDefinitionDiagramByKeyAndTenantId($key, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DecisionRequirementsDefinitionApi->getDecisionRequirementsDefinitionDiagramByKeyAndTenantId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The key of the decision requirements definition (the latest version thereof) to be retrieved. |
 **tenant_id** | **string**| The id of the tenant to which the decision requirements definition belongs to. |

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: image/_*, application/octet-stream, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDecisionRequirementsDefinitionDmnXmlById**
> \Camunda\Client\Model\DecisionRequirementsDefinitionXmlDto getDecisionRequirementsDefinitionDmnXmlById($id)

Get DMN XML by ID

Retrieves the DMN XML of a decision requirements definition.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\DecisionRequirementsDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the decision requirements definition.

try {
    $result = $apiInstance->getDecisionRequirementsDefinitionDmnXmlById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DecisionRequirementsDefinitionApi->getDecisionRequirementsDefinitionDmnXmlById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the decision requirements definition. |

### Return type

[**\Camunda\Client\Model\DecisionRequirementsDefinitionXmlDto**](../Model/DecisionRequirementsDefinitionXmlDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDecisionRequirementsDefinitionDmnXmlByKey**
> \Camunda\Client\Model\DecisionRequirementsDefinitionXmlDto getDecisionRequirementsDefinitionDmnXmlByKey($key)

Get DMN XML by Key

Retrieves the DMN XML of a decision requirements definition. Returns the XML for the latest version of the decision requirements  definition which belongs to no tenant.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\DecisionRequirementsDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The key of the decision requirements definition (the latest version thereof) to be retrieved.

try {
    $result = $apiInstance->getDecisionRequirementsDefinitionDmnXmlByKey($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DecisionRequirementsDefinitionApi->getDecisionRequirementsDefinitionDmnXmlByKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The key of the decision requirements definition (the latest version thereof) to be retrieved. |

### Return type

[**\Camunda\Client\Model\DecisionRequirementsDefinitionXmlDto**](../Model/DecisionRequirementsDefinitionXmlDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDecisionRequirementsDefinitionDmnXmlByKeyAndTenantId**
> \Camunda\Client\Model\DecisionRequirementsDefinitionXmlDto getDecisionRequirementsDefinitionDmnXmlByKeyAndTenantId($key, $tenant_id)

Get DMN XML by Key and Tenant ID

Retrieves the DMN XML of a decision requirements definition. Returns the XML of the latest version of the decision requirements  definition for a tenant.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\DecisionRequirementsDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The key of the decision requirements definition (the latest version thereof) to be retrieved.
$tenant_id = "tenant_id_example"; // string | The id of the tenant to which the decision requirements definition belongs to.

try {
    $result = $apiInstance->getDecisionRequirementsDefinitionDmnXmlByKeyAndTenantId($key, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DecisionRequirementsDefinitionApi->getDecisionRequirementsDefinitionDmnXmlByKeyAndTenantId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The key of the decision requirements definition (the latest version thereof) to be retrieved. |
 **tenant_id** | **string**| The id of the tenant to which the decision requirements definition belongs to. |

### Return type

[**\Camunda\Client\Model\DecisionRequirementsDefinitionXmlDto**](../Model/DecisionRequirementsDefinitionXmlDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDecisionRequirementsDefinitions**
> \Camunda\Client\Model\DecisionRequirementsDefinitionDto[] getDecisionRequirementsDefinitions($decision_requirements_definition_id, $decision_requirements_definition_id_in, $name, $name_like, $deployment_id, $key, $key_like, $category, $category_like, $version, $latest_version, $resource_name, $resource_name_like, $tenant_id_in, $without_tenant_id, $include_decision_requirements_definitions_without_tenant_id, $sort_by, $sort_order, $first_result, $max_results)

Get Decision Requirements Definitions

Queries for decision requirements definitions that fulfill given parameters. Parameters may be the properties of decision requirements definitions, such as the name, key or version.  The size of the result set can be retrieved by using the [Get Decision Requirements Definition Count](https://docs.camunda.org/manual/7.21/reference/rest/decision-requirements-definition/get-query-count/) method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\DecisionRequirementsDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$decision_requirements_definition_id = "decision_requirements_definition_id_example"; // string | Filter by decision requirements definition id.
$decision_requirements_definition_id_in = "decision_requirements_definition_id_in_example"; // string | Filter by decision requirements definition ids.
$name = "name_example"; // string | Filter by decision requirements definition name.
$name_like = "name_like_example"; // string | Filter by decision requirements definition names that the parameter is a substring of.
$deployment_id = "deployment_id_example"; // string | Filter by the id of the deployment a decision requirement definition belongs to.
$key = "key_example"; // string | Filter by decision requirements definition key, i.e., the id in the DMN 1.3 XML. Exact match.
$key_like = "key_like_example"; // string | Filter by decision requirements definition keys that the parameter is a substring of.
$category = "category_example"; // string | Filter by decision requirements definition category. Exact match.
$category_like = "category_like_example"; // string | Filter by decision requirements definition categories that the parameter is a substring of.
$version = 56; // int | Filter by decision requirements definition version.
$latest_version = true; // bool | Only include those decision requirements definitions that are latest versions. Value may only be `true`, as `false` is the default behavior.
$resource_name = "resource_name_example"; // string | Filter by the name of the decision requirements definition resource. Exact match.
$resource_name_like = "resource_name_like_example"; // string | Filter by names of those decision requirements definition resources that the parameter is a substring of.
$tenant_id_in = "tenant_id_in_example"; // string | Filter by a comma-separated list of tenant ids. A decision requirements definition must have one of the given tenant ids.
$without_tenant_id = true; // bool | Only include decision requirements definitions which belong to no tenant. Value may only be `true`, as `false` is the default behavior.
$include_decision_requirements_definitions_without_tenant_id = true; // bool | Include decision requirements definitions which belong to no tenant. Can be used in combination with `tenantIdIn`. Value may only be `true`, as `false` is the default behavior.
$sort_by = "sort_by_example"; // string | Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter.
$sort_order = "sort_order_example"; // string | Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter.
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.

try {
    $result = $apiInstance->getDecisionRequirementsDefinitions($decision_requirements_definition_id, $decision_requirements_definition_id_in, $name, $name_like, $deployment_id, $key, $key_like, $category, $category_like, $version, $latest_version, $resource_name, $resource_name_like, $tenant_id_in, $without_tenant_id, $include_decision_requirements_definitions_without_tenant_id, $sort_by, $sort_order, $first_result, $max_results);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DecisionRequirementsDefinitionApi->getDecisionRequirementsDefinitions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **decision_requirements_definition_id** | **string**| Filter by decision requirements definition id. | [optional]
 **decision_requirements_definition_id_in** | **string**| Filter by decision requirements definition ids. | [optional]
 **name** | **string**| Filter by decision requirements definition name. | [optional]
 **name_like** | **string**| Filter by decision requirements definition names that the parameter is a substring of. | [optional]
 **deployment_id** | **string**| Filter by the id of the deployment a decision requirement definition belongs to. | [optional]
 **key** | **string**| Filter by decision requirements definition key, i.e., the id in the DMN 1.3 XML. Exact match. | [optional]
 **key_like** | **string**| Filter by decision requirements definition keys that the parameter is a substring of. | [optional]
 **category** | **string**| Filter by decision requirements definition category. Exact match. | [optional]
 **category_like** | **string**| Filter by decision requirements definition categories that the parameter is a substring of. | [optional]
 **version** | **int**| Filter by decision requirements definition version. | [optional]
 **latest_version** | **bool**| Only include those decision requirements definitions that are latest versions. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **resource_name** | **string**| Filter by the name of the decision requirements definition resource. Exact match. | [optional]
 **resource_name_like** | **string**| Filter by names of those decision requirements definition resources that the parameter is a substring of. | [optional]
 **tenant_id_in** | **string**| Filter by a comma-separated list of tenant ids. A decision requirements definition must have one of the given tenant ids. | [optional]
 **without_tenant_id** | **bool**| Only include decision requirements definitions which belong to no tenant. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **include_decision_requirements_definitions_without_tenant_id** | **bool**| Include decision requirements definitions which belong to no tenant. Can be used in combination with &#x60;tenantIdIn&#x60;. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **sort_by** | **string**| Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter. | [optional]
 **sort_order** | **string**| Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter. | [optional]
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]

### Return type

[**\Camunda\Client\Model\DecisionRequirementsDefinitionDto[]**](../Model/DecisionRequirementsDefinitionDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDecisionRequirementsDefinitionsCount**
> \Camunda\Client\Model\CountResultDto getDecisionRequirementsDefinitionsCount($decision_requirements_definition_id, $decision_requirements_definition_id_in, $name, $name_like, $deployment_id, $key, $key_like, $category, $category_like, $version, $latest_version, $resource_name, $resource_name_like, $tenant_id_in, $without_tenant_id, $include_decision_requirements_definitions_without_tenant_id)

Get Decision Requirements Definition Count

Requests the number of decision requirements definitions that fulfill the query criteria. Takes the same filtering parameters as the [Get Decision Requirements Definitions](https://docs.camunda.org/manual/7.21/reference/rest/decision-requirements-definition/get-query/) method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\DecisionRequirementsDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$decision_requirements_definition_id = "decision_requirements_definition_id_example"; // string | Filter by decision requirements definition id.
$decision_requirements_definition_id_in = "decision_requirements_definition_id_in_example"; // string | Filter by decision requirements definition ids.
$name = "name_example"; // string | Filter by decision requirements definition name.
$name_like = "name_like_example"; // string | Filter by decision requirements definition names that the parameter is a substring of.
$deployment_id = "deployment_id_example"; // string | Filter by the id of the deployment a decision requirement definition belongs to.
$key = "key_example"; // string | Filter by decision requirements definition key, i.e., the id in the DMN 1.3 XML. Exact match.
$key_like = "key_like_example"; // string | Filter by decision requirements definition keys that the parameter is a substring of.
$category = "category_example"; // string | Filter by decision requirements definition category. Exact match.
$category_like = "category_like_example"; // string | Filter by decision requirements definition categories that the parameter is a substring of.
$version = 56; // int | Filter by decision requirements definition version.
$latest_version = true; // bool | Only include those decision requirements definitions that are latest versions. Value may only be `true`, as `false` is the default behavior.
$resource_name = "resource_name_example"; // string | Filter by the name of the decision requirements definition resource. Exact match.
$resource_name_like = "resource_name_like_example"; // string | Filter by names of those decision requirements definition resources that the parameter is a substring of.
$tenant_id_in = "tenant_id_in_example"; // string | Filter by a comma-separated list of tenant ids. A decision requirements definition must have one of the given tenant ids.
$without_tenant_id = true; // bool | Only include decision requirements definitions which belong to no tenant. Value may only be `true`, as `false` is the default behavior.
$include_decision_requirements_definitions_without_tenant_id = true; // bool | Include decision requirements definitions which belong to no tenant. Can be used in combination with `tenantIdIn`. Value may only be `true`, as `false` is the default behavior.

try {
    $result = $apiInstance->getDecisionRequirementsDefinitionsCount($decision_requirements_definition_id, $decision_requirements_definition_id_in, $name, $name_like, $deployment_id, $key, $key_like, $category, $category_like, $version, $latest_version, $resource_name, $resource_name_like, $tenant_id_in, $without_tenant_id, $include_decision_requirements_definitions_without_tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DecisionRequirementsDefinitionApi->getDecisionRequirementsDefinitionsCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **decision_requirements_definition_id** | **string**| Filter by decision requirements definition id. | [optional]
 **decision_requirements_definition_id_in** | **string**| Filter by decision requirements definition ids. | [optional]
 **name** | **string**| Filter by decision requirements definition name. | [optional]
 **name_like** | **string**| Filter by decision requirements definition names that the parameter is a substring of. | [optional]
 **deployment_id** | **string**| Filter by the id of the deployment a decision requirement definition belongs to. | [optional]
 **key** | **string**| Filter by decision requirements definition key, i.e., the id in the DMN 1.3 XML. Exact match. | [optional]
 **key_like** | **string**| Filter by decision requirements definition keys that the parameter is a substring of. | [optional]
 **category** | **string**| Filter by decision requirements definition category. Exact match. | [optional]
 **category_like** | **string**| Filter by decision requirements definition categories that the parameter is a substring of. | [optional]
 **version** | **int**| Filter by decision requirements definition version. | [optional]
 **latest_version** | **bool**| Only include those decision requirements definitions that are latest versions. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **resource_name** | **string**| Filter by the name of the decision requirements definition resource. Exact match. | [optional]
 **resource_name_like** | **string**| Filter by names of those decision requirements definition resources that the parameter is a substring of. | [optional]
 **tenant_id_in** | **string**| Filter by a comma-separated list of tenant ids. A decision requirements definition must have one of the given tenant ids. | [optional]
 **without_tenant_id** | **bool**| Only include decision requirements definitions which belong to no tenant. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **include_decision_requirements_definitions_without_tenant_id** | **bool**| Include decision requirements definitions which belong to no tenant. Can be used in combination with &#x60;tenantIdIn&#x60;. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]

### Return type

[**\Camunda\Client\Model\CountResultDto**](../Model/CountResultDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

