# Camunda\Client\AuthorizationApi

All URIs are relative to *http://{host}:{port}/{contextPath}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**availableOperationsAuthorization**](AuthorizationApi.md#availableoperationsauthorization) | **OPTIONS** /authorization | Authorization Resource Options
[**availableOperationsAuthorizationInstance**](AuthorizationApi.md#availableoperationsauthorizationinstance) | **OPTIONS** /authorization/{id} | Authorization Resource Options
[**createAuthorization**](AuthorizationApi.md#createauthorization) | **POST** /authorization/create | Create a New Authorization
[**deleteAuthorization**](AuthorizationApi.md#deleteauthorization) | **DELETE** /authorization/{id} | Delete Authorization
[**getAuthorization**](AuthorizationApi.md#getauthorization) | **GET** /authorization/{id} | Get Authorization
[**getAuthorizationCount**](AuthorizationApi.md#getauthorizationcount) | **GET** /authorization/count | Get Authorization Count
[**isUserAuthorized**](AuthorizationApi.md#isuserauthorized) | **GET** /authorization/check | Perform an Authorization Check
[**queryAuthorizations**](AuthorizationApi.md#queryauthorizations) | **GET** /authorization | Get Authorizations
[**updateAuthorization**](AuthorizationApi.md#updateauthorization) | **PUT** /authorization/{id} | Update an Authorization

# **availableOperationsAuthorization**
> \Camunda\Client\Model\ResourceOptionsDto availableOperationsAuthorization()

Authorization Resource Options

The OPTIONS request allows you to check for the set of available operations that the currently authenticated user can perform on the `/authorization` resource. Whether the user can perform an operation or not may depend on various factors, including the users authorizations to interact with this resource and the internal configuration of the process engine.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->availableOperationsAuthorization();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->availableOperationsAuthorization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Camunda\Client\Model\ResourceOptionsDto**](../Model/ResourceOptionsDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **availableOperationsAuthorizationInstance**
> \Camunda\Client\Model\ResourceOptionsDto availableOperationsAuthorizationInstance($id)

Authorization Resource Options

The OPTIONS request allows you to check for the set of available operations that the currently authenticated user can perform on a given instance of the `/authorization` resource. Whether the user can perform an operation or not may depend on various factors, including the users authorizations to interact with this resource and the internal configuration of the process engine.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the authorization to be retrieved.

try {
    $result = $apiInstance->availableOperationsAuthorizationInstance($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->availableOperationsAuthorizationInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the authorization to be retrieved. |

### Return type

[**\Camunda\Client\Model\ResourceOptionsDto**](../Model/ResourceOptionsDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createAuthorization**
> \Camunda\Client\Model\AuthorizationDto createAuthorization($body)

Create a New Authorization

Creates a new authorization.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Camunda\Client\Model\AuthorizationCreateDto(); // \Camunda\Client\Model\AuthorizationCreateDto | 

try {
    $result = $apiInstance->createAuthorization($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->createAuthorization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Camunda\Client\Model\AuthorizationCreateDto**](../Model/AuthorizationCreateDto.md)|  | [optional]

### Return type

[**\Camunda\Client\Model\AuthorizationDto**](../Model/AuthorizationDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAuthorization**
> deleteAuthorization($id)

Delete Authorization

Deletes an authorization by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the authorization to be deleted.

try {
    $apiInstance->deleteAuthorization($id);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->deleteAuthorization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the authorization to be deleted. |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAuthorization**
> \Camunda\Client\Model\AuthorizationDto getAuthorization($id)

Get Authorization

Retrieves an authorization by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the authorization to be retrieved.

try {
    $result = $apiInstance->getAuthorization($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->getAuthorization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the authorization to be retrieved. |

### Return type

[**\Camunda\Client\Model\AuthorizationDto**](../Model/AuthorizationDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAuthorizationCount**
> \Camunda\Client\Model\CountResultDto getAuthorizationCount($id, $type, $user_id_in, $group_id_in, $resource_type, $resource_id)

Get Authorization Count

Queries for authorizations using a list of parameters and retrieves the count.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Filter by the id of the authorization.
$type = 56; // int | Filter by authorization type. (0=global, 1=grant, 2=revoke). See the [User Guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/authorization-service/#authorization-type) for more information about authorization types.
$user_id_in = "user_id_in_example"; // string | Filter by a comma-separated list of userIds.
$group_id_in = "group_id_in_example"; // string | Filter by a comma-separated list of groupIds.
$resource_type = 56; // int | Filter by an integer representation of the resource type. See the [User Guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/authorization-service/#resources) for a list of integer representations of resource types.
$resource_id = "resource_id_example"; // string | Filter by resource id.

try {
    $result = $apiInstance->getAuthorizationCount($id, $type, $user_id_in, $group_id_in, $resource_type, $resource_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->getAuthorizationCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Filter by the id of the authorization. | [optional]
 **type** | **int**| Filter by authorization type. (0&#x3D;global, 1&#x3D;grant, 2&#x3D;revoke). See the [User Guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/authorization-service/#authorization-type) for more information about authorization types. | [optional]
 **user_id_in** | **string**| Filter by a comma-separated list of userIds. | [optional]
 **group_id_in** | **string**| Filter by a comma-separated list of groupIds. | [optional]
 **resource_type** | **int**| Filter by an integer representation of the resource type. See the [User Guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/authorization-service/#resources) for a list of integer representations of resource types. | [optional]
 **resource_id** | **string**| Filter by resource id. | [optional]

### Return type

[**\Camunda\Client\Model\CountResultDto**](../Model/CountResultDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **isUserAuthorized**
> \Camunda\Client\Model\AuthorizationCheckResultDto isUserAuthorized($permission_name, $resource_name, $resource_type, $resource_id, $user_id)

Perform an Authorization Check

Performs an authorization check for the currently authenticated user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$permission_name = "permission_name_example"; // string | String value representing the permission name to check for.
$resource_name = "resource_name_example"; // string | String value for the name of the resource to check permissions for.
$resource_type = 56; // int | An integer representing the resource type to check permissions for. See the [User Guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/authorization-service/#resources) for a list of integer representations of resource types.
$resource_id = "resource_id_example"; // string | The id of the resource to check permissions for. If left blank, a check for global permissions on the resource is performed.
$user_id = "user_id_example"; // string | The id of the user to check permissions for. The currently authenticated user must have a READ permission for the Authorization resource. If `userId` is blank, a check for the currently authenticated user is performed.

try {
    $result = $apiInstance->isUserAuthorized($permission_name, $resource_name, $resource_type, $resource_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->isUserAuthorized: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **permission_name** | **string**| String value representing the permission name to check for. |
 **resource_name** | **string**| String value for the name of the resource to check permissions for. |
 **resource_type** | **int**| An integer representing the resource type to check permissions for. See the [User Guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/authorization-service/#resources) for a list of integer representations of resource types. |
 **resource_id** | **string**| The id of the resource to check permissions for. If left blank, a check for global permissions on the resource is performed. | [optional]
 **user_id** | **string**| The id of the user to check permissions for. The currently authenticated user must have a READ permission for the Authorization resource. If &#x60;userId&#x60; is blank, a check for the currently authenticated user is performed. | [optional]

### Return type

[**\Camunda\Client\Model\AuthorizationCheckResultDto**](../Model/AuthorizationCheckResultDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryAuthorizations**
> \Camunda\Client\Model\AuthorizationDto[] queryAuthorizations($id, $type, $user_id_in, $group_id_in, $resource_type, $resource_id, $sort_by, $sort_order, $first_result, $max_results)

Get Authorizations

Queries for a list of authorizations using a list of parameters. The size of the result set can be retrieved by using the [Get Authorization Count](https://docs.camunda.org/manual/7.21/reference/rest/authorization/get-query-count/) method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Filter by the id of the authorization.
$type = 56; // int | Filter by authorization type. (0=global, 1=grant, 2=revoke). See the [User Guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/authorization-service/#authorization-type) for more information about authorization types.
$user_id_in = "user_id_in_example"; // string | Filter by a comma-separated list of userIds.
$group_id_in = "group_id_in_example"; // string | Filter by a comma-separated list of groupIds.
$resource_type = 56; // int | Filter by an integer representation of the resource type. See the [User Guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/authorization-service/#resources) for a list of integer representations of resource types.
$resource_id = "resource_id_example"; // string | Filter by resource id.
$sort_by = "sort_by_example"; // string | Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter.
$sort_order = "sort_order_example"; // string | Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter.
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.

try {
    $result = $apiInstance->queryAuthorizations($id, $type, $user_id_in, $group_id_in, $resource_type, $resource_id, $sort_by, $sort_order, $first_result, $max_results);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->queryAuthorizations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Filter by the id of the authorization. | [optional]
 **type** | **int**| Filter by authorization type. (0&#x3D;global, 1&#x3D;grant, 2&#x3D;revoke). See the [User Guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/authorization-service/#authorization-type) for more information about authorization types. | [optional]
 **user_id_in** | **string**| Filter by a comma-separated list of userIds. | [optional]
 **group_id_in** | **string**| Filter by a comma-separated list of groupIds. | [optional]
 **resource_type** | **int**| Filter by an integer representation of the resource type. See the [User Guide](https://docs.camunda.org/manual/7.21/user-guide/process-engine/authorization-service/#resources) for a list of integer representations of resource types. | [optional]
 **resource_id** | **string**| Filter by resource id. | [optional]
 **sort_by** | **string**| Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter. | [optional]
 **sort_order** | **string**| Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter. | [optional]
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]

### Return type

[**\Camunda\Client\Model\AuthorizationDto[]**](../Model/AuthorizationDto.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAuthorization**
> updateAuthorization($id, $body)

Update an Authorization

Updates an authorization by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Camunda\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Camunda\Client\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the authorization to be updated.
$body = new \Camunda\Client\Model\AuthorizationUpdateDto(); // \Camunda\Client\Model\AuthorizationUpdateDto | 

try {
    $apiInstance->updateAuthorization($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->updateAuthorization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the authorization to be updated. |
 **body** | [**\Camunda\Client\Model\AuthorizationUpdateDto**](../Model/AuthorizationUpdateDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

